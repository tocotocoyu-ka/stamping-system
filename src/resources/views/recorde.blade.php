<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stamping-system</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/record.css">
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
                        <li class="header-nav__item">
                            <a class="header-nav__home" href="">ホーム</a>
                        </li>
                        <li class="header-nav__item">
                            <a class="header-nav__date" href="">日付一覧</a>
                        </li>
                        <li class="header-nav__item">
                            <a class="header-nav__logout" href="">ログアウト</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="record__content">
            <div class="record__heading">
                <div class="record__button">
                    <button class="record__button-previous" type="submit">＜</button>
                </div>
                <div class="heading__logo">
                    <h2>dateサンプル</h2>
                </div>
                <div class="record__button">
                    <button class="record__button-following" type="submit">＞</button>
                </div>
            </div>
            <form class="form">
                <div class="record-table">
                    <table class="record-table__inner">
                        <tr class="record-table__row">
                            <th class="record-table__header">名前</th>
                            <th class="record-table__header">勤務開始</th>
                            <th class="record-table__header">勤務終了</th>
                            <th class="record-table__header">休憩時間</th>
                            <th class="record-table__header">勤務時間</th>
                        </tr>
                        <tr class="record-table__row">
                            <td class="record-table__text">
                                <input type="text" name="name" value="サンプルテキスト" />
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                            </td>
                        </tr>
                        <tr class="record-table__row">
                            <td class="record-table__text">
                                <input type="text" name="name" value="サンプルテキスト" />
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                            </td>
                        </tr>
                        <tr class="record-table__row">
                            <td class="record-table__text">
                                <input type="text" name="name" value="サンプルテキスト" />
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                            </td>
                        </tr>
                        <tr class="record-table__row">
                            <td class="record-table__text">
                                <input type="text" name="name" value="サンプルテキスト" />
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                            </td>
                        </tr>
                        <tr class="record-table__row">
                            <td class="record-table__text">
                                <input type="text" name="name" value="サンプルテキスト" />
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                                <input type="date" name="timestamp" value="サンプル日時">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
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