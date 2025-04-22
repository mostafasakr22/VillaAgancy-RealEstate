<nav class="main-nav ">
    <!-- ***** Logo Start ***** -->
    <a href={{route('welcome')}} class="logo mr-10">
        <h1>Villa</h1>
    </a>
    <!-- ***** Logo End ***** -->
    <!-- ***** Menu Start ***** -->
    <ul class="nav "  >
        <li><a href={{route('welcome')}} class="active">{{__('language.Home')  }}</a></li>
        <li><a href={{route('properties')}}>{{ __('language.Properties') }}</a></li>
        <li><a href={{route('properties-details')}}>{{ __('language.Property Details') }}</a></li>
        <li><a href={{route('contact')}}>{{ __('language.Contact Us') }}</a></li>

        <!-- Authentication Links -->

        @if (Route::has('login'))
        @auth
        @if (Auth::user()->role=='admin')
        <li style="background: linear-gradient(45deg, #87CEEB, #00BFFF);
                   height:40px;
                   border-radius: 20px;
                   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                   padding: 2px 5px;
                   margin-left: 15px;"><a href="{{ url('/home') }}">{{__('language.Dashboard')}}</a></li>
        <li style="background: linear-gradient(45deg, #87CEEB, #00BFFF);
                   height:40px;
                   border-radius: 20px;
                   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                   padding: 2px 5px;
                   margin-left: 15px;">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();">
                <span>{{__('language.Logout')}}</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        @else
        <li style="background: linear-gradient(45deg, #87CEEB, #00BFFF);
                   height:42px;
                   border-radius: 20px;
                   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                   padding: 2px 5px;
                   margin-left: 15px;" >
            <a  href="{{ route('logout') }}"
                onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();">
                <span>{{__('language.Logout')}}</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        @endif
        @else
        <li style="background: linear-gradient(45deg, #87CEEB, #00BFFF);
                   height:42px;
                   border-radius: 20px;
                   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                   padding: 2px 5px;
                   margin-left: 15px;"><a href="{{ route('login') }}">{{__('language.Login')}}</a></li>

        @if (Route::has('register'))
        <li style="background: linear-gradient(45deg, #87CEEB, #00BFFF);
                   height:42px;
                   border-radius: 20px;
                   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                   padding: 2px 5px;
                   margin-left: 15px;"><a href="{{ route('register') }}">{{__('language.Register')}}</a></li>
        @endif
        @endauth
        @endif

        <ul style="list-style-type: none; padding: 0; margin-top: -10px; margin-right: 15px;">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li style="margin-bottom: -70px;">
                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
            @endforeach
        </ul>

    </ul>
    <a class='menu-trigger'>
        <span>Menu</span>
    </a>
    <!-- ***** Menu End ***** -->
</nav>