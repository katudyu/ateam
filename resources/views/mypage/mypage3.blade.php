@extends('layouts.mypageapp')

<input type="button" class="button4" onclick="history.back()" value="戻る">

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
  </head>
    <body>
        消費Kcalなどのデータを取るにはあなたの情報が必要です。<br>
        より高いパフォーマンスのためにこまめに入力しましょう。
        <table>
        <form action="/mypage/mypage3" method="post">
            @csrf
            <tr><th>性別</th></tr>
            <tr><th>身長  <input type="number" name="height" ></th></tr>
            <tr><th>体重  <input type="number" name="weight" ></th></tr>
        </form>
        </table>  
    </body>
</html>
@endsection
