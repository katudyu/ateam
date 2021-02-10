@extends('layouts.mypageapp')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
  <table>
<form action="/mypage/mypage7" method="post">
    @csrf
    <p>購入詳細</p>
    <tr><th>注文日時</th><td></td></tr>
    <tr><th>合計金額</th><td></td></tr>
    <tr><th>支払方法</th><td></td></tr>
    <tr><th>配達時間</th><td></td></tr>
    <tr><th>送付先</th><td></td></tr>
    <tr><th>備考</th><td></td></tr>
</form>
</table>
<table>
<form>
    @csrf
    <p>購入内約</p>
    <tr><th>商品名</th><td></td></tr>
    <tr><th>注文個数</th><td></td></tr>
    <tr><th>価格</th><td></td></tr>
    <tr><th>代金小計</th><td></td></tr>
</form>
</table>
<input type="button" class="button" onclick="location.href='/mypage/mypage8'" value="購入履歴">
<input type="button" class="button" onclick="location.href='/mypage/mypage1'" value="マイページに戻る">
  </body>
</html>
</div>
@endsection
