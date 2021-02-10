@extends('layouts.mypageapp')

<input type="button" class="button4" onclick="history.back()" value="戻る">

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
  <table>
<form action="/mypage/mypage5" method="post">
    @csrf
    <tr><th>カードの種類<input type="button" class="button2" value=">"></th></tr>
    <tr><th>番号<input type="button" class="button2" value=">"></th></tr>
    <tr><th>有効期限<input type="button" class="button2" value=">"></th></tr>
    <tr><th>CVVセキュリティコード<input type="button" class="button2" value=">"></th></tr>
</form>
</table>
<input type="button" class="button3" onclick="location.href='/mypage/mypage13'" value="登録">
  </body>
</html>
</div>
@endsection
