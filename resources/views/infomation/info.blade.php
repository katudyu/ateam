@extends('layouts.homelayout')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
  <td><button class="mypage" href=""></button></td>
   <title>お知らせ</title>
   <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  </head>
  <body>
  <div class="backbutton">
     <input type="button" onclick="history.back()" value="戻る">
  </div>
  <table class="news_content" border="3">
  <tr>
    <th><p>お知らせ<p></th>
  </tr>
  <tr border="3">
    <td>{{ $info->content }}</td>
  </tr> 
  </table>
  </body>
</html>
@endsection

