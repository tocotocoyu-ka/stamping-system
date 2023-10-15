@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/login.css">
@endsection

@section('content')
<div class="login__content">
    <div class="login__heading">
        <h2>ログイン</h2>
    </div>

    <form class="form" action="/stamp" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="email" placeholder="メールアドレス" />
                </div>
                <div class="form__error">
                    <!--バリデーション必要か確認-->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password" placeholder="パスワード" />
                </div>
                <div class="form__error">
                    <!--バリデーション必要か確認-->
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">ログイン</button>
        </div>

        <div class="form__end">
            <p class="end-content">アカウントをお持ちでない方はこちらから</p>
            <a class="end-create" hlef="">会員登録</a>
            <!--遷移先URL未-->
        </div>

    </form>
</div>
@endsection