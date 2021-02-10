<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <title>@yield('title')</title>
   <style>
   body {font-size:16pt; color:#192f60; margin: 5px; }
   h1 { font-size:40pt; text-align:right; color:#fff;
       margin:5px 0px -30px 0px; letter-spacing:-4pt; }
    nav {font-size:25pt; text-align:left; color:#223a70;
       margin:15px 0px -30px 0px; letter-spacing:-4pt;}
   ul { font-size:12pt; }
   hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
   .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
   .content {margin:15px 30px -30px 30px; text-align:center;}
   .footer { text-align:right; font-size:20pt; margin:50px;
       border-bottom:solid 1px #B0C4DE; color:#192f60; }
       table {width: 1400px;height: 400px;border: 2px #2b2b2b solid; text-align:left;}
       th {background-color:#00608d; color:#fff; padding:5px 10px; }
       td {font-size:15pt; border: solid 1px #aaa; color:#000; padding:5px 10px; }
   </style>
</head>
<body>
   <h1>@yield('title')</h1>
   <h2>@yield('menu_title')</h2>
   <div class="menu_content">
   @yield('menu_content')
   </div>
   <hr size="1">
   <div class="content">
   @yield('content')
   </div>
   <div class="footer">
   @yield('footer')
   </div>
</body>
</html>