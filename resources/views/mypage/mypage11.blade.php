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
    <tr><th>通知の設定 <input type="button" class="button2" value=">"></th></tr>
    
</form>
</table>
  </body>
</html>
</div>
@endsection
