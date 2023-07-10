<?php
session_start();

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

// 회원가입 처리
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    }
    else {
        $error = '회원가입 실패';
    }
}
//실패시 회원가입 실패 출력
?>

<!DOCTYPE html>
<html>
<head>
    <title>회원가입</title>
</head>
<body>
<h1>회원가입</h1>

<?php if (isset($error)) : ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>

<form action="register.php" method="POST">
    <label for="username">사용자명:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">비밀번호:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">회원가입</button>
</form>
<p>이미 계정이 있으신가요? <a href="login.php">로그인</a></p>
</body>
</html>
