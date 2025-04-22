@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form action={{route('users.store')}} method="POST" enctype="multipart/form-data">
                @csrf

                <label>{{ __('language.ID')}}</label>
                <input type="text" class="form-control mb-4" name="id">
                @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.Name') }}</label>
                <input type="text" class="form-control mb-4" name="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.E-Mail') }}</label>
                <input type="text" class="form-control mb-4" name="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.Age') }}</label>
                <input type="text" class="form-control mb-4" name="age">
                @error('age')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.Gender') }}</label>
                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                        <label class="form-check-label" for="male">{{ __('language.Male') }}</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                        <label class="form-check-label" for="female">{{ __('language.Female') }}</label>
                    </div>

                    @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <label>{{ __('language.Password') }}</label>
                <input type="text" class="form-control mb-4" name="password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="submit" value="{{ __('language.Add New User') }}" class="btn btn-success btn btn-block">

            </form>

        </div>
    </div>
</div>


@endsection