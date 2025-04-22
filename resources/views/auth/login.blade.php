@extends('layouts.app')

@section('content')
<style>
    body {
        background:rgb(169, 199, 237);
        font-family: 'Tajawal', sans-serif;
    }
    .login-card {
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-radius: 20px;
        padding: 30px;
        background-color: #fff;
    }
    .card-header {
        background: transparent;
        border-bottom: none;
        font-size: 24px;
        font-weight: bold;
        color: #333;
        text-align: center;
    }
</style>

<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-6">
        <div class="card login-card">
            <div class="card-header">{{ __('language.Login') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="email">{{ __('language.E-Mail') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">{{ __('language.Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                               {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('language.Remember Me') }}
                        </label>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary w-100">
                            {{ __('language.Login') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link mt-3 d-block" href="{{ route('password.request') }}">
                                {{ __('language.Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
