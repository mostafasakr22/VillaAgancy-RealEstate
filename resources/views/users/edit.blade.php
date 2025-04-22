@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form action={{route('users.savenew')}} method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" value="{{$ed->id}}" name="old_id">

                <label>{{ __('language.ID') }}</label>
                <input type="text" class="form-control mb-4" name="id" value="{{$ed->id}}">
                @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.Name') }}</label>
                <input type="text" class="form-control mb-4" name="name" value="{{$ed->name}}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.E-Mail') }}</label>
                <input type="text" class="form-control mb-4" name="email" value="{{$ed->email}}">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.Age') }}</label>
                <input type="text" class="form-control mb-4" name="age" value="{{$ed->age}}">
                @error('age')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.Gender') }}</label>
                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{ $ed->gender == 'male' ? 'checked' : '' }}>
                        <label class="form-check-label" for="male">{{ __('language.Male') }}</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ $ed->gender == 'female' ? 'checked' : '' }}>
                        <label class="form-check-label" for="female">{{ __('language.Female') }}</label>
                    </div>

                    @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <label>{{ __('language.Password') }}</label>
                <input type="text" class="form-control mb-4" name="email" value="{{$ed->password}}">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <input type="submit" value="{{ __('language.Update User Details') }}" class="btn btn-success  btn btn-block">

            </form>

        </div>
    </div>
</div>




@endsection