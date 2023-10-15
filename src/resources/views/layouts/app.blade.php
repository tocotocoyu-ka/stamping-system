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
            <a class="header__logo" href="/login">
                Atte
            </a>
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