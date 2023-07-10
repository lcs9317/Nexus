<!DOCTYPE html>
<html>
<head>
    <title>입력</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 0 auto;
            max-width: 400px;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 0px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 3px;
            margin-bottom: 0px;
            border: 0px solid #ccc;
            border-radius: 0px;
            font-size: 15px;

        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        .text-center {
            text-align: center;
        }

        .btn-submit {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // 초기 상태에서는 담당자와 수량 입력칸을 숨깁니다.
            $('#employee-row').hide();
            $('#quantity-row').hide();

            // 옵션 선택에 따라 해당 항목을 보이거나 숨깁니다.
            $('#search_option').change(function () {
                var optionValue = $(this).val();
                if (optionValue === 'sell_records') {
                    $('#employee-row').show();
                    $('#quantity-row').show();
                } else {
                    $('#employee-row').hide();
                    $('#quantity-row').hide();
                }
            });
        });
    </script>
</head>
<body>
<div class="container">
    <h1>입력</h1>

    <form action="save.php" method="POST">
        <table>
            <tr>
                <th><label for="search_option">옵션:</label></th>
                <td><select id="search_option" name="search_option">
                        <option value="records">매입</option>
                        <option value="sell_records">매출</option>
                    </select></td>
            </tr>
            <tr>
                <th><label for="date">날짜:</label></th>
                <td><input type="text" id="date" name="date" required></td>
            </tr>

            <tr id="employee-row">
                <th><label for="employee">담당자:</label></th>
                <td><input type="text" id="employee" name="employee"></td>
            </tr>

            <tr>
                <th><label for="company">상호:</label></th>
                <td><input type="text" id="company" name="company" required></td>
            </tr>
            <tr>
            <tr>
                <th><label for="registration_number">등록번호:</label></th>
                <td><input type="text" id="registration_number" name="registration_number" required></td>
            </tr>

            </tr>
            <tr>
                <th><label for="item">품목:</label></th>
                <td><input type="text" id="item" name="item" required></td>
            </tr>
            <tr id="quantity-row">

                <th><label for="quantity">수량:</label></th>
                <td><input type="text" id="quantity" name="quantity"></td>
            </tr>
            <tr>
                <th><label for="supply_amount">공급가액:</label></th>
                <td><input type="text" id="supply_amount" name="supply_amount" required></td>
            </tr>
            <tr>
                <th><label for="vat">부가세:</label></th>
                <td><input type="text" id="vat" name="vat" required></td>
            </tr>
            <tr>
                <th><label for="total_amount">합계금액:</label></th>
                <td><input type="text" id="total_amount" name="total_amount" required></td>
            </tr>
            <tr>
                <th><label for="remarks">비고:</label></th>
                <td><input type="text" id="remarks" name="remarks"></td>
            </tr>

        </table>

        <div class="text-center">
            <button type="submit" class="btn-submit">저장</button>
        </div>
    </form>
</div>
</body>
</html>
