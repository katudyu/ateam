@extends('layouts.kanri2')
@section('menu_title')
管理者ページ
@endsection
<div class="container">
                <div class="header-logo">
                    <h1>管理者ページ</h1>
                </div>

                <nav class="menu-right2 menu">
                    <a href="/login/admin">
                    <img src="/img/logout.png"></a>
                </nav>

                <nav class="menu-right menu">
                    <a href="Kanri7_8"><img src="/img/ad1.png"></a>
                </nav>
</div>
        <main>
            <div class="wrapper">
                <div class="container">
                    <div class="wrapper-title">
                        <h3>管理項目</h3>
                    </div>
                    <div class="boxs">
                        <a href="Kanri7_3" class="box">
                            <p>会員情報</p>
                            <img src="/img/user1.png">
                        </a>
                        <a href="Kanri7_4" class="box">
                            <p>お問い合わせ</p>
                            <img src="/img/inf1.png">
                        </a>
                        <a href="Kanri7_5" class="box">
                            <p>リンク管理</p>
                            <img src="/img/site1.png">
                        </a>
                        <a href="Kanri7_6" class="box">
                            <p>企業情報</p>
                            <img src="/img/kigyou.png">
                        </a>
                        <a href="Kanri7_7" class="box">
                            <p>イベント管理</p>
                            <img src="/img/event1.png">
                        </a>
                        <a href="Kanri7_9" class="box">
                            <p>統計データ</p>
                            <img src="/img/data.png">
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>