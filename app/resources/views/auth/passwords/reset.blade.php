@extends('layouts.app')

@section('content')
    <div id="reset" class="reset">
        <div class="reset-container">
            <div class="reset-header">
                {{ __('Reset Password') }}
            </div>

            <div class="reset-content">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="メールアドレス" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="auth-error" role="alert">
                                <i>!</i>{{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="新しいパスワード" required autocomplete="new-password">
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
                        <button type="submit" class="auth-submit-btn">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <canvas id="sineCanvas"></canvas>
@endsection
