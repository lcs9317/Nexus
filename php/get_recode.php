<?php
// 데이터베이스 연결 설정
$config = require 'config.php';
$servername = $config['database']['servername'];
$username = $config['database']['username'];

$password = $config['database']['password'];
$dbname = $config['database']['dbname'];

// 데이터베이스 연결 생성
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die('데이터베이스 연결 실패: ' . $conn->connect_error);
}

// 저장된 내용 가져오기
$sql = "SELECT * FROM records";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<tr>
            <th>날짜</th>
            <th>상호</th>
            <th>등록번호</th>
            <th>품목</th>
            <th>공급가액</th>
            <th>부가세</th>
            <th>합계금액</th>
            <th>비고</th>
        </tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . $row['date'] . '</td>
                <td>' . $row['company'] . '</td>
                <td>' . $row['registration_number'] . '</td>
                <td>' . $row['item'] . '</td>
                <td>' . $row['supply_amount'] . '</td>
                <td>' . $row['vat'] . '</td>
                <td>' . $row['total_amount'] . '</td>
                <td>' . $row['remarks'] . '</td>
                <td><button onclick="deleteRecord(\'' . $row['recordID'] . '\')">삭제</button></td>
            </tr>';
    }
} else {
    echo '<tr><td colspan="8">저장된 내용이 없습니다.</td></tr>';
}

$conn->close();
?>

<!-- 확인(완) -->