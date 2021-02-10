@extends('layouts.company')
@section('menu_title')
企業ページ
@endsection
<div class="container">
                <div class="header-logo">
                    <h1><a href="top">企業ページ</a></h1>
                </div>       
</div>
        <main>
            <div class="wrapper">
                <div class="container">
                    <div class="title">
                        <div class="boxs">
                        <a href="company3" class="box">
                            <p>グッズ編集</p>
                            <img src="/img/store.png">
                        </a>
                        <a href="contact" class="box">
                            <p>お問い合わせ</p>
                            <img src="/img/inf1.png">
                        </a>
                        <a href="accountedit" class="box">
                            <p>アカウント管理</p>
                            <img src="/img/ad1.png">
                        </a>
                        <a href="company" class="box">
                            <p>ログアウト</p>
                            <img src="/img/logout.png">
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>