@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form action={{route('orders.savenew')}} method="POST" enctype="multipart/form-data">
                @csrf
                
                <input type="hidden" value="{{$ed->id}}" name="old_id">
               
                <label>{{ __('language.Image') }}</label>
                <input type="file" class="form-control mb-4" name="order_img">
                @error('order_img')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

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

                <input type="submit" value="{{ __('language.Update Order') }}" class="btn btn-success  btn btn-block">

            </form>

        </div>
    </div>
</div>



    
@endsection