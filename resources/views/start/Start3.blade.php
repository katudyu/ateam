@extends('layouts.start2')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <td><button class="mypage" onclick="location.href='mypage'"></button></td>
   <meta charset="UTF-8">
  </head>
  <body>
  <div class="result">
    <h2>RESULT<h2>
    <p class="km">走行距離</p>
    <p class="km2">{{ $item['km'] }}Km</p>
    <div class="data">
      <p>走行時間<br>
         {{ $item['time'] }}:00.000</p>
      <p>平均ペース<br>
         06:00.000</p>
      <p>消費カロリー<br>
         {{ $item['kcal'] }}Kcal</p>
    </div>
    <div class=data2>
    <p>1Kmごとのペース</p>
    <p><span>1Km</span>05:54.244</p>
    <p><span>2Km</span>06:05.928</p>
    <p><span>3Km</span>05:57.488</p>
    <p><span>4Km</span>06:02.165</p>
    <p><span>5Km</span>06:00.392</p>
    </div>
    <form action="start" method="post">
    @csrf
    <input type="hidden" name="run" value="{{ $item['km'] }}">
    <input type="hidden" name="time" value="{{ $item['time'] }}">
    <input type="hidden" name="kcal" value="{{ $item['kcal'] }}">
    <input type="hidden" name="date" value="{{ $item['date'] }}">
    <input class="btn" type="submit" value="終了">
    </form>
  </div>
  </body>
</html>
</div>
@endsection