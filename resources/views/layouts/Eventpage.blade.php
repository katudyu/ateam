<html>
<head>
    <title>@yield('title')</title>
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
    tr {margin:20px 0px -30px 0px;}
    th {background-color:#3498db; color:#fff; padding:5px 10px; padding-color:black;}
    td {border: solid 1px #aaa; color:black; padding:5px 10px; font-size:13pt;
        background-color: white;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all  0.3s ease;
    }
    table {border-collapse: collapse; width: 750px; text-align:center; margin:10px 240px 10px; table-layout: fixed;}
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

/*ここからホームページのイベント部分*/
.mokuhyou{
  margin: 1em 13em;
}

.Km {
  padding: 3em 3em;
  margin: 1em 17em;
  font-weight: bold;
  color: black;/*文字色*/
  background: #FFF;
  border: solid 3px black;/*線*/
  border-radius: 10px;/*角の丸み*/
  position: relative;
}

.kaisai {
  margin: 1em 13em;
}

.Km div p {
  position: absolute;
  right: 0;
  bottom: 0;
}

.genzai {
  margin: 1em 13em;
}

.progressbar {
  margin: 1em 21em;
}

.backbutton {
  font-size: 1.5em;
}

.table {
  width: 60%;
	margin-right: auto;
	margin-left: auto;
	border: 1px solid #000;
	border-spacing: 0;
	border-collapse: separate;
	border-radius: 6px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
}

.ranking {
  width: 1000px;
  margin-left: auto;
  margin-right: auto;
}

.links {
  padding: 0em 0em;
  margin: 0em 20em;

}

</style>
</head>
<body>
@yield('content')
</body>
</html>