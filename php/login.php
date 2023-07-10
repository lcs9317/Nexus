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

// login handling
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    //DB 불러와서 비교
    $result = $conn->query($sql);
    //비교한 값 result 에 저장
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        $error = '로그인 실패';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>로그인</title>
</head>
<body>
<h1>로그인</h1>

<?php if (isset($error)) : ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>
<!-- 만약 에러가 존재한다면 붉은 글씨로 출력 -->
<form action="login.php" method="POST">
    <label for="username">사용자명:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">비밀번호:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">로그인</button>
    <!-- 사용자명, 비밀번호를 form 태그에 저장 후 서브밋. POST 로 서버에 줌 -->
</form>

<p>계정이 없으신가요? <a href="register.php">회원가입</a></p>
</body>
</html>
