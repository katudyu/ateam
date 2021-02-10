<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet">
    <style>
    body {font-size:16pt; color:black; margin: 0px; }
    h1 { font-size:60pt; text-align:center; color:black;
    margin:-10px 0px 30px 0px; letter-spacing:-4pt; font-family: 'Londrina Shadow', cursive;
    }
    h2 {font-size:30pt; text-align:center; color:black;
    margin:-30px 10px 30px 0px; letter-spacing:5pt;}

    
    ul { font-size:12pt; }


    li { font-size:30pt; text-align:left;}


    hr {border-color:black; }
    .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
    .content {margin:50px; text-align:center;}
    .footer { text-align:right; font-size:10pt; margin:10px;
    border-bottom:solid 1px #ccc; color:#ccc; }
    tr {margin:20px 0px -30px 0px;}
    th {background-color:#3498db; color:#fff; padding:5px 10px; padding-color:black;}

    a:active {/*クリック中*/color:#33CC00;　←緑色}


      

    
    table {border-collapse: collapse; width:1390px; text-align:center; margin:10px 8px 10px; table-layout: fixed;}
    table th, table td {border: solid 1px black;}
    .box1 {padding: 0.5em 0.5em ;margin: 0px 0px; width: auto;  border: solid 3px #000000; }
    .box1 p {margin: 0px 5px 0px -5px; padding: 0; width: auto 10;}
    
    .button_wrapper remodal-bg{font-size: 1.4em;
font-weight: bold;
padding: 10px 30px;
color: #fff;
border-style: none;
box-shadow: 2px 2px 3px 1px #666;
-moz-box-shadow: 2px 2px 3px 1px #666;
-webkit-box-shadow: 2px 2px 3px 1px #666;
text-shadow: 1px 1px 2px #000;
background: -moz-linear-gradient(bottom, #36d, #248 50%, #36d);
background: -webkit-gradient(linear, left bottom, left top, from(#36d), color-stop(0.5, #248), to(#36d));
-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
/* ここまで学校*/

/*ここから各ボタン */

.button {
  display      : inline-block;
  border-radius: 50%;                  /* 角丸 */
  box-shadow   : 5px 5px 3px #666666;  /* 影の設定 */
  cursor       : pointer;              /* カーソル形状 */
  transition   : .3s;                  /* なめらか変化 */
}
.button:hover {
  box-shadow   : none;                 /* 影の設定 */
  border-radius: 0;                    /* 角丸 */
}

.box{
    display:  inline-block; 
}

.box > li {
    display:  inline-block;     /* インラインブロック要素にする */
    width: 190px;               /* 幅指定 */
    vertical-align:  middle;    /* 要素を上下中央で揃える */
}

.mypage{
        font-size: 1.2em;/*文字の大きさ*/
        font-weight: normal;　/*文字の太さ*/
        border-radius: 500px; /*ボタンの丸み*/
        width:125; /*ボタンの横の長さ*/
        height:100; /*ボタンの縦の長さ*/
        margin:50px 1000px 10px 0px;
        opacity: 0.7;
        background-image:url('../images/people.png');
    }

.home{
        font-size: 1.2em;/*文字の大きさ*/
        font-weight: normal;　/*文字の太さ*/
        border-radius: 500px; /*ボタンの丸み*/
        width:125; /*ボタンの横の長さ*/
        height:125; /*ボタンの縦の長さ*/
        margin:50px 1000px 10px 0px;
        opacity: 0.7;
        background-image:url('../images/home.png');
    }

.activity{
    font-size: 1.2em;/*文字の大きさ*/
    font-weight: normal;　/*文字の太さ*/
    border-radius: 500px; /*ボタンの丸み*/
    width:125; /*ボタンの横の長さ*/
    height:125; /*ボタンの縦の長さ*/
    margin:50px 1000px 10px 0px;
    opacity: 0.7;
    background-image:url('../images/data.png');
}

.start{
    font-size: 1.2em;/*文字の大きさ*/
    font-weight: normal;　/*文字の太さ*/
    border-radius: 500px; /*ボタンの丸み*/
    width:125; /*ボタンの横の長さ*/
    height:125; /*ボタンの縦の長さ*/
    margin:50px 1000px 10px 0px;
    opacity: 0.7;
    background-image:url('../images/run.png');
}

.store{
    font-size: 1.2em;/*文字の大きさ*/
    font-weight: normal;　/*文字の太さ*/
    border-radius: 500px; /*ボタンの丸み*/
    width:125; /*ボタンの横の長さ*/
    height:125; /*ボタンの縦の長さ*/
    margin:50px 1000px 10px 0px;
    opacity: 0.7;
    background-image:url('../images/store.png');
}
/*ここまで各ボタン */






/*商品詳細の右上にあるカートボタン */
.cart{
    font-size: 1.2em;/*文字の大きさ*/
    font-weight: normal;　/*文字の太さ*/
    border-radius: 500px; /*ボタンの丸み*/
    width:125; /*ボタンの横の長さ*/
    height:125; /*ボタンの縦の長さ*/
    margin:0px 0px 0px 1000px;
    opacity: 0.7;
    background-image:url('../images/image20.jpg');
}
/*ここまでカートボタン */

.sengetu{
    text-align:left;
    
}
/*商品詳細の画像 */
.resizeimage {
   text-align:center;
}

.resizeimage img { width: 50%; }   
}
/*ここまで商品詳細の画像 */


/*トロフィー画面の画像 */
.image{
    text-align:center; 
      
}

.image1{
    text-align:center;
}
.image2{
    text-align:center;
}


.sample {
    display: flex;
    justify-content: center;
    margin: 0 auto;
    width: 645px;
}

.sample .item {
    flex: none;
    width: 200px;
    margin: 5px;
    text-align: center;
    
}

.sample img {
    width: 50%;
}

.image3{
    text-align:center;
}
/*ここまでトロフィー画面の画像 */


/*今ここにいますよを表すボタンの色の変化のやつ */
.current a {color:black;}
/*ここまで今ここにいますよを表すボタンの色の変化のやつ */






/*ハンバーガーメニューのレイアウトっす */
.menu-drawer .btn {font-size: 27px; background: #fff; width: 40px;padding: 4px 0; cursor: pointer; text-align: center; top: 0; right: 0;}
      .menu-drawer .btn::before, .menu-drawer .btn::after {font-family: "Font Awesome 5 Free"; font-weight: 900;}
      .menu-drawer .btn::before {content: "\f0c9";}
      .menu-drawer .btn::after {content: "\f00d";}
      .menu-drawer .other {background: rgba(0, 0, 0, 0.2); top: 0; left: 0;width: 100%; height: 100vh;}
      .menu-drawer .content {display: table; border: 1px solid #ebebeb;border-radius: 4px; background: #fff; width: 90vw; top: 34px; right: 0;text-align: center;}
      @media screen and (min-width: 415px) {
        .menu-drawer .content {width: 350px;}
      }
      .menu-drawer .content h2 {font-size: 16px; font-weight: 700; color: #fff;background: #383838; margin: 0; padding: .7em; border-radius: 4px 4px 0 0;}
      .menu-drawer .content h2 i {color: #383838; background: #fff;border-radius: 50%; padding: .4em; margin-right: .5em;}
      .menu-drawer .content .menu {height: 210px; overflow-y: auto;}
      .menu-drawer .content a {border-bottom: 1px solid #ebebeb; padding: 1rem 0 0 0; text-decoration: none; color: #858585; display: block; width: 100%;display: flex; flex-flow: column;}
      .menu-drawer .content a i {font-size: 27px;}
      .menu-drawer .content p {color: #858585;}
      .menu-drawer .btn,
      .menu-drawer .content,
      .menu-drawer .other {position: fixed;}
      .menu-drawer .btn,
      .menu-drawer .content {z-index: 1001;}
      .menu-drawer .other {z-index: 1000;}
 
      .menu-drawer #chk {display: none;}
      .menu-drawer #chk ~ .btn::before {display: block;}
      .menu-drawer #chk ~ .btn::after {display: none;}
      .menu-drawer #chk ~ .other {display: none;}
      .menu-drawer #chk:checked ~ .btn::before {display: none;}
      .menu-drawer #chk:checked ~ .btn::after {display: block;}
      .menu-drawer #chk:checked ~ .other {display: block;}
 
      .menu-drawer #chk ~ .content {transform: translate(350%, 0); transition: transform 0.3s ease-in-out;}
      .menu-drawer #chk:checked ~ .content {transform: none;}
      body {
  font-size: 12px;
  height: 100%;
  margin: 0;
}

@media screen and (min-width: 768px) {
  html,
  body {
    font-size: 16px;
  }
}

@media screen and (min-width: 980px) {
  html,
  body {
    font-size: 18px;
  }
}
      .item_wrapper li {
  width: calc(100% / 3 - 2 * 1vw);
  margin: 1vw;
}

@media screen and (min-width: 425px) {
  .item_wrapper li {
    width: calc(100% / 4 - 2 * 1vw);
  }
}

@media screen and (min-width: 980px) {
  .item_wrapper li {
    width: calc(100% / 5 - 2 * 1vw);
  }
}

.item_wrapper img {
  vertical-align: bottom;
}

/*ここまでハンバーガーメニューのレイアウト */


/*商品詳細のプルダウン */
.puru{
  height: 5%;
  margin: 4;
  font-size: 34px;
  text-align:right;
}
/*ここまで商品詳細のプルダウン */

.kakaku{
  height: 0%;
}

/*商品詳細の値段の位置 */
.syousai{
  height: 5%;
  margin: 20;
  text-align:right;
}
/*ここまで商品詳細の値段の位置 */
</style>
</head>

<body>
    <h2>@yield('sub_title')</h2>
    <div class="content">
        @yield('content')
    </div>
</body>


</html>
