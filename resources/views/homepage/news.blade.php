@extends('news.layout')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
  <title></title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  </head>
    <div class="backbutton">
     <input type="button" onclick="history.back()" value="戻る">
    </div>
  <body>
    <table class="osirase">
     <tr>
      <td colspan="2">お知らせ       <input type="button" onclick="history.back()" value="戻る"></td>
     </tr>
     <tr>
     <td colspan="2"><a href="homepage/info?id={{$item->info_id}}">{{ $item -> content }}</a></td>
     </tr>

     <tr>
      <td colspan="2"><a href="homepage/info?id={{$item->info_id">{{ $item -> content }}</a></td>
    </tr>
    </table>
  </body>
</html>