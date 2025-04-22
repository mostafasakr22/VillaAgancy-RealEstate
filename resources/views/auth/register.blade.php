@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: rgb(169, 199, 237); 
        font-family: 'Tajawal', sans-serif;
    }
    .register-card {
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-radius: 20px;
        padding: 5px; 
        background-color: #fff;
    }
    .card-header {
        background: transparent;
        border-bottom: none;
        font-size: 20px; 
        font-weight: bold;
        color: #333;
        text-align: center;
    }
    .form-control {
        font-size: 14px; 
    }
    button {
        font-size: 17px; 
    }
</style>

<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-8">
        <div class="card register-card">
            <div class="card-header">{{ __('language.Register') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="name">{{ __('language.Name') }}</label>
                        <input id="name" type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">{{ __('language.E-Mail') }}</label>
                        <input id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="age">{{ __('language.Age') }}</label>
                        <input id="age" type="text"
                            class="form-control @error('age') is-invalid @enderror"
                            name="age" value="{{ old('age') }}" required autocomplete="age">
                        @error('age')
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>{{ __('language.Gender') }}</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                                    {{ old('gender') == 'male' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="male">{{ __('language.Male') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                                    {{ old('gender') == 'female' ? 'checked' : '' }}>
                                <label class="form-check-label" for="female">{{ __('language.Female') }}</label>
                            </div>
                        </div>
                        @error('gender')
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">{{ __('language.Password') }}</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="password-confirm">{{ __('language.Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary w-100">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
