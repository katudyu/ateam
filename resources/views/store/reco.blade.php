@extends('layouts.storeapp')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <td><button class="mypage" onclick="location.href='mypage'"></button></td>
   <p class="title">おすすめ商品
   <meta charset="UTF-8">
  </head>
  <body>
      <ul class="menu">
         <li class="menu__multi">
            <a href="./reco" class="init-bottom">おすすめ</a>
            <ul class="menu__second-level">
                  <!-- 第一階層 -->
                  <li>
                     <a href="./recotops" class="init-right">トップス</a>
                     <ul class="menu__third-level">
                        <!-- 第二階層 -->
                        <li><a href="./recotopstanktop">タンクトップ</a></li>
                        <li><a href="./recotopsshirt">シャツ</a></li>
                        <li><a href="./recotopshoodie">パーカー</a></li>
                     </ul>
                  </li>
                   <!-- 第一階層 -->
                   <li>
                     <a href="./recobottoms" class="init-right">ボトムス</a>
                     <ul class="menu__third-level">
                        <!-- 第二階層 -->
                        <li><a href="./recobottomspants">パンツ</a></li>
                     </ul>
                  </li>
                   <!-- 第一階層 -->
                   <li>
                     <a href="./recoacce" class="init-right">アクセサリー</a>
                     <ul class="menu__third-level">
                        <!-- 第二階層 -->
                        <li><a href="./recoacceshoes">シューズ</a></li>
                        <li><a href="./recoaccecap">キャップ</a></li>
                     </ul>
                  </li>
                  <!-- 他メニュー省略 -->
            </ul>
         </li>
         <li class="menu__multi">
            <a href="./mens" class="init-bottom">メンズ</a>
            <ul class="menu__second-level">
                  <!-- 第一階層 -->
                  <li>
                     <a href="./menstops" class="init-right">トップス</a>
                     <ul class="menu__third-level">
                        <!-- 第二階層 -->
                        <li><a href="./menstopstanktop">タンクトップ</a></li>
                        <li><a href="./menstopsshirt">シャツ</a></li>
                        <li><a href="./menstopshoodie">パーカー</a></li>
                     </ul>
                  </li>
                   <!-- 第一階層 -->
                   <li>
                     <a href="./mensbottoms" class="init-right">ボトムス</a>
                     <ul class="menu__third-level">
                        <!-- 第二階層 -->
                        <li><a href="./mensbottomspants">パンツ</a></li>
                     </ul>
                  </li>
                   <!-- 第一階層 -->
                   <li>
                     <a href="./mensacce" class="init-right">アクセサリー</a>
                     <ul class="menu__third-level">
                        <!-- 第二階層 -->
                        <li><a href="./mensacceshoes">シューズ</a></li>
                        <li><a href="./mensaccecap">キャップ</a></li>
                     </ul>
                  </li>
                  <!-- 他メニュー省略 -->
            </ul>
         </li>
         <li class="menu__multi">
            <a href="ladies" class="init-bottom">レディース</a>
            <ul class="menu__second-level">
                  <!-- 第一階層 -->
                  <li>
                     <a href="./ladiestops" class="init-right">トップス</a>
                     <ul class="menu__third-level">
                        <!-- 第二階層 -->
                        <li><a href="./ladiestopstanktop">タンクトップ</a></li>
                        <li><a href="./ladiestopsshirt">シャツ</a></li>
                        <li><a href="./ladiestopshoodie">パーカー</a></li>
                     </ul>
                  </li>
                   <!-- 第一階層 -->
                   <li>
                     <a href="./ladiesbottoms" class="init-right">ボトムス</a>
                     <ul class="menu__third-level">
                        <!-- 第二階層 -->
                        <li><a href="./ladiesbottomspants">パンツ</a></li>
                     </ul>
                  </li>
                   <!-- 第一階層 -->
                   <li>
                     <a href="./ladiesacce" class="init-right">アクセサリー</a>
                     <ul class="menu__third-level">
                        <!-- 第二階層 -->
                        <li><a href="./ladiesacceshoes">シューズ</a></li>
                        <li><a href="./ladiesaccecap">キャップ</a></li>
                     </ul>
                  </li>
                  <!-- 他メニュー省略 -->
            </ul>
         </li>
         <!-- 他グローバルナビメニュー省略 -->
      </ul>

      </table>
      <!-- タイトル-->
      <p class="title">新着タイトル

      <!--メンズパーカーの商品 -->
      <div class="slide-wrap">
      @foreach ($items as $item)
         <div class="slide-box">
            <a href="URL">
               <img src="../images/menstanktop.jpg">
               <p>{{$item->goods_name}}</p>
            </a>
         </div>
         @endforeach
      </div>

      <!-- タイトル-->
      <p class="title">注目タイトル

      <!--メンズパーカーの商品 -->
         <div class="slide-wrap">
            @foreach ($items as $item)
               <div class="slide-box">
                  <a href="URL">
                     <img src="../images/menstanktop.jpg">
                     <p>{{$item->goods_name}}</p>
                  </a>
               </div>
            @endforeach
         </div>
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
</div>
@endsection