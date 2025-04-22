@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
            <h3 class="text-center">{{ __('language.Show One User') }} </h3>
            <table class="table text-center">
                <thead class="bg-dark text-light">
                    <tr>
                        
                      <th>{{ __('language.ID') }}</th>
                      <th>{{ __('language.Name') }}</th>
                      <th>{{ __('language.E-Mail') }}</th>
                      <th>{{ __('language.Age') }}</th>
                      <th>{{ __('language.Gender') }}</th>
                      <th>{{ __('language.Created_at') }}</th>
                      <th>{{ __('language.Operation') }}</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>{{$use->id}}</td>
                        <td>{{$use->name}}</td>
                        <td>{{$use->email}}</td>
                        <td>{{$use->age}}</td>
                        <td>{{$use->gender}}</td>
                        <td>{{$use->created_at}}</td>
                        <td>
                            <a href={{route('user')}} class="btn btn-success"><i class="fa-solid fa-house "></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

    
@endsection