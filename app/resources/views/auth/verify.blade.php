@extends('layouts.app')

@section('content')
    <div id="verify" class="verify">
        <div class="verify-container">
            <div class="verify-header">{{ __('Verify Your Email Address') }}</div>

            @if (!session('resent'))
            <div class="verify-alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
             @endif

            <div class="verify-content">
                <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <p>
                        {{ __('If you did not receive the email') }}
                        <button type="submit" class="verify-resend-btn">{{ __('click here to request another') }}</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <canvas id="sineCanvas"></canvas>
@endsection
