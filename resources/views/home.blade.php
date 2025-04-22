@extends('layouts.dashboard')

@section('content')

<div id="wrapper" class="d-flex">
  <!-- Sidebar -->
  <div class="bg-dark border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-white d-flex justify-content-between align-items-center">
      <span>{{ __('language.Admin Panel') }}</span> <!-- ترجمة "Admin Panel" -->
      <button class="btn btn-link text-white" id="menu-toggle">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <div class="list-group list-group-flush">
      <a href={{ route('user') }} class="list-group-item list-group-item-action bg-dark text-white">
        <i class="fa-solid fa-users"></i>
        <span>{{ __('language.Users') }}</span> <!-- ترجمة "Users" -->
      </a>
      <a href={{ route('order') }} class="list-group-item list-group-item-action bg-dark text-white">
        <i class="fa-solid fa-box"></i>
        <span>{{ __('language.Orders') }}</span> <!-- ترجمة "Orders" -->
      </a>
      <a href={{ route('villa') }} class="list-group-item list-group-item-action bg-dark text-white">
        <i class="fa-solid fa-house"></i>
        <span>{{ __('language.Villas') }}</span> <!-- ترجمة "Villas" -->
      </a>
      <a href={{ route('message') }} class="list-group-item list-group-item-action bg-dark text-white">
        <i class="fa-solid fa-envelope"></i>
        <span>{{ __('language.Messages') }}</span> <!-- ترجمة "Messages" -->
      </a>
      <a href={{ route('welcome') }} class="list-group-item list-group-item-action bg-dark text-white">
        <i class="fa-solid fa-right-from-bracket"></i>
        <span>{{ __('language.Logout') }}</span> <!-- ترجمة "Logout" -->
      </a>
      <!-- ترجمات اللغات المدعومة -->
      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="list-group-item list-group-item-action bg-dark text-white">
            <span>{{ $properties['native'] }}</span> <!-- ترجمة اللغة المدعومة -->
        </a>
      @endforeach
    </div>
  </div>
  <!-- /#sidebar-wrapper -->
</div>

  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper">

    <h4 class="welcome-message ml-3 mt-2" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);color: #4CAF50; align-items: center;">
      <i style="color: #FFD700; font-size: 2rem;" class="fa-solid fa-face-smile"></i> 
      {{ __('language.Welcome,') }} {{ Auth::user()->name }} <!-- ترجمة "Welcome," -->
    </h4>
    <br>
    <!-- Cards Section -->
    <div class="row">
      <!-- Card 1 - Users -->
      <div class="col-lg-6 mb-4 ">
        <div class="card text-center shadow">
          <div class="card-body">
            <i class="fa-solid fa-users fa-3x text-primary mb-3"></i>
            <h5 class="card-title">{{ __('language.Users') }}</h5> <!-- ترجمة "Users" -->
            <h6 class="badge badge-primary">{{$user->count()}}</h6>
            <br>
            <a href={{ route('user') }} class="btn btn-success">{{ __('language.Show') }}</a> <!-- ترجمة "Show" -->
          </div>
        </div>
      </div>
      <!-- Card 2 - Orders -->
      <div class="col-lg-6 mb-4 px-0">
        <div class="card text-center shadow">
          <div class="card-body">
            <i class="fa-solid fa-box fa-3x text-success mb-3"></i>
            <h5 class="card-title">{{ __('language.Orders') }}</h5> <!-- ترجمة "Orders" -->
            <h6 class="badge badge-primary">{{$order->count()}}</h6>
            <br>
            <a href={{ route('order') }} class="btn btn-success">{{ __('language.Show') }}</a> <!-- ترجمة "Show" -->
          </div>
        </div>
      </div>
      <!-- Card 3 - Villas -->
      <div class="col-lg-6 mb-4">
        <div class="card text-center shadow">
          <div class="card-body">
            <i class="fa-solid fa-house fa-3x text-warning mb-3"></i>
            <h5 class="card-title">{{ __('language.Villas') }}</h5> <!-- ترجمة "Villas" -->
            <h6 class="badge badge-primary">{{$villa->count()}}</h6>
            <br>
            <a href={{ route('villa') }} class="btn btn-success">{{ __('language.Show') }}</a> <!-- ترجمة "Show" -->
          </div>
        </div>
      </div>
      <!-- Card 4 - Messages -->
      <div class="col-lg-6 mb-4 px-0">
        <div class="card text-center shadow">
          <div class="card-body">
            <i class="fa-solid fa-envelope fa-3x text-danger mb-3"></i>
            <h5 class="card-title">{{ __('language.Messages') }}</h5> <!-- ترجمة "Messages" -->
            <h6 class="badge badge-primary">{{$message->count()}}</h6>
            <br>
            <a href={{ route('message') }} class="btn btn-success">{{ __('language.Show') }}</a> <!-- ترجمة "Show" -->
          </div>
        </div>
      </div>
    </div>
    <!-- End of Cards Section -->
  </div>
</div>
<!-- /#page-content-wrapper -->
</div>


@endsection