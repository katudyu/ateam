@extends('layouts.start2')

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
  <div id="map" style="height:400px">
	   </div>
       <script src="{{ asset('/js/result.js') }}"></script> 
	   <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyAXllRJNSWDIKPLLHAEkdalaqauHKbbLKk&callback=initMap" async defer>
	   </script>
<div class="data">
<div class="data2">
<p>Kcal</p>
<p>Km</p>
<p>ペース</p>
</div>
<div id="app">
    <sample-component></sample-component>
  </div>
    <script src="{{ asset('/js/app.js') }}"></script>
  </body>
  </html>
</div>
@endsection