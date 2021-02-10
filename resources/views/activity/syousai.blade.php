@extends('layouts.activityAteam')

@section('content')
<!DOCTYPE HTML>
<html>

<head>
   <td><button class="mypage" href=""></button></td>
   <meta charset="UTF-8">

   <td><button class="cart" href=""></button></td>
   <meta charset="UTF-8">
  </head>
<body>


<div class="syouhinname">
 <h2>商品名</h2>
</div>


<p class="resizeimage">
   <img src="../images/image17.jpg" alt="公園">
</p>


<div class="kakaku">
<h2>￥1,200円</h2>
</div>

<!--プルダウンメニュー-->
<div class="puru">
<select  name="example2" size="1">
<option value="">サイズ&カラー</option>
<option value="選択肢2">ブラック/S</option>
<option value="選択肢3">ブラック/M</option>
<option value="選択肢4">ブラック/L</option>
<option value="選択肢5">ホワイト/S</option>
<option value="選択肢6">ホワイト/M</option>
<option value="選択肢7">ホワイト/L</option>
</select>
</div>

<div class="syousai">
<hr>
<h1>商品説明</h1>
<hr>
</div>

<br>
<br>
<br>
<div class="li">
<li>商品名</li>
<br>
<br>
<br>




<li>品番</li>
<br>
<br>
<br>


<li>商品説明</li>
<br>
<br>
<br>



<li>サイズ</li>
<br>
<br>
<br>



<li>カテゴリ</li>
<br>
<br>
<br>




<li>ブランド（企業名）</li>
<br>
<br>
<br>


<li>素材</li>
<br>
<br>
<br>



<li>カラー</li>
<br>
<br>
<br>
</div>
</body>
</html>


@endsection