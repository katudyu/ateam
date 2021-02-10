@extends('layouts.mypageapp')

<input type="button" class="button4" onclick="history.back()" value="戻る">
@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
    <form action="mypage9" method="GET">
      <div>
      @csrf
        <lavel>お問い合わせフォーム</lavel><br>
        <input type="number" name="user_id" value="{{ old('user_id') }}"><br>
        <textarea name="opinioncontent"  rows="10" cols="50" placeholder="お問い合わせ内容を入力してください。" value="{{ old('opinioncontent') }}"></textarea><br>
      </div>
      <input type="submit" class="button3" value="確認">
    </form>
  </body>
</html>
@endsection
