<?php
// 데이터베이스 연결 설정
$servername = 'localhost';  // 데이터베이스 서버 주소
$username = 'root';  // 데이터베이스 사용자명
$password = '036974';  // 데이터베이스 비밀번호
$dbname = 'test1';  // 데이터베이스명

// 데이터베이스 연결 생성
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die('데이터베이스 연결 실패: ' . $conn->connect_error);
}

// POST 요청으로 전달된 수정 내용 가져오기
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recordID = $_POST['recordID'];
    $date = $_POST['date'];
    $company = $_POST['company'];
    $registration_number = $_POST['registration_number'];
    $item = $_POST['item'];
    $supply_amount = $_POST['supply_amount'];
    $vat = $_POST['vat'];
    $total_amount = $_POST['total_amount'];
    $remarks = $_POST['remarks'];

    // 유효성 검사
    if (empty($recordID) || empty($date) || empty($company) || empty($item) || empty($supply_amount) || empty($vat) || empty($total_amount) || empty($registration_number)) {
        die('필수 필드를 모두 입력해야 합니다.'); // All fields must be filled in.
    }

    // SQL 쿼리 생성
    $sql = "UPDATE records SET
        date = '$date',
        company = '$company',
        item = '$item',
        supply_amount = $supply_amount,
        vat = $vat,
        total_amount = $total_amount,
        remarks = '$remarks',
        registration_number = $registration_number
        WHERE recordID = $recordID";

    // SQL 쿼리 실행
    if ($conn->query($sql) === true) {
        echo '데이터가 성공적으로 수정되었습니다.'; // Data has been successfully updated.
    } else {
        echo '데이터 수정 중 오류가 발생했습니다: ' . $conn->error; // An error occurred during data update.
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $_POST 배열 출력
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}

$conn->close();
?>