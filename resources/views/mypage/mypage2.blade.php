@extends('layouts.mypageapp')
<input type="button" class="button4" onclick="history.back()" value="戻る">

@section('content')
<!DOCTYPE HTML>
<html>
  <body>
    <table>
        <form action="/mypage/mypage2" method="post">
            @csrf
            <input type="button" class="button" onclick="location.href='/mypage/mypage3'" value="あなたについて">
            <input type="button" class="button" onclick="location.href='/mypage/mypage11'" value="通知の設定">
            <input type="button" class="button" onclick="location.href='/mypage/mypage4'" value="パスワードの変更">
            <input type="button" class="button" onclick="location.href='/mypage/mypage5'" value="支払方法の変更">
        </form>
    </table>
  </body>
</html>
</div>
@endsection
