<?php
session_start();

// checking login status
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>파일 다운로드</title>
</head>
<body>
<h1>파일 다운로드</h1>

<nav>
    <ul>
        <li><a href="index.php">홈</a></li>
        <li><a href="upload.php">파일 업로드</a></li>
        <li><a href="download.php">파일 다운로드</a></li>
    </ul>
</nav>

<h2>파일 목록</h2>
<?php
$files = glob('C:/upload/*');

if (count($files) > 0) {
    echo '<ul>';
    foreach ($files as $file) {
        echo '<li><a href="' . $file . '">' . basename($file) . '</a></li>';
    }
    echo '</ul>';
} else {
    echo '파일이 없습니다.';
}
?>
<!-- 만약 해당 경로에 파일이 있으면 파일들 출력 없을시 파일이 없습니다 출력 -->

<br>

<a href="index.php">홈으로</a>
</body>
</html>