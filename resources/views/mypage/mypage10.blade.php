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

    @csrf
    よくある質問<br>
    <li>Q.テスト<br>
    A.テスト
    
</table>
  </body>
</html>
</div>
@endsection