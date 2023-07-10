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

// SQL 쿼리 작성
$sql = "SELECT r.date, r.company, r.item, r.supply_amount, s.supply_amount, r.count
        FROM sell_records r
        JOIN records s ON r.date = s.date AND r.company = s.company AND r.item = s.item";

// 쿼리 실행
$result = $conn->query($sql);




if ($result->num_rows > 0) {
    echo '<table>
            <tr>
                <th>날짜</th>
                <th>거래처명</th>
                <th>품명</th>
                <th>수량</th>
                <th>매출금액</th>
                <th>부가세</th>
                <th>합계</th>
                <th>매입가(수수료)</th>
                <th>매출이익</th>
                <th>이익률</th>
            </tr>';

    while ($row = $result->fetch_assoc()) {
        $date = $row['date'];
        $company = $row['company'];
        $item = $row['item'];
        $supplyAmount = $row['supply_amount'];
        $count = $row['count'];

        $vat = $supplyAmount * 0.1;
        $total = $supplyAmount * $count;
        $buyAmount = $row['supply_amount']; // 매입가(수수료) 값은 어떤 필드에 저장되어 있는지 알아야 할 것 같습니다.
        $sellProfit = ($supplyAmount - $buyAmount) * $count;
        $profitPercentage = ($sellProfit / $supplyAmount) * 100;






        echo '<tr>';
        echo '<td>' . $date . '</td>';
        echo '<td>' . $company . '</td>';
        echo '<td>' . $item . '</td>';
        echo '<td>' . $count . '</td>';
        echo '<td>' . $supplyAmount . '</td>';
        echo '<td>' . $vat . '</td>';
        echo '<td>' . $total . '</td>';
        echo '<td>' . $buyAmount . '</td>';
        echo '<td>' . $sellProfit . '</td>';
        echo '<td>' . $profitPercentage . '%</td>';
        echo '</tr>';

        $sql2 = "INSERT INTO total_records (date, company, item, count, sell_amount, vat, total_amount,
            buy_amount,sell_profit, profit )
        SELECT '$date', '$company', '$item', $count, $supplyAmount, $vat, $total,
                $buyAmount, $sellProfit, $profitPercentage
        FROM dual
        WHERE NOT EXISTS (
            SELECT 1
            FROM total_records
            WHERE date = '$date' AND company = '$company' AND item = '$item'
        )";
        $conn->query($sql2);



    }





    echo '</table>';
} else {
    echo '조건에 맞는 데이터가 없습니다.';
}

$conn->close();
?>
