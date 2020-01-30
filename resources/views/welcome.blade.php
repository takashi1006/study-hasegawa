<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/488299783f.js" crossorigin="anonymous"></script>
        <style>
            html, body {
                padding:0;
                margin:0;
                height: 100%;
            }
            .container-fluid {
                height: 100%;
            }
            .bg-main {
                background-color: rgb(21, 32, 43);
            }
            .bg-sub-main {
                background-color: rgb(113, 201, 248);
                background-image: url("img/icon/Twitter_Logo_Blue.png");
                background-position: center;
                background-size: 420%;
            }
            #top-left h3,#top-right h2 {
                padding-top: 0.75rem;
                padding-bottom: 0.75rem;
            }
            .footer {
                /* position: absolute; */
                bottom: 0;
                width: 100%;
                /* height: 100px; */
                padding: 0.5rem 0.25rem;
            }
            .footer a {
                color: rgb(136, 153, 166);
            }
            .nav-link {
                padding: 0.25rem 0.5rem;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid bg-main">
            <div class="row h-100">
                <div class="col-sm-6 h-100 bg-main order-1 order-sm-2">
                    <div class="row h-100 justify-content-center">
                        <div id="top-right" class="col-sm-10 align-self-center text-white">
                            <h1><i class="fab fa-twitter text-white"></i></h1>
                            <h2>
                                「いま」しないといけないことをやっていこう
                            </h2>
                            <p>ToDotterをはじめよう</p>
                            <a href="{{ route('register') }}" class="btn btn-primary btn-block">アカウント作成</a>
                            <a href="{{ route('login') }}" class="btn btn-outline-primary btn-block">ログイン</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 h-100 bg-sub-main order-2 order-sm-1">
                    <div class="row h-100 justify-content-center">
                        <div id="top-left" class="col-sm-10 align-self-center text-white">
                            <h3>
                                <i class="fas fa-search pr-3"></i>あなたの「すること」を確認しましょう。
                            </h3>
                            <h3>
                                <i class="far fa-bell pr-3"></i>やることを追いかけましょう。
                            </h3>
                            <h3>
                                <i class="fas fa-tasks pr-3"></i>自分を管理しましょう。
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 footer bg-main order-3 order-sm-3">
                    <nav class="nav justify-content-center">
                        <a class="nav-link" href="#">ToDotterについて</a>
                        <a class="nav-link" href="#">ヘルプセンター</a>
                        <a class="nav-link" href="#">利用規約</a>
                        <a class="nav-link" href="#">Cookie</a>
                        <a class="nav-link" href="#">広告情報</a>
                        <a class="nav-link" href="#">ブログ</a>
                        <a class="nav-link" href="#">ステータス</a>
                        <a class="nav-link" href="#">求人</a>
                        <a class="nav-link" href="#">ブランド</a>
                        <a class="nav-link" href="#">広告</a>
                        <a class="nav-link" href="#">マーケティング</a>
                        <a class="nav-link" href="#">ビジネス</a>
                        <a class="nav-link" href="#">開発者</a>
                        <a class="nav-link" href="#">プロフィール一覧</a>
                        <a class="nav-link" href="#">設定</a>
                        <a class="nav-link" href="#">&copy;ToDotter, Inc.</a>
                    </nav>
                </div>
            </div>
        </div>
    </body>
</html>
