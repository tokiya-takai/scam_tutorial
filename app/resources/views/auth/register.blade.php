@extends('layouts.app')

@section('content')
    
    @include('layouts._header')
    <div id="register" class="register">
        <div class="register-container">
            <div class="register-content1">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="register-content1-label">通常の新規登録</span>
                    <div class="form-group">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="名前" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="auth-error" role="alert">
                            <i>!</i>{{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="メールアドレス" required autocomplete="email">
                        @error('email')
                            <span class="auth-error" role="alert">
                                <i>!</i>{{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="パスワード" required autocomplete="new-password">
                        @error('password')
                            <span class="auth-error" role="alert">
                                <i>!</i>{{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="パスワード(確認)" required autocomplete="new-password">
                    </div>
                    <div class="submit-form-group">
                        <button type="submit" class="auth-submit-btn btn btn-primary">{{ __('Register') }}</button>
                    </div>
                </form>
                <div class="agree">
                    <span>続行することで、 i-Liteの<a href="{{ route('termsOfUse') }}">利用規約</a>
                        および<a href="{{ route('privacyPolicy') }}">プライバシーポリシー</a>に同意するものとみなされます。
                    </span>
                </div>
            </div>
            <div class="register-content2">
                <div class="register-content2-google">
                    <a href="/login/google" class="btn btn-secondary">
                        <button type="button" role="button" class="google-login-btn"></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <canvas id="sineCanvas"></canvas>

@endsection