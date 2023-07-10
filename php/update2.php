<!DOCTYPE html>
<html>
<head>
    <title>수정</title>
</head>
<body>
    <h1>수정</h1>

    <?php
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

        // 선택된 registration_number에 해당하는 데이터 가져오기
        if (isset($_GET['recordID'])) {
            $recordID = $_GET['recordID'];

            // 값이 존재하는 경우에만 SQL 쿼리 실행
            $sql = "SELECT * FROM records WHERE recordID = $recordID";
            $result = $conn->query($sql);

            if ($result !== false && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
    ?>
                <form action="update2_process.php" method="POST">
                    <input type="hidden" name="recordID" value="<?php echo $row['recordID']; ?>">

                    <label for="date">날짜:</label>
                    <input type="text" id="date" name="date" value="<?php echo $row['date']; ?>" required><br>

                    <label for="company">상호:</label>
                    <input type="text" id="company" name="company" value="<?php echo $row['company']; ?>" required><br>

                    <label for="registration_number">등록번호:</label>
                    <input type="text" id="registration_number" name="registration_number" value="<?php echo $row['registration_number']; ?>" required><br>

                    <label for="item">품목:</label>
                    <input type="text" id="item" name="item" value="<?php echo $row['item']; ?>" required><br>

                    <label for="supply_amount">공급가액:</label>
                    <input type="text" id="supply_amount" name="supply_amount" value="<?php echo $row['supply_amount']; ?>" required><br>

                    <label for="vat">부가세:</label>
                    <input type="text" id="vat" name="vat" value="<?php echo $row['vat']; ?>" required><br>

                    <label for="total_amount">합계금액:</label>
                    <input type="text" id="total_amount" name="total_amount" value="<?php echo $row['total_amount']; ?>" required><br>

                    <label for="remarks">비고:</label>
                    <input type="text" id="remarks" name="remarks" value="<?php echo $row['remarks']; ?>"><br>

                    <button type="submit">저장</button>
                </form>
    <?php
            }  else {
                if ($result === false) {
                    die('SQL 쿼리 실행 오류: ' . $conn->error);
                } else {
                    echo '해당하는 데이터를 찾을 수 없습니다.';
                }
            }
        } else {
            echo '등록번호가 제공되지 않았습니다.';
        }

        $conn->close();
    ?>

    <script>
        function updateRecord(event) {
            event.preventDefault(); // 폼 제출 기본 동작 방지

            //폼 데이터 가져오기
            var recordID = document.getElementById('recordID').value;
            var registration_number = document.getElementById('registration_number').value;
    var date = document.getElementById('date').value;
    var company = document.getElementById('company').value;
    var item = document.getElementById('item').value;
    var supply_amount = document.getElementById('supply_amount').value;
    var vat = document.getElementById('vat').value;
    var total_amount = document.getElementById('total_amount').value;
    var remarks = document.getElementById('remarks').value;

    // 새 XMLHttpRequest 객체 생성
    var xhr = new XMLHttpRequest();

    // 요청 준비
    xhr.open('POST', 'update2_process.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    // 콜백 함수 설정
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // 서버로부터의 응답 처리
                alert(xhr.responseText);
            } else {
                alert('서버 요청 실패: ' + xhr.status); // Server request failed
            }
        }
    };

    // 요청 전송
    xhr.send('recordID=' + encodeURIComponent(recordID) +
        '&date=' + encodeURIComponent(date) +
        '&company=' + encodeURIComponent(company) +
        'registration_number=' + encodeURIComponent(company) +
        '&item=' + encodeURIComponent(item) +
        '&supply_amount=' + encodeURIComponent(supply_amount) +
        '&vat=' + encodeURIComponent(vat) +
        '&total_amount=' + encodeURIComponent(total_amount) +
        '&remarks=' + encodeURIComponent(remarks));
}
    </script>
</body>
</html>