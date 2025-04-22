@extends('layouts.app')

@section('content')


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('temp.navbar')
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href=" {{route('properties')}}">{{ __('language.Home') }}</a> / {{ __('language.Properties') }}</span>
          <h3>{{ __('language.Properties') }}</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="secti properties">
    <div class="container">
      <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">{{ __('language.Show All') }}</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">{{ __('language.Appartment') }}</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">{{ __('language.Villa House') }}</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">{{ __('language.Penthouse') }}</a>
        </li>
      </ul>
      <div class="row properties-box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href={{route('properties-details')}}><img src={{ asset("images/property-01.jpg") }} alt=""></a>
            <span class="category">{{ __('language.Luxury Villa')}}</span>
            <h6>$2.264.000</h6>
            <h4><a href={{route('properties-details')}}>18 Old Street Miami, OR 97219</a></h4>
            <ul>
              <li>{{ __('language.Bedrooms:') }} <span>8</span></li>
              <li>{{ __('language.Bathrooms:') }}<span>8</span></li>
              <li>{{ __('language.Space:') }} <span>545m2</span></li>
              <li>{{ __('language.Floor:') }} <span>3</span></li>
              <li>{{ __('language.Parking:') }} <span>6 spots</span></li>
            </ul>
            <div class="main-button">
              <a href={{route('properties-details')}}>{{ __('language.Schedule a visit') }}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
          <div class="item">
            <a href={{route('properties-details')}}><img src={{ asset("images/property-02.jpg") }} alt=""></a>
            <span class="category">{{ __('language.Luxury Villa')}}</span>
            <h6>$1.180.000</h6>
            <h4><a href={{route('properties-details')}}>54 New Street Florida, OR 27001</a></h4>
            <ul>
              <li>{{ __('language.Bedrooms:') }} <span>6</span></li>
              <li>{{ __('language.Bathrooms:') }}<span>5</span></li>
              <li>{{ __('language.Space:') }} <span>450m2</span></li>
              <li>{{ __('language.Floor:') }} <span>3</span></li>
              <li>{{ __('language.Parking:') }} <span>8 spots</span></li>
            </ul>
            <div class="main-button">
              <a href={{route('properties-details')}}>{{ __('language.Schedule a visit') }}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv rac">
          <div class="item">
            <a href={{route('properties-details')}}><img src={{ asset("images/property-03.jpg") }} alt=""></a>
            <span class="category">{{ __('language.Luxury Villa')}}</span>
            <h6>$1.460.000</h6>
            <h4><a href={{route('properties-details')}}>26 Mid Street Portland, OR 38540</a></h4>
            <ul>
              <li>{{ __('language.Bedrooms:') }} <span>5</span></li>
              <li>{{ __('language.Bathrooms:') }}<span>4</span></li>
              <li>{{ __('language.Space:') }} <span>225m2</span></li>
              <li>{{ __('language.Floor:') }} <span>3</span></li>
              <li>{{ __('language.Parking:') }} <span>10 spots</span></li>
            </ul>
            <div class="main-button">
              <a href={{route('properties-details')}}>{{ __('language.Schedule a visit') }}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
          <div class="item">
            <a href={{route('properties-details')}}><img src={{ asset("images/property-04.jpg") }} alt=""></a>
            <span class="category">{{ __('language.Appartment')}}</span>
            <h6>$584.500</h6>
            <h4><a href={{route('properties-details')}}>12 Hope Street Portland, OR 12650</a></h4>
            <ul>
              <li>{{ __('language.Bedrooms:') }} <span>5</span></li>
              <li>{{ __('language.Bathrooms:') }}<span>3</span></li>
              <li>{{ __('language.Space:') }} <span>125m2</span></li>
              <li>{{ __('language.Floor:') }} <span>36th</span></li>
              <li>{{ __('language.Parking:') }} <span>6 spots</span></li>
            </ul>
            <div class="main-button">
              <a href={{route('properties-details')}}>{{ __('language.Schedule a visit') }}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
          <div class="item">
            <a href={{route('properties-details')}}><img src={{ asset("images/property-05.jpg") }} alt=""></a>
            <span class="category">{{ __('language.Penthouse')}}</span>
            <h6>$925.600</h6>
            <h4><a href={{route('properties-details')}}>34 Hope Street Portland, OR 42680</a></h4>
            <ul>
              <li>{{ __('language.Bedrooms:') }} <span>4</span></li>
              <li>{{ __('language.Bathrooms:') }}<span>4</span></li>
              <li>{{ __('language.Space:') }} <span>185m2</span></li>
              <li>{{ __('language.Floor:') }} <span>38th</span></li>
              <li>{{ __('language.Parking:') }} <span>2 cars</span></li>
            </ul>
            <div class="main-button">
              <a href={{route('properties-details')}}>{{ __('language.Schedule a visit') }}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
          <div class="item">
            <a href={{route('properties-details')}}><img src={{ asset("images/property-06.jpg") }} alt=""></a>
            <span class="category">{{ __('language.Modern Condo')}}</span>
            <h6>$450.000</h6>
            <h4><a href={{route('properties-details')}}>22 Hope Street Portland, OR 16540</a></h4>
            <ul>
              <li>{{ __('language.Bedrooms:') }} <span>3</span></li>
              <li>{{ __('language.Bathrooms:') }}<span>2</span></li>
              <li>{{ __('language.Space:') }} <span>165m2</span></li>
              <li>{{ __('language.Floor:') }} <span>26th</span></li>
              <li>{{ __('language.Parking:') }} <span>3 cars</span></li>
            </ul>
            <div class="main-button">
              <a href={{route('properties-details')}}>{{ __('language.Schedule a visit') }}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
          <div class="item">
            <a href={{route('properties-details')}}><img src={{ asset("images/property-03.jpg") }} alt=""></a>
            <span class="category">{{ __('language.Luxury Villa')}}</span>
            <h6>$980.000</h6>
            <h4><a href="property-details.html">14 Mid Street Miami, OR 36450</a></h4>
            <ul>
              <li>{{ __('language.Bedrooms:') }} <span>8</span></li>
              <li>{{ __('language.Bathrooms:') }}<span>8</span></li>
              <li>{{ __('language.Space:') }} <span>550m2</span></li>
              <li>{{ __('language.Floor:') }} <span>3</span></li>
              <li>{{ __('language.Parking:') }} <span>12 spots</span></li>
            </ul>
            <div class="main-button">
              <a href={{route('properties-details')}}>{{ __('language.Schedule a visit') }}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
          <div class="item">
            <a href={{route('properties-details')}}><img src={{ asset("images/property-02.jpg") }} alt=""></a>
            <span class="category">{{ __('language.Luxury Villa')}}</span>
            <h6>$1.520.000</h6>
            <h4><a href={{route('properties-details')}}>26 Old Street Miami, OR 12870</a></h4>
            <ul>
              <li>{{ __('language.Bedrooms:') }} <span>12</span></li>
              <li>{{ __('language.Bathrooms:') }}<span>15</span></li>
              <li>{{ __('language.Space:') }} <span>380m2</span></li>
              <li>{{ __('language.Floor:') }} <span>3</span></li>
              <li>{{ __('language.Parking:') }} <span>14 spots</span></li>
            </ul>
            <div class="main-button">
              <a href={{route('properties-details')}}>{{ __('language.Schedule a visit') }}</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
          <div class="item">
            <a href={{route('properties-details')}}><img src={{ asset("images/property-01.jpg") }} alt=""></a>
            <span class="category">{{ __('language.Luxury Villa') }}</span>
            <h6>$3.145.000</h6>
            <h4><a href={{route('properties-details')}}>34 New Street Miami, OR 24650</a></h4>
            <ul>
              <li>{{ __('language.Bedrooms:') }} <span>10</span></li>
              <li>{{ __('language.Bathrooms:') }}<span>12</span></li>
              <li>{{ __('language.Space:') }} <span>860m2</span></li>
              <li>{{ __('language.Floor:') }} <span>3</span></li>
              <li>{{ __('language.Parking:') }} <span>10 spots</span></li>
            </ul>
            <div class="main-button">
              <a href={{route('properties-details')}}>{{ __('language.Schedule a visit') }}</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">>></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved. 
        
        Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>
    
@endsection