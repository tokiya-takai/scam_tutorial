@extends('layouts.app')

@section('content')
    <div id="password-reset-mail" class="password-reset-mail">
        <div class="password-reset-mail-container">
            <div class="password-reset-mail-header">
                {{ __('Reset Password') }}
            </div>
            <div class="password-reset-mail-content">
                @if (session('status'))
                    <div class="password-reset-mail-alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="password-reset-mail-description">
                    <p>パスワードリセットのためのメールを送信します。<br>登録したメールアドレスを入力し、送信ボタンを押してください。</p>
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="メールアドレス" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="auth-error" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="submit-form-group">
                        <button type="submit" class="auth-submit-btn">送信</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <canvas id="sineCanvas"></canvas>
@endsection
