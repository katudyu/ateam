@extends('layouts.mypageapp')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
  <td><button  onclick="location.href='HomePage'">戻る</button></td>
   <meta charset="UTF-8">
  </head>
  <body>
  <td><input type="button" class="mypage" onclick="location.href='/mypage/mypage7'">現在保有ポイント ( )</td>
  <p></p>
    <table>
    <form action="/mypage/mypage1" method="post">
        @csrf
        <input type="button" class="button" onclick="location.href='/mypage/mypage2'" value="設定の変更">
        <input type="button" class="button" onclick="location.href='/mypage/mypage10'" value="ヘルプ">
        <input type="button" class="button" onclick="location.href='/mypage/mypage6'" value="お問い合わせ">
    </form>
    </table>
    <input type="button" class="button" onclick="location.href='/login'" 
    value="ログアウト">
  </body>
</html>
</div>
@endsection
