@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form action={{route('villas.store')}} method="POST" enctype="multipart/form-data">
                @csrf
                
                <label>{{ __('language.Image') }}</label>
                <input type="file" class="form-control mb-4" name="villa_img">
                @error('villa_img')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.ID') }}</label>
                <input type="text" class="form-control mb-4" name="id">
                @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror   

                <label>{{ __('language.Price') }}</label>
                <input type="float" class="form-control mb-4" name="price">
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.Space') }}</label>
                <input type="text" class="form-control mb-4" name="space">
                @error('space')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.Floor') }}</label>
                <input type="text" class="form-control mb-4" name="floor">
                @error('floor')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.Bedrooms') }}</label>
                <input type="text" class="form-control mb-4" name="bedrooms">
                @error('bedrooms')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.Bathrooms') }}</label>
                <input type="text" class="form-control mb-4" name="bathrooms">
                @error('bathrooms')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <input type="submit" value="{{ __('language.Send New Villa') }}" class="btn btn-success btn btn-block">

            </form>

        </div>
    </div>
</div>

    
@endsection