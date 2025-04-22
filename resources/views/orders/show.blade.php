@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <h3 class="text-center">{{ __('language.Show One Record') }} </h3>
            <table class="table text-center">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>{{ __('language.Image') }}</th>
                      <th>{{ __('language.ID') }}</th>
                      <th>{{ __('language.Name') }}</th>
                      <th>{{ __('language.E-Mail') }}</th>
                      <th>{{ __('language.Created_at') }}</th>
                      <th>{{ __('language.Operation') }}</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>{{$ord->order_img}}</td>
                        <td>{{$ord->id}}</td>
                        <td>{{$ord->name}}</td>
                        <td>{{$ord->email}}</td>
                        <td>{{$ord->created_at}}</td>
                        <td>
                            <a href={{route('order')}} class="btn btn-success"><i class="fa-solid fa-house "></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

    
@endsection