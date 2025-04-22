@extends('layouts.app')


@include('temp.navbar_dashboard')

@section('content')

<div class="container-fluid mt-5">
    <div class="row "> 
        <div class="col-md-8  m-auto ">
            <div class="card">
                <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                    <div style="font-size: large;" >
                        {{ __('language.Villas') }} <!-- ترجمة "Villas" -->
                        <span class="badge badge-primary" style="font-size: 0.8rem;"> {{$villa->count()}} </span>
                    </div>
                    <a href="{{ route('villas.create') }}" class="btn btn-success">{{ __('language.Add New Villa') }}</a> <!-- ترجمة "Add New Villa" -->
                </div>

                @if (session('message'))
                    <h3 class="alert alert-success text-center">{{ session('message') }}</h3>
                @endif

                <div class="card-body">
                    <div class="table-responsive" >
                        <table class="table text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>{{ __('language.Image') }}</th> <!-- ترجمة "Image" -->
                                    <th>{{ __('language.ID') }}</th> <!-- ترجمة "ID" -->
                                    <th>{{ __('language.Price') }}</th> <!-- ترجمة "Price" -->
                                    <th>{{ __('language.Space') }}</th> <!-- ترجمة "Space" -->
                                    <th>{{ __('language.Floor') }}</th> <!-- ترجمة "Floor" -->
                                    <th>{{ __('language.Bedrooms') }}</th> <!-- ترجمة "Bedrooms" -->
                                    <th>{{ __('language.Bathrooms') }}</th> <!-- ترجمة "Bathrooms" -->
                                    <th>{{ __('language.Created At') }}</th> <!-- ترجمة "Created At" -->
                                    <th>{{ __('language.Operation') }}</th> <!-- ترجمة "Operation" -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($villa as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('villas/img/'.$item->villa_img) }}" style="height: 50px;width:50px;">
                                        </td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->space }}</td>
                                        <td>{{ $item->floor }}</td>
                                        <td>{{ $item->bedrooms }}</td>
                                        <td>{{ $item->bathrooms }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        
                                        <td class="d-flex justify-content-center">
                                            <a href="{{ route('villas.show', $item->id) }}" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('villas.edit', $item->id) }}" class="btn btn-primary mx-2">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{ route('villas.delete', $item->id) }}" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection