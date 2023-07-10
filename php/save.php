<?php
session_start();

// 로그인 상태 확인
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

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





// 폼에서 입력된 내용 가져오기

$searchOption = $_POST['search_option'];
$count = $_POST['quantity'];

$name = $_POST['employee'];

$date = $_POST['date'];
$company = $_POST['company'];
$registration_number = $_POST['registration_number'];
$item = $_POST['item'];
$supply_amount = $_POST['supply_amount'];
$vat = $_POST['vat'];
$total_amount = $_POST['total_amount'];
$remarks = $_POST['remarks'];

// 입력된 내용을 데이터베이스에 저장
if($searchOption === 'records')
    $sql = "INSERT INTO $searchOption (date, company, registration_number, item, supply_amount, vat, total_amount, remarks)
        VALUES ('$date', '$company', '$registration_number', '$item', '$supply_amount', '$vat', '$total_amount', '$remarks')";
else if($searchOption === 'sell_records') $sql = "INSERT INTO $searchOption (date, name, company, registration_number, item, count, supply_amount, vat, total_amount, remarks)
        VALUES ('$date','$name', '$company', '$registration_number', '$item','$count', '$supply_amount', '$vat', '$total_amount', '$remarks')";

if ($conn->query($sql) === true) {
    echo '저장되었습니다.';
} else {
    echo '저장 실패: ' . $conn->error;
}

$conn->close();
?>
