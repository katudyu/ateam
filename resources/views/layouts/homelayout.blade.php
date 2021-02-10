<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet">
    <style>
    body {font-size:16pt; color:black; margin: 0px; }
    h1 { font-size:60pt; text-align:center; color:white;
    margin:-10px 0px 30px 0px; letter-spacing:-4pt; font-family: 'Londrina Shadow', cursive;}
    h2 {font-size:30pt; text-align:center; color:white;
    margin:-40px 0px 30px 0px; letter-spacing:-4pt;}
    ul { font-size:12pt; }
    hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
    .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
    .content {margin:50px; text-align:center;}
    .footer { text-align:right; font-size:10pt; margin:10px;
    border-bottom:solid 1px #ccc; color:#ccc; }
    tr {margin:20px 0px -30px 0px; background-color: white;}
    th {background-color: white; color: black; padding:5px 10px; padding-color:black;}
    td {border: solid 1px #aaa; color:black; padding:5px 10px; font-size:13pt;
        background-color: white;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all  0.3s ease;
    }
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

.news {
    text-align: center;
    padding: 0em 0em;
    margin: 2em 0em;
    font-weight: bold;
    color: black;/*文字色*/
    background: #FFF;
    border: solid 3px black;/*線*/
    border-radius: 10px;/*角の丸み*/
    width: 1425px;
    height: 350px;
}

.slider {
    width: 350px;
    height: 350px;
}

.progressbar {
    padding: 0.5em 1em;
    margin: 2em 10em;
    font-weight: bold;
    color: black;/*文字色*/
    background: #FFF;
    border: solid 3px black;/*線*/
    border-radius: 10px;/*角の丸み*/
}

.img {
  object-fit: cover; 
  width: 100%;
  height: 100%
}

.chat {
    padding: 5em 1em;
    margin: 2em 7.5em;
    font-weight: bold;
    color: black;/*文字色*/
    background: #FFF;
    border: solid 3px black;/*線*/
    border-radius: 10px;/*角の丸み*/
}

.ranking {
  border: 1px solid #aaa;
  border-collapse: separate;
  overflow: hidden;
  border-spacing: 0;
  border-radius: 10px;
  text-align:center;

  th,td {
    padding: 6em 3em;
    vertical-align: middle;
}
}

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

 .news_content {
  width: 1150px;
  height: 150px;
  color: blue;
}

.news_content tr{
    background-color: white;
}

.backbutton {
  margin: 0px 10px 500px 1100px;
}
</style>
</head>

<body>
    <h2>@yield('sub_title')</h2>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>