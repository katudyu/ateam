@extends('layouts.activityAteam')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <td><button class="mypage" onclick="location.href='mypage'"></button></td>
   <meta charset="UTF-8">
  </head>
<!--折れ線グラフのプログラム-->
  <body>
  <h1>消費カロリー・走行距離</h1>
  <canvas id="myChart"></canvas>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- グラフを描画 -->
   <script>
	//ラベル
var labels = @json($label);

//平均体重ログ
var average_weight_log = @json($avg_weight_log);

//最大体重ログ
var max_weight_log = @json($max_weight_log);

//最小体重ログ
var min_weight_log = @json($min_weight_log);

	//グラフを描画
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
		type: 'line',
		data : {
			labels: labels,
			datasets: [
				{
					label: '平均体重',
					data: average_weight_log,
					borderColor: "rgba(0,0,255,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				},
				{
					label: '最大',
					data: max_weight_log,
					borderColor: "rgba(0,255,0,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				},
				{
					label: '最小',
					data: min_weight_log,
					borderColor: "rgba(255,0,0,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				}
			]
		},
		options: {
			title: {
				display: true,
			}
		}
   });
   </script>
<!--折れ線グラフのプログラムここまで-->




  




<hr>

<div class="current"><a href="/acti">トロフィー</a></div>
<div class="currents"><a href="./rev">レビュー</a></div>
  

<hr>
<!--コメント表示させている-->

<!--コメント表示させているここまで-->


<body>
<main>
      <div class="box">
      <li><button class="home" onclick="location.href='/HomePage'"></button></li>
         <li><button class="activity" onclick="location.href='/acti'"></button></li>
         <li><button class="start" onclick="location.href='/start'"></button></li>
         <li><button class="store" onclick="location.href='/reco'"></button></li>
      </div>
      </main>
  </body>
  
</html>
</div>


@endsection
