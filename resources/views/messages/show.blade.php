@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <h3 class="text-center">{{ __('language.Show One Message') }} </h3>
            <table class="table text-center">
                <thead class="bg-dark text-light">
                    <tr>
                      <th>{{ __('language.ID') }}</th>
                      <th>{{ __('language.Name') }}</th>
                      <th>{{ __('language.E-Mail') }}</th>
                      <th>{{ __('language.Message') }}</th>
                      <th>{{ __('language.Created_at') }}</th>
                      <th>{{ __('language.Operation') }}</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>{{$mess->id}}</td>
                        <td>{{$mess->name}}</td>
                        <td>{{$mess->email}}</td>
                        <td>{{$mess->message}}</td>
                        <td>{{$mess->created_at}}</td>
                        <td>
                            <a href={{route('message')}} class="btn btn-success"><i class="fa-solid fa-house "></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

    
@endsection