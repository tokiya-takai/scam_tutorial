@extends('layouts.app')

@section('content')

    @include('layouts._header')

    <div id="login" class="login">
        <div class="login-container">
            <div class="login-content1">
                <form method="POST" action="{{ route('login') }}" class="login-content1-form">
                    @csrf
                    <span class="login-content1-label">通常のログイン</span>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="メールアドレス" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="auth-error" role="alert">
                            <i>!</i>{{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="パスワード" required autocomplete="current-password">
                        @error('password')
                        <span class="auth-error" role="alert">
                            <i>!</i>{{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-sub-group">
                        <div class="remember">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>
                        <div class="password-request">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                    <div class="submit-form-group">
                        <button type="submit" class="auth-submit-btn btn btn-primary">{{ __('Login') }}</button>
                    </div>
                </form>
            </div>
            <div class="login-content2">
                <div class="login-content2-google">
                    <a href="/login/google" class="btn btn-secondary">
                        <button type="button" role="button" class="google-login-btn"></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <canvas id="sineCanvas"></canvas>
    
@endsection
