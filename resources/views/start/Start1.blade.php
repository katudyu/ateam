@extends('layouts.start2')

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
  <div id="map" class="map">
	</div>
    <script src="{{ asset('/js/result.js') }}"></script> 
	  <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyAXllRJNSWDIKPLLHAEkdalaqauHKbbLKk&callback=initMap" async defer>
	  </script>
<div class="container">
<p>100Kcal</p>
<p>5.2Km</p>
<p>ペース</p>
    <div id="timer" class="timer">00:00.000</div>
    <div class="controlls">
      <button id="start" class="btn">Start</button>
      <button id="stop" class="btn" >Stop</button>
      <button class="btn" onclick="location.href='start2'">end</button>
    </div>
</div>
  <script src="{{asset('/js/stop.js')}}"></script>
</body>
<body>
    <main>
      <div class="box">
        <li><button class="home" onclick="location.href='HomePage'"></button></li>
         <li><button class="activity" onclick="location.href='acti'"></button></li>
         <li><button class="start" onclick="location.href='start'"></button></li>
         <li><button class="store" onclick="location.href='reco'"></button></li>
      </div>
      </main>
  </body>
</html>
@endsection