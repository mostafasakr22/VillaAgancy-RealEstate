<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main" style="background-color: #343a40;">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block ml-5" href={{route('home')}}>{{__('language.Dashboard')}}</a>
        <!-- Form -->
        
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li class="nav-item">
            <a class="nav-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-l  font-weight-bold mr-2">{{ Auth::user()->name }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href={{route('welcome')}} class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Home</span>
              </a>
              <a href={{route('user')}} class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Users</span>
              </a>
              <a href={{route('order')}} class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Orders</span>
              </a>
              <a href={{route('villa')}} class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Villas</span>
              </a>
              <a href= {{route('message')}} class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Messages</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href={{route('login')}} class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>