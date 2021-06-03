@extends('layouts.app')

@section('content')

    @include('layouts._header')

    <div id="login" class="login">
        <div class="login-container">
            <div class="login-content1">
                <form method="POST" action="{{ route('login') }}">
                    <span>通常のログイン</span>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="auth-error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="auth-error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="remember">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>
                        <div class="password-request">
                            <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            <div class="login-content2">
                <div class="google">
                    <a href="/login/google" class="btn btn-secondary">
                        <button type="button"><img src="/images/google_signin_light.png" alt="">Googleでログイン</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('layouts._footer')

@endsection
