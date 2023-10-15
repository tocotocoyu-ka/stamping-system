<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stamping-system</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <linl rel="stylesheet" href="css/stamp.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/login">
                     Atte
                </a>
                <nav>
                    <ul class="header-nav">
                        <li class="header-nav__item">
                            <a class="header-nav__home" href="">ホーム</a>
                        </li>
                        <li class="header-nav__item">
                            <a class="header-nav__date" href="">日付一覧</a>
                        </li>
                        <li class="header-nav__item">
                            <a class="header-nav__logout">ログアウト</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="stamping-content">
            <div class="stamping-heading">
                <h2>サンプルさんお疲れ様です！</h2>
            </div>
            <div class="stamping__button">
                <button class="stamping__button-submit" type="submit">勤務開始</button>
                <button class="stamping__button-submit" type="submit">勤務終了</button>
                <button class="stamping__button-submit" type="submit">休憩開始</button>
                <button class="stamping__button-submit" type="submit">休憩終了</button>
            </div>
        </div>
    </main>

    <footer class="fotter">
        <div class="footer__inner">
            <p class="footer__logo">
                Atte,inc.
            </p>
        </div>
    </footer>
</body>
</html>