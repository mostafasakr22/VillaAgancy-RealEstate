@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <h3 class="text-center">{{ __('language.Show One Villa') }} </h3>
            <table class="table text-center">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>{{ __('language.Image') }}</th>
                      <th>{{ __('language.ID') }}</th>
                      <th>{{ __('language.Price') }}</th>
                      <th>{{ __('language.Space') }}</th>
                      <th>{{ __('language.Floor') }}</th>
                      <th>{{ __('language.Bedrooms') }}</th>
                      <th>{{ __('language.Bathrooms') }}</th>
                      <th>{{ __('language.Created_at') }}</th>
                      <th>{{ __('language.Operation') }}</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>{{$vill->villa_img}}</td>
                        <td>{{$vill->id}}</td>
                        <td>{{$vill->price}}</td>
                        <td>{{$vill->space}}</td>
                        <td>{{$vill->floor}}</td>
                        <td>{{$vill->bedrooms}}</td>
                        <td>{{$vill->bathrooms}}</td>
                        <td>{{$vill->created_at}}</td>
                        <td>
                            <a href={{route('villa')}} class="btn btn-success"><i class="fa-solid fa-house "></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

    
@endsection