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
    <form action="/mypage/mypage4" method="post">
      @csrf
      <tr><th>前のパスワード <input type="text" name="pas" ></th></tr>
      <tr><th>新しいパスワード <input type="text" name="npas" ></th></tr>
      <tr><th>確認 <input type="text" name="npas"></th></tr>
    </form>
  </table>
  <input type="button" class="button3" onclick="location.href='/mypage/mypage12'" value="登録"><br>
  </body>
</html>
@endsection
