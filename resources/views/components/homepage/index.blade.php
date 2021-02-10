@extends('layouts.Ateam')

@section('content')


<!DOCTYPE HTML>
<html>
  <head>
   <td><button class="mypage" href=""></button></td>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $('.slider').bxSlider({
                    auto: true,//自動捲りのON,OFF
                    pause: 100000000,//自動捲り時間
                    touchEnabled: false
                });
            });
    </script>
  </head>
  <body>
    <div class="menu-drawer">
      <input type="checkbox" id="chk" />
      <label class="btn" for="chk"></label>
      <label class="other" for="chk"></label>
      <div class="content">
      <h2><i class="fas fa-list-ul"></i>メニュー</h2>
      <div class="menu">
      <a href="http://localhost:8000/"><i class="fas fa-microphone-alt">
      </i>言語を変更する</a>
      <a href="http://localhost:8000/"><i class="fas fa-envelope">
      </i>Q&A</a>
      <a href="http://localhost:8000/home"><i class="fas fa-phone">
      </i>ホーム画面</a>
      
      </div>
      </div>
      </div>
    <table class="news">
      <tr>
        <th colspan="2">お知らせ</th>
      </tr>
      @foreach ($items as $item)
        <tr>
          <td>{{ $item -> info_id }}</a></td>
          <td><a href="homepage/info?id={{$item->info_id}}">{{ $item -> content }}</a></td>
        </tr>
      @endforeach
    </table>

    <div class="slider">
              <li><a href="https://www.youtube.com/watch?v=mw_9Nd87KeA"><img src="images/" alt="" class="img"></a></li>
              <li><a href="https://fitness-salon.com/post/view/5selections"><img src="images/fitness4.png" alt="" class="img"></a></li>
    </div> 

    <ul class="progressbar">
            <label for="file">イベント:</label>
            <progress id="file" max="100" value="20" style="width: 750px;
            height:50px;"> 100% </progress>
           <div class="profressbarbottom">
           <input type="button" onclick="location.href='../HomePage/event'" value="詳細">
    </div>
    </ul>

   <div class="chat">
    <p>チャットスペース</p>
   </div>

      <main>
      <div class="box">
         <li><button class="home" href="Ateam.blade.php"></button></li>
         <li><button class="activity" href=""></button></li>
         <li><button class="start" href=""></button></li>
         <li><button class="store" href=""></button></li>
      </div>
      </main>
  </body>
</html>
@endsection