@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form action={{route('orders.store')}} method="POST" enctype="multipart/form-data">
                @csrf
                
                <label>{{ __('language.Image') }}</label>
                <input type="file" class="form-control mb-4" name="order_img ">
                @error('order_img')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>{{ __('language.ID') }}</label>
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
                
                <input type="submit" value="{{ __('language.Send Your Order') }}" class="btn btn-success btn btn-block">

            </form>

        </div>
    </div>
</div>

    
@endsection