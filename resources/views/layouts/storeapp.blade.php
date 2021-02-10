<html>
<head>
    <title>@yield('title')</title>
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
    tr {margin:20px 0px -30px 0px;}
    th {background-color:#3498db; color:#fff; padding:5px 10px; padding-color:black;}
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

/*  ここから多階層プルダウンのcss */

.menu {
    list-style:none;
    position: relative;
    height: 50px;
    max-width: 1000px;
    margin: 50px 10px 200px 300px;
}

.menu > li {
    float: left;
    width: 25%; /* グローバルナビ4つの場合 */
    height: 50px;
    line-height: 50px;
    background: rgb(29, 33, 19);
}

.menu > li a {
    display: block;
    color: #fff;
}

.menu > li a:hover {
    color: #999;
}

ul.menu__second-level {
    visibility: hidden;
    opacity: 0;
    z-index: 1;
}

ul.menu__third-level {
    visibility: hidden;
    opacity: 0;
}

ul.menu__fourth-level {
    visibility: hidden;
    opacity: 0;
}

.menu > li:hover {
    background: #072A24;
    -webkit-transition: all .5s;
    transition: all .5s;
}

.menu__second-level li {
    border-top: 1px solid #111;
}

.menu__third-level li {
    border-top: 1px solid #111;
}

.menu__second-level li a:hover {
    background: #111;
}

.menu__third-level li a:hover {
    background: #2a1f1f;
}

.menu__fourth-level li a:hover {
    background: #1d0f0f;
}

/* 下矢印 */
.init-bottom:after {
    content: '';
    display: inline-block;
    width: 6px;
    height: 6px;
    margin: 0 0 0 15px;
    border-right: 1px solid #fff;
    border-bottom: 1px solid #fff;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

/* floatクリア */
.menu:before,
.menu:after {
    content: " ";
    display: table;
}

.menu:after {
    clear: both;
}

.menu {
    *zoom: 1;
}

.menu > li.menu__multi {
    position: relative;
}

li.menu__multi ul.menu__second-level {
    position: absolute;
    top: 40px;
    width: 100%;
    background: #072A24;
    -webkit-transition: all .2s ease;
    transition: all .2s ease;
}

li.menu__multi:hover ul.menu__second-level {
    top: 50px;
    visibility: visible;
    opacity: 1;
}

li.menu__multi ul.menu__second-level li {
    position: relative;
}

li.menu__multi ul.menu__second-level li:hover {
    background: #111;
}

li.menu__multi ul.menu__second-level li ul.menu__third-level {
    position: absolute;
    top: -1px;
    left: 100%;
    width: 100%;
    background: #111;
    -webkit-transition: all .2s ease;
    transition: all .2s ease;
}

li.menu__multi ul.menu__second-level li:hover ul.menu__third-level {
    visibility: visible;
    opacity: 1;
}

li.menu__multi ul.menu__second-level li ul.menu__third-level li {
    position: relative;
}

li.menu__multi ul.menu__second-level li ul.menu__third-level li:hover {
    background: #2a1f1f;
}

li.menu__multi ul.menu__second-level li ul.menu__third-level li ul.menu__fourth-level {
    position: absolute;
    top: -1px;
    left: 100%;
    width: 100%;
    background: #2a1f1f;
    -webkit-transition: all .2s ease;
    transition: all .2s ease;
}

li.menu__multi ul.menu__second-level li ul.menu__third-level li:hover ul.menu__fourth-level {
    visibility: visible;
    opacity: 1;
}

.init-right:after {
    content: '';
    display: inline-block;
    width: 6px;
    height: 6px;
    margin: 0 0 0 15px;
    border-right: 1px solid #fff;
    border-top: 1px solid #fff;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
/*  ここまで多階層プルダウンのcss */

/*   ここから画像のcss */

.image{
    width: 270px;
    height: 350px;
}

/*  ここまで画像のcss */

/*ここから大元のボタン */

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

/* ここまで大元の各ボタン */

/*　ここからタイトルのcss */
.title{
    font-size: 80px;
}
/*　ここまでタイトルのcss */

</style>
</head>

<body>
    <h2>@yield('sub_title')</h2>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
