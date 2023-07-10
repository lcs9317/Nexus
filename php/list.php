<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>매출 품의서</title>
  <style>
    @page {
      size: A4;
      margin: 0;
    }

    html, body {
      margin: 0;
      padding: 0;
    }

    body{
      min-height: 100vh;
      max-width: 850px;
    }

    .container {
      display: flex;
      margin: 20px;
    }

    .container h1 {
      flex: 1;
      text-align: center;
      margin: 20px;
    }

    .container table {
      flex: 1;
      border: 1px solid black;
    }

    .container th,
    .container td {
      text-align: center;
    }

    #tb1 th {
      padding: 5px 0;
      border-bottom: 1px solid black;
      border-right: 1px solid black;
    }

    #tb1 th:last-child {
      border-right: none;
    }

    #tb1 th:nth-child(5) {
      width: 16.67%;
      border-right: 1px solid black;
    }

    #tb1 th:first-child {
      border-left: none;
    }

    .container2 {
      display: flex;
      margin: 20px;
    }

    .container2 table {
      flex: 1;
      border: 1px solid black;
    }

    .container2 th,
    .container2 td {
      text-align: center;
    }

    #tb2 {
      margin: 20px;
    }

    .container3 {
      display: flex;
      margin: 20px;
    }

    .container3 table {
      flex: 1;
      border: 1px solid black;
    }

    .container3 th,
    .container3 td {
      text-align: center;
    }

    #tb3 {
      margin: 20px;
    }

    .container4 {
      display: flex;
      margin: 20px;
    }

    .container4 table {
      flex: 1;
      border: 1px solid black;
    }

    .container4 th,
    .container4 td {
      text-align: center;
    }

    #tb4 {
      margin: 20px;
    }

    .container5 {
      display: flex;
      margin: 20px;
    }

    .container5 table {
      flex: 1;
      border: 1px solid black;
    }

    .container5 th,
    .container5 td {
      text-align: center;
    }

    #tb5 {
      margin: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>매&nbsp;출&nbsp;품&nbsp;의&nbsp;서</h1>
    <table id="tb1">
      <thead>
        <tr>
          <th style="padding: 5px 0;">담당</th>
          <th style="padding: 5px 0;">과장</th>
          <th style="padding: 5px 0;">차장</th>
          <th style="padding: 5px 0;">이사</th>
          <th style="padding: 5px 0;">부사장</th>
          <th style="padding: 5px 0;">대표</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="border-right: 1px solid black;">-</td>
          <td style="border-right: 1px solid black;">-</td>
          <td style="border-right: 1px solid black;">-</td>
          <td style="border-right: 1px solid black;">-</td>
          <td style="border-right: 1px solid black;">-</td>
          <td>-</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="container2">
    <table id="tb2">
      <tbody>
        <tr>
          <th width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">계약일</th>
          <td style="border-right: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
          <th width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">담당자</th>
          <td style="border-bottom: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
        </tr>
        <tr>
          <th width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">품의서 번호</th>
          <td style="border-right: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
          <th width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">영업 담당</th>
          <td style="border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
        </tr>
        <tr>
          <th width="100" height="40" style="border-right: 1px solid black;">결제 방법</th>
          <td style="border-right: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
          <th width="100" height="40" style="border-right: 1px solid black;">계산서 발행 방법</th>
          <td>
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="container3">
    <table id="tb3">
      <tbody>
        <tr>
          <th width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">고객사명</th>
          <td style="border-right: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
          <th width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">담당자</th>
          <td style="border-bottom: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
        </tr>
        <tr>
          <th width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">연락처</th>
          <td style="border-right: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
          <th width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">E-Mail</th>
          <td style="border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
        </tr>
        <tr>
          <th width="100" height="40" style="border-right: 1px solid black;">주소</th>
          <td colspan="3">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class = "container4">
  <table id = "tb4">
    <thead>
      <tr>
        <th width="40" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">항목</th>
        <th width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">내용</th>
        <th width="100" height="40" style="border-bottom: 1px solid black;">상세 내용</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td width="40" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">
            <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
        </td>
        <td width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">
            <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
        </td>
        <td width="100" height="40" style=" border-bottom: 1px solid black;">
            <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
        </td>
      </tr>
      <tr>
        <td width="40" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">
            <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
        </td>
        <td width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">
            <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
        </td>
        <td width="100" height="40" style=" border-bottom: 1px solid black;">
            <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
        </td>
      </tr>
      <tr>
          <td width="40" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
          <td width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
          <td width="100" height="40" style=" border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
      </tr>
      <tr>
          <td width="40" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
          <td width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
          <td width="100" height="40" style=" border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
      </tr>
      <tr>
          <td width="40" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
          <td width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
          <td width="100" height="40" style=" border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
      </tr>
      <tr>
          <td width="40" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
          <td width="100" height="40" style="border-right: 1px solid black; border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
          <td width="100" height="40" style=" border-bottom: 1px solid black;">
              <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
          </td>
      </tr>
      <tr>
        <td width="40" height="40" style="border-right: 1px solid black;">
            <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
        </td>
        <td width="100" height="40" style="border-right: 1px solid black;">
            <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
        </td>
        <td width="100" height="40" >
            <input type="text" name="text" size="10" style="width:90%; border: 0; outline: none;">
        </td>
      </tr>
    </tbody>
  </table>
  </div>

  <div class="container5">
  <table id = "tb5">
    <thead>
      <tr>
        <th width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">항목</th>
        <th width="30" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">수량</th>
        <th width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">수수료</th>
        <th width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">매출</th>
        <th width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">매입</th>
        <th width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">마진</th>
        <th width="100" height="40"style=" border-bottom: 1px solid black;">마진률</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="30" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style=" border-bottom: 1px solid black;">-</td>
      </tr>
      <tr>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="30" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style=" border-bottom: 1px solid black;">-</td>
      </tr>
      <tr>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="30" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style=" border-bottom: 1px solid black;">-</td>
      </tr>
      <tr>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="30" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style=" border-bottom: 1px solid black;">-</td>
      </tr>
      <tr>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="30" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style=" border-bottom: 1px solid black;">-</td>
      </tr>
      <tr>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="30" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style=" border-bottom: 1px solid black;">-</td>
      </tr>
      <tr>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="30" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style=" border-bottom: 1px solid black;">-</td>
      </tr>
      <tr>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="30" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; border-bottom: 1px solid black;">-</td>
        <td width="100" height="40"style=" border-bottom: 1px solid black;">-</td>
      </tr>
      <tr>
        <td width="100" height="40"style="border-right: 1px solid black; ">-</td>
        <td width="30" height="40"style="border-right: 1px solid black; ">-</td>
        <td width="100" height="40"style="border-right: 1px solid black;">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; ">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; ">-</td>
        <td width="100" height="40"style="border-right: 1px solid black; ">-</td>
        <td width="100" height="40">-</td>
      </tr>
    </tbody>
  </table>
  </div>
</body>
</html>