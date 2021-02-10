@extends('layouts.mypageapp')

<input type="button" class="button4" onclick="history.back()" value="戻る">
@section('content')
    <form action="/mypage/mypage14" method="post">
      <div>
        @csrf
        <lavel>お問い合わせフォーム</lavel><br>
        <span>ユーザーID:{{$user_id}}</span><br>
        <span>{{$opinioncontent}}</span>
      </div>
      以下の内容で送信します。
      よろしいですか?<br>
      <input type="submit" class="button3" value="送信">
    </form>
@endsection
