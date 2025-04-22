@extends('layouts.app')

@include('temp.navbar_dashboard')

@section('content')

<div class="container-fluid mt-5">
    <div class="row "> 
        <div class="col-md-8 m-auto ">
            <div class="card">
                <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                    <div style="font-size: large;" >
                        {{ __('language.Messages') }} <!-- ترجمة "Messages" -->
                        <span class="badge badge-primary" style="font-size: 0.8rem;"> {{$message->count()}} </span>
                    </div>
                </div>

                @if (session('message'))
                    <h3 class="alert alert-success text-center">{{ session('message') }}</h3>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>{{ __('language.ID') }}</th> <!-- ترجمة "ID" -->
                                    <th>{{ __('language.Name') }}</th> <!-- ترجمة "Name" -->
                                    <th>{{ __('language.E-Mail') }}</th> <!-- ترجمة "E-Mail" -->
                                    <th>{{ __('language.Message') }}</th> <!-- ترجمة "Message" -->
                                    <th>{{ __('language.Created At') }}</th> <!-- ترجمة "Created At" -->
                                    <th>{{ __('language.Operation') }}</th> <!-- ترجمة "Operation" -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($message as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->message }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td class="d-flex justify-content-center">
                                            <a href="{{ route('messages.show', $item->id) }}" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="{{ route('messages.delete', $item->id) }}" class="btn btn-danger">
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