@extends('layouts.Eventpage')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
  <title>イベント</title>
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

    <div class="mokuhyou">
     <h3>目標走行距離</h1>
    </div>

    <div class="Km">
     <div style="text-align: right"><p><font size="+5">Km</font></p></div>
    </div>

    <div class="kaisai">
     <h3>開催期間</h2>
    </div>

    <div class="kaisaibi">
     <div style="text-align: center"><span style="font-size:180%;">〇月1日～〇月31日</span></div>
    </div>

    <div class="genzai">
     <h3>現在の走行距離</h3>
    </div>

    <div class="Km">
     <div style="text-align: right"><p><font size="+5">Km</font></p></div> 
    </div>

    <ul class="progressbar">
            <label for="file">100%</label>
            <progress id="file" max="100" value="100" style="width: 650px;
            height:100px;"> 0% </progress>
    </ul>

    <table class="ranking">
     <tr>
      <th colspan="2">ランキング</th>
     </tr>
     <tr>
      <td><a href="../HomePage/myrank">自分の順位</a></td>
      <td><a href="../HomePage/toprank">トップ</a></td>
     <tr>
     @foreach ($sorts as $sort)
      <tr>
        <td colspan="2">{{ $sort -> run }}</td>
      </tr>
     @endforeach
    </table>
    <div class="links">
    {{ $sorts->links() }}
    <div>
  </body>
@endsection
  </body>
</html>