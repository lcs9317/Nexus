<?php
session_start();

// 데이터베이스 연결 설정
$config = require 'config.php';
$servername = $config['database']['servername'];
$username = $config['database']['username'];

$password = $config['database']['password'];
$dbname = $config['database']['dbname'];

// 데이터베이스 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 오류 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 로그인 상태 확인
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// POST로 전달된 record_id 값 가져오기
$recordId = $_POST['record_id'];

// 데이터 삭제 쿼리 실행
$sql = "DELETE FROM sell_records WHERE recordID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $recordId);
if ($stmt->execute()) {
    // 삭제 성공 시 응답 데이터 전송
    echo "Record deleted successfully";
} else {
    // 삭제 실패 시 응답 데이터 전송
    echo "Error deleting record: " . $conn->error;
}

$stmt->close();
?>
