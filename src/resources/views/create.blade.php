@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/create.css">
@endsection

@section('content')
<div class="create__content">
    <div class="create__heading">
        <h2>会員登録</h2>
    </div>

    <form class="create-form">
        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="名前" />
                </div>
                <div class="form__error">
                    <!--バリデーション必要か確認-->
                </div>
            </div>
        </div>

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

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password" placeholder="確認用パスワード" />
                </div>
                <div class="form__error">
                    <!--バリデーション必要か確認-->
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">会員登録</button>
        </div>

        <div class="form__end">
            <p class="end-content">アカウントをお持ちの方はこちらから</p>
            <a class="end-login" hlef="">ログイン</a>
            <!--遷移先URL未-->
        </div>
    </form>
</div>
@endsection