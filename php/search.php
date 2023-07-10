<?php
// DB 연결 설정
$config = require 'config.php';
$servername = $config['database']['servername'];
$username = $config['database']['username'];

$password = $config['database']['password'];
$dbname = $config['database']['dbname'];


require 'vendor/autoload.php'; //해당 라이브러리를 오토 로더 해줌
use PhpOffice\PhpSpreadsheet\Spreadsheet; //엑셀 라이브러리 사용 설정
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;//엑셀 형식으로 저장하는데 씀

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('데이터베이스 연결 실패: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $searchQuery = $_GET['search_query'];
    $searchOption = $_GET['search_option'];

    // 검색 쿼리 생성
    if ($searchOption === 'year') {
        // 검색 쿼리 생성
        $sql = "SELECT * FROM records WHERE YEAR(date) = '$searchQuery'";
    }else if ($searchOption === 'month'){
        $sql = "SELECT * FROM records WHERE MONTH(date) =
        '$searchQuery'";
    }else if ($searchOption === 'day'){
        $sql = "SELECT* FROM records WHERE DAY(date) =
        '$searchQuery'";
    }else {
        // 검색 쿼리 생성
        $sql = "SELECT * FROM records WHERE $searchOption='$searchQuery'";
    }
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // 검색 결과가 있는 경우에만 처리
        $searchResults = '';
        $searchResults .= '<table style="border-collapse: collapse; border: 1px solid black; text-align: center;">';
        $searchResults .= '<thead>';
        $searchResults .= '<tr>';
        $searchResults .= '<th style="border: 1px solid black; text-align: center;">날짜</th>';
        $searchResults .= '<th style="border: 1px solid black; text-align: center;">상호</th>';
        $searchResults .= '<th style="border: 1px solid black; text-align: center;">등록번호</th>';
        $searchResults .= '<th style="border: 1px solid black; text-align: center;">품목</th>';
        $searchResults .= '<th style="border: 1px solid black; text-align: center;">공급가액</th>';
        $searchResults .= '<th style="border: 1px solid black; text-align: center;">부가세</th>';
        $searchResults .= '<th style="border: 1px solid black; text-align: center;">합계금액</th>';
        $searchResults .= '<th style="border: 1px solid black; text-align: center;">비고</th>';
        $searchResults .= '</tr>';
        $searchResults .= '</thead>';
        $searchResults .= '<tbody>';
    
        while ($row = $result->fetch_assoc()) {
            $searchResults .= '<tr>';
            $searchResults .= '<td style="border: 1px solid black; text-align: center;">' . $row['date'] . '</td>';
            $searchResults .= '<td style="border: 1px solid black; text-align: center;">' . $row['company'] . '</td>';
            $searchResults .= '<td style="border: 1px solid black; text-align: center;">' . $row['registration_number'] . '</td>';
            $searchResults .= '<td style="border: 1px solid black; text-align: center;">' . $row['item'] . '</td>';
            $searchResults .= '<td style="border: 1px solid black; text-align: center;">' . $row['supply_amount'] . '</td>';
            $searchResults .= '<td style="border: 1px solid black; text-align: center;">' . $row['vat'] . '</td>';
            $searchResults .= '<td style="border: 1px solid black; text-align: center;">' . $row['total_amount'] . '</td>';
            $searchResults .= '<td style="border: 1px solid black; text-align: center;">' . $row['remarks'] . '</td>';
            $searchResults .= '</tr>';
        }
    

        $searchResults .= '</tbody>';
        $searchResults .= '</table>';

        echo $searchResults;
    } else {
        echo '<h2>검색 결과</h2>';
        echo '<p>검색 결과가 없습니다.</p>';
    }

    // 검색 결과를 엑셀 파일로 변환
    $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', '날짜');
    $sheet->setCellValue('B1', '상호');
    $sheet->setCellValue('C1', '등록번호');
    $sheet->setCellValue('D1', '품목');
    $sheet->setCellValue('E1', '공급가액');
    $sheet->setCellValue('F1', '부가세');
    $sheet->setCellValue('G1', '합계금액');
    $sheet->setCellValue('H1', '비고');

    $rowNum = 2;
    $result = $conn->query($sql); // 검색 결과를 다시 가져옵니다.
    while ($row = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $rowNum, $row['date']);
        $sheet->setCellValue('B' . $rowNum, $row['company']);
        $sheet->setCellValue('C' . $rowNum, $row['registration_number']);
        $sheet->setCellValue('D' . $rowNum, $row['item']);
        $sheet->setCellValue('E' . $rowNum, $row['supply_amount']);
        $sheet->setCellValue('F' . $rowNum, $row['vat']);
        $sheet->setCellValue('G' . $rowNum, $row['total_amount']);
        $sheet->setCellValue('H' . $rowNum, $row['remarks']);
        $rowNum++;
    }

    // 엑셀 파일로 저장
    $writer = new Xlsx($spreadsheet);
    $fileName = 'search_results.xlsx';
    $writer->save($fileName);

    // 엑셀 파일 다운로드 URL 생성
    $downloadUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $fileName;

    // 다운로드 링크 출력
    echo '<h2>검색 결과</h2>';
    echo '<p>다운로드 링크: <a href="' . $downloadUrl . '">여기를 클릭하세요</a></p>';


      // JavaScript를 사용하여 파일 다운로드
        echo '<script>
            document.getElementById("downloadLink").addEventListener("click", function(event) {
                event.preventDefault();
                window.location.href = "' . $downloadUrl . '";
            });
        </script>';
}

$conn->close();
?>