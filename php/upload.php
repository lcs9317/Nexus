<?php
session_start();
//세션 시작

// checking login status
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// file uploading
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['file'];


    // uploading server with FTP
    $targetDir = 'C:/upload/';
    $targetFile = $targetDir . basename($file['name']);
    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
        $success = '파일 업로드 성공';
    } else {
        $error = '파일 업로드 실패';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>파일 업로드</title>
</head>
<body>
<h1>파일 업로드</h1>

<nav>
    <ul>
        <li><a href="index.php">홈</a></li>
        <li><a href="upload.php">파일 업로드</a></li>
        <li><a href="download.php">파일 다운로드</a></li>
    </ul>
</nav>

<?php if (isset($success)) : ?>
    <p style="color: green;"><?php echo $success; ?></p>
<?php endif; ?>


<?php if (isset($error)) : ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="file">파일 선택:</label>
    <input type="file" id="file" name="file" required><br>

    <button type="submit">업로드</button>
</form>

<a href="index.php">홈으로</a>
</body>
</html>
