<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stamping-system</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__utilities">
                <a class="header__logo" href="/login">
                    Atte
                </a>
                <nav>
                    <ul class="header-nav">
                        @if (Auth::check())
                        <li class="header-nav__item">
                            <form class="form" action="/stamp" method="post">
                                <button class="header-button" type="submit">ホーム</button>
                            </form>
                        </li>
                        <li class="header-nav__item">
                            <form class="form" action="/record" method="post">
                                <button class="header-button" type="submit">日付一覧</button>
                            </form>
                        </li>
                        <li class="header-nav__item">
                            <form class="form" action="/login" method="post">
                                <button class="header-button">ログアウト</button>
                            </form>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
      @yield('content')  
    </main>

    <footer class="footer">
        <div class="footer__inner">
            <p class="footer__logo">
                Atte,inc.
            </p>
        </div>
    </footer>
</body>
</html>