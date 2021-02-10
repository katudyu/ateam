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

      <!--メンズパーカーの商品 -->
      <table>
         <tr>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/menshoodie.jpg" alt="サンプル画像"></a></td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/menshoodie.jpg" alt="サンプル画像"></a></td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/menshoodie.jpg" alt="サンプル画像"></a></td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/menshoodie.jpg" alt="サンプル画像"></a></td>
         </tr>
         <tr>
      <!-- メンズパーカーの商品説明 -->
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">メンズパーカー</td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">メンズパーカー</td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">メンズパーカー</td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">メンズパーカー</td>
         </tr>
      </table>
      <!-- メンズタンクトップの商品 -->
      <table>
         <tr>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/menstanktop.jpg" alt="サンプル画像"></a></td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/menstanktop.jpg" alt="サンプル画像"></a></td>
         </tr>
         <tr>
      <!-- メンズタンクトップの商品説明 -->
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">メンズタンクトップ</td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">メンズタンクトップ</td>
         </tr>
      </table>
      <!-- メンズシャツの商品 -->
      <table>
         <tr>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/mensshirt.jpg" alt="サンプル画像"></a></td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/mensshirt.jpg" alt="サンプル画像"></a></td>
         </tr>
         <tr>
      <!-- メンズシャツの商品説明 -->
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">メンズシャツ</td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">メンズシャツ</td>
         </tr>
      </table>
      <table>
         <tr>
      <!-- レディースシャツの商品 -->
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/ladiesshirt.jpg" alt="サンプル画像"></a></td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/ladiesshirt.jpg" alt="サンプル画像"></a></td>
         </tr>
         <tr>
      <!-- レディースシャツの商品説明 -->      
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">レディースシャツ</td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">レディースシャツ</td>
         </tr>
      </table>
      <!-- レディースパーカーの商品 -->
      <table>
         <tr>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/ladieshoodie.jpg" alt="サンプル画像"></a></td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/ladieshoodie.jpg" alt="サンプル画像"></a></td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/ladieshoodie.jpg" alt="サンプル画像"></a></td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/ladieshoodie.jpg" alt="サンプル画像"></a></td>
         </tr>
         <tr>
      <!-- レディースパーカーの商品 -->
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">レディースパーカー</td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">レディースパーカー</td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">レディースパーカー</td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">レディースパーカー</td>
         </tr>
      </table>
      <!-- レディースタンクトップの商品 -->
      <table>
         <tr>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/ladiestanktop.jpg" alt="サンプル画像"></a></td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">
            <img class="image" src="../images/ladiestanktop.jpg" alt="サンプル画像"></a></td>
         </tr>
         <tr>
      <!-- レディースタンクトップの商品説明 -->
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">レディースタンクトップ</td>
            <td><a href="https://blog.codecamp.jp/programming-html-pic-link">レディースタンクトップ</td>
         </tr>
      </table>
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