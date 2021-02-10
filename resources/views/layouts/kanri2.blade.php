<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <title>@yield('title')</title>
   <style>
   body { font-size:16pt; color:#000; margin: 5px; }
   h1 { font-size:50pt; text-align:right; color:#000;
       margin:5px 0px -30px -100px; letter-spacing:-4pt; }
   h3 { vertical-align: -10px;　color:#000;　text-align:left;}
   ul { font-size:12pt; }
   hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
   .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
   .content {margin:50px 0px 50px 0px; }
   .footer { text-align:right; font-size:10pt; margin:10px;
       border-bottom:solid 1px #ccc; color:#ccc; }
       th {background-color:#999; color:fff; padding:5px 10px; }
       td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
   .container{ height: 70px; max-width: 1300px; margin: 0 auto; padding: 0 15px;}
   .wrapper { vertical-align: -10px; padding: 80px 0; margin-bottom: 80px;}
   .wrapper-title { margin-bottom: 30px; border-bottom: 1px solid #000;}
   .header-logo{ float:left; padding-right: 15px; font-size: 18px;}
   .menu-right2 { margin:13px -40px -50px 20px; float:right;}
   .menu-right {margin:5px 0px -30px 20px; float:right; line-height: 60px;}
   .boxs {display: flex;}
   .box {display: inline-block;width: 50%;height: 200px;border:1px solid #ebeced;margin: 65 5px;text-align: center;color: #111;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);}
   img{filter: saturate(70%);}
   </style>
</head>
<body>
   <h1>@yield('title')</h1>
</body>
</html>