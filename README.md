# stamping-system
企業の勤怠管理システム。
会員登録機能、打刻機能、打刻履歴閲覧機能を有しています。

## 作成した目的
人事評価のため、各職員の勤怠状況を把握できるようシステム作成を行いました。

## アプリケーションURL
http://localhost/login/
打刻システムの使用にはログインが必要です。メールアドレス、パスワードの入力にて認証されます。

## 機能一覧
ログイン機能、会員登録機能、打刻機能、打刻履歴閲覧機能

## 使用技術
Laravel8.83.8

## テーブル設計
![image](https://github.com/tocotocoyu-ka/stamping-system/assets/138411087/8d9e5ee7-6ccf-4a69-a3f8-f8b5c7098990)

## ER図
![スクリーンショット 2023-11-07 231115](https://github.com/tocotocoyu-ka/stamping-system/assets/138411087/ab1b0f65-6b55-4561-8083-2e4bea4f0667)

## 環境構築
### コンテナの作成と起動
.env ファイルを以下の環境変数例と[環境変数の一覧](#環境変数の一覧)を元に作成

.env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

.env ファイルを作成後、以下のコマンドで開発環境を構築

docker-compose up -d --build

### 動作確認

http://localhost/login/にアクセスできるか確認
アクセスできたら成功

### コンテナの停止

以下のコマンドでコンテナを停止することができます。

make down

### ディレクトリ構成

.
├── docker
│   ├── mysql
│   │   ├── data
│   │   └── my.cnf
│   ├── nginx
│   │   └── default.conf
│   └── php
│       ├── Dockerfile
│       └── php.ini
├── docker-compose.yml
├── src
│   ├── README.md
│   ├── app
│   │   ├── Actions
│   │   ├── Console
│   │   ├── Exceptions
│   │   ├── Http
│   │   ├── Models
│   │   └── Providers
│   ├── artisan
│   ├── bootstrap
│   │   ├── app.php
│   │   └── cache
│   ├── composer.json
│   ├── composer.lock
│   ├── config
│   │   ├── app.php
│   │   ├── auth.php
│   │   ├── broadcasting.php
│   │   ├── cache.php
│   │   ├── cors.php
│   │   ├── database.php
│   │   ├── filesystems.php
│   │   ├── fortify.php
│   │   ├── hashing.php
│   │   ├── logging.php
│   │   ├── mail.php
│   │   ├── queue.php
│   │   ├── sanctum.php
│   │   ├── services.php
│   │   ├── session.php
│   │   └── view.php
│   ├── database
│   │   ├── factories
│   │   ├── migrations
│   │   └── seeders
│   ├── package.json
│   ├── phpunit.xml
│   ├── public
│   │   ├── css
│   │   ├── favicon.ico
│   │   ├── index.php
│   │   └── robots.txt
│   ├── resources
│   │   ├── css
│   │   ├── js
│   │   ├── lang
│   │   └── views
│   ├── routes
│   │   ├── api.php
│   │   ├── channels.php
│   │   ├── console.php
│   │   └── web.php
│   ├── server.php
│   ├── storage
│   │   ├── app
│   │   ├── framework
│   │   └── logs
│   ├── tests
│   │   ├── CreatesApplication.php
│   │   ├── Feature
│   │   ├── TestCase.php
│   │   └── Unit
│   ├── vendor
│   │   ├── asm89
│   │   ├── autoload.php
│   │   ├── bacon
│   │   ├── bin
│   │   ├── brick
│   │   ├── composer
│   │   ├── dasprid
│   │   ├── dflydev
│   │   ├── doctrine
│   │   ├── dragonmantank
│   │   ├── egulias
│   │   ├── facade
│   │   ├── fakerphp
│   │   ├── filp
│   │   ├── fruitcake
│   │   ├── graham-campbell
│   │   ├── guzzlehttp
│   │   ├── hamcrest
│   │   ├── laravel
│   │   ├── league
│   │   ├── mockery
│   │   ├── monolog
│   │   ├── myclabs
│   │   ├── nesbot
│   │   ├── nette
│   │   ├── nikic
│   │   ├── nunomaduro
│   │   ├── opis
│   │   ├── paragonie
│   │   ├── phar-io
│   │   ├── phpdocumentor
│   │   ├── phpoption
│   │   ├── phpspec
│   │   ├── phpunit
│   │   ├── pragmarx
│   │   ├── psr
│   │   ├── psy
│   │   ├── ralouphie
│   │   ├── ramsey
│   │   ├── sebastian
│   │   ├── swiftmailer
│   │   ├── symfony
│   │   ├── theseer
│   │   ├── tijsverkoyen
│   │   ├── vlucas
│   │   ├── voku
│   │   └── webmozart
│   └── webpack.mix.js
