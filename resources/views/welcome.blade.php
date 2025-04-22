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

<div class="main-banner">
  <div class="owl-carousel owl-banner">
    <div class="item item-1">
      <div class="header-text">
        <span class="category">{{ __('language.Toronto') }}, <em>{{ __('language.Canada') }}</em></span>
        <h2>{{ __('language.Hurry!') }}<br>{{ __('language.Get the Best Villa for you') }}</h2>
      </div>
    </div>
    <div class="item item-2">
      <div class="header-text">
        <span class="category">{{ __('language.Melbourne') }}, <em>{{ __('language.Australia') }}</em></span>
        <h2>{{ __('language.Be Qik!') }}<br>{{ __('language.Get the best villa in town') }}</h2>
      </div>
    </div>
    <div class="item item-3">
      <div class="header-text">
        <span class="category">{{ __('language.Miami') }}, <em>{{ __('language.South Florida') }}</em></span>
        <h2>{{ __('language.Act Now!') }}<br>{{ __('language.Get the highest level penthouse') }}</h2>
      </div>
    </div>
  </div>
</div>

<div class="featured section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="left-image">
          <img src="images/featured.jpg" alt="">
          <a href={{  route('properties-details')  }}><img src="images/featured-icon.png" alt="" style="max-width: 60px; padding: 0px;"></a>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="section-heading">
          <h6>| {{ __('language.Featured') }}</h6>
          <h2>{{ __('language.Best Appartment') }} &amp; {{ __('language.Sea view') }}</h2>
        </div>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                {{ __('language.Best useful links ?') }}
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                {{ __('language.Get') }} <strong>{{ __('language.the best villa') }}</strong> website template in HTML CSS and Bootstrap for your business. TemplateMo provides you the <a href="https://www.google.com/search?q=best+free+css+templates" target="_blank">best free CSS templates</a> in the world. Please tell your friends about it.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                {{ __('language.How does this work ?') }}
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                {{ __('language.Why is Villa Agency the best ?') }}
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="info-table">
          <ul>
            <li>
              <img src="images/info-icon-01.png" alt="" style="max-width: 52px;">
              <h4>250 m2<br><span>{{ __('language.Total Flat Space') }}</span></h4>
            </li>
            <li>
              <img src="images/info-icon-02.png" alt="" style="max-width: 52px;">
              <h4>{{ __('language.Contract') }}<br><span>{{ __('language.Contract Ready') }}</span></h4>
            </li>
            <li>
              <img src="images/info-icon-03.png" alt="" style="max-width: 52px;">
              <h4>{{ __('language.Payment') }}<br><span>{{ __('language.Payment Process') }}</span></h4>
            </li>
            <li>
              <img src="images/info-icon-04.png" alt="" style="max-width: 52px;">
              <h4>{{ __('language.Safety') }}<br><span>{{ __('language.24/7 Under Control') }}</span></h4>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="video section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <div class="section-heading text-center">
          <h6>| {{ __('language.Video View') }}</h6>
          <h2>{{ __('language.Get Closer View & Different Feeling') }}</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="video-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="video-frame">
          <img src="images/video-frame.jpg" alt="">
          <a href="https://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="fun-facts">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="wrapper">
          <div class="row">
            <div class="col-lg-4">
              <div class="counter">
                <h2 class="timer count-title count-number" data-to="34" data-speed="1000"></h2>
                <p class="count-text ">{{ __('language.Buildings') }}<br>{{ __('language.Finished Now') }}</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="counter">
                <h2 class="timer count-title count-number" data-to="12" data-speed="1000"></h2>
                <p class="count-text ">{{ __('language.Years') }}<br>{{ __('language.Experience') }}</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="counter">
                <h2 class="timer count-title count-number" data-to="24" data-speed="1000"></h2>
                <p class="count-text ">{{ __('language.Awards') }}<br>{{ __('language.Won 2023') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section best-deal">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="section-heading">
          <h6>| {{ __('language.Best Deal') }}</h6>
          <h2>{{ __('language.Find Your Best Deal Right Now!') }}</h2>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="tabs-content">
          <div class="row">
            <div class="nav-wrapper ">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment" aria-selected="true">{{ __('language.Appartment') }}</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">{{ __('language.Villa House') }}</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">{{ __('language.Penthouse') }}</button>
                </li>
              </ul>
            </div>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="info-table">
                      <ul>
                        <li>{{ __('language.Total Flat Space') }} <span>185 m2</span></li>
                        <li>{{ __('language.Floor number') }} <span>26</span></li>
                        <li>{{ __('language.Number of rooms') }} <span>4</span></li>
                        <li>{{ __('language.Parking Available') }} <span>Yes</span></li>
                        <li>{{ __('language.Payment Process') }} <span>Bank</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <img src="images/deal-01.jpg" alt="">
                  </div>
                  <div class="col-lg-3">
                    <h4>{{ __('language.Extra Info About Property') }}</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse.
                      <br><br>When you need free CSS templates, you can simply type TemplateMo in any search engine website. In addition, you can type TemplateMo Portfolio, TemplateMo One Page Layouts, etc.
                    </p>
                    <div class="icon-button">
                      <a href={{   route('properties-details')   }}><i class="fa fa-calendar"></i> {{ __('language.Schedule a visit') }}</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="info-table">
                      <ul>
                        <li>{{ __('language.Total Flat Space') }} <span>250 m2</span></li>
                        <li>{{ __('language.Floor number') }} <span>26th</span></li>
                        <li>{{ __('language.Number of rooms') }} <span>5</span></li>
                        <li>{{ __('language.Parking Available') }} <span>Yes</span></li>
                        <li>{{ __('language.Payment Process') }} <span>Bank</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <img src="images/deal-02.jpg" alt="">
                  </div>
                  <div class="col-lg-3">
                    <h4>{{ __('language.Detail Info About Villa') }}</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                    <div class="icon-button">
                      <a href={{   route('properties-details')   }}><i class="fa fa-calendar"></i> {{ __('language.Schedule a visit') }}</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="info-table">
                      <ul>
                        <li>{{ __('language.Total Flat Space') }} <span>320 m2</span></li>
                        <li>{{ __('language.Floor number') }} <span>34th</span></li>
                        <li>{{ __('language.Number of rooms') }} <span>6</span></li>
                        <li>{{ __('language.Parking Available') }} <span>Yes</span></li>
                        <li>{{ __('language.Payment Process') }} <span>Bank</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <img src="images/deal-03.jpg" alt="">
                  </div>
                  <div class="col-lg-3">
                    <h4>{{ __('language.Extra Info About Penthouse') }}</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                    <div class="icon-button">
                      <a href={{   route('properties-details')   }}><i class="fa fa-calendar"></i> {{ __('language.Schedule a visit') }}</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="properties section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <div class="section-heading text-center">
          <h6>| {{ __('language.Properties') }}</h6>
          <h2>{{ __('language.We Provide The Best Property You Like') }}</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
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
      <div class="col-lg-4 col-md-6">
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
      <div class="col-lg-4 col-md-6">
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
      <div class="col-lg-4 col-md-6">
        <div class="item">
          <a href={{route('properties-details')}}><img src={{ asset("images/property-03.jpg") }} alt=""></a>
          <span class="category">{{ __('language.Appartment')}}</span>
          <h6>$584.400</h6>
          <h4><a href={{route('properties-details')}}>12 Hope Street Portland, OR 12650</a></h4>
          <ul>
            <li>{{ __('language.Bedrooms:') }} <span>4</span></li>
            <li>{{ __('language.Bathrooms:') }}<span>3</span></li>
            <li>{{ __('language.Space:') }} <span>125m2</span></li>
            <li>{{ __('language.Floor:') }} <span>25th</span></li>
            <li>{{ __('language.Parking:') }} <span>2 cars</span></li>
          </ul>
          <div class="main-button">
            <a href={{route('properties-details')}}>{{ __('language.Schedule a visit') }}</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="item">
          <a href={{route('properties-details')}}><img src={{ asset("images/property-03.jpg") }} alt=""></a>
          <span class="category">{{ __('language.Penthouse')}}</span>
          <h6>$925.600</h6>
          <h4><a href={{route('properties-details')}}>34 Beach Street Miami, OR 42680</a></h4>
          <ul>
            <li>{{ __('language.Bedrooms:') }} <span>4</span></li>
            <li>{{ __('language.Bathrooms:') }}<span>4</span></li>
            <li>{{ __('language.Space:') }} <span>180m2</span></li>
            <li>{{ __('language.Floor:') }} <span>38th</span></li>
            <li>{{ __('language.Parking:') }} <span>2 cars</span></li>
          </ul>
          <div class="main-button">
            <a href={{route('properties-details')}}>{{ __('language.Schedule a visit') }}</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="item">
          <a href={{route('properties-details')}}><img src={{ asset("images/property-03.jpg") }} alt=""></a>
          <span class="category">{{ __('language.Modern Condo')}}</span>
          <h6>$450.000</h6>
          <h4><a href={{route('properties-details')}}>22 New Street Portland, OR 16540</a></h4>
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
    </div>
  </div>
</div>

<div class="contact section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <div class="section-heading text-center">
          <h6>| {{ __('language.Contact Us') }}</h6>
          <h2>{{ __('language.Get In Touch With Our Agents')}}</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="contact-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="item phone">
              <img src="images/phone-icon.png" alt="" style="max-width: 52px;">
              <h6>010-052-63306<br><span>{{ __('language.Phone Number') }}</span></h6>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="item email">
              <img src="images/email-icon.png" alt="" style="max-width: 52px;">
              <h6>msakr55@gmail.com<br><span>{{ __('language.Business Email') }}</span></h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">

            @if (session('success'))
                <h4 class="alert alert-success text-center">{{session('success')}}</h4>
            @endif

          <form enctype="multipart/form-data" id="contact-form" action={{ route('message.store') }} method="post">
            @csrf
            <h4 class="text-center">  {{ __('language.Contact Us..!') }}</h4>
          <br> 
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">{{ __('language.Full Name') }}</label>
                  <input type="name" name="name" id="name" placeholder="{{ __('language.Your Name...') }}" autocomplete="on" >
                </fieldset>
              </div>
              @error('name')
              <div class="alert alert-danger">{{$message}}</div>
              @enderror

              <div class="col-lg-12">
                <fieldset>
                  <label for="email">{{ __('language.Email Address') }}</label>
                  <input type="text" name="email" id="email"  placeholder="{{ __('language.Your E-mail...') }}" >
                </fieldset>
              </div>
              @error('email')
              <div class="alert alert-danger">{{$message}}</div>
              @enderror
              
              <div class="col-lg-12">
                <fieldset>
                  <label for="message">{{ __('language.Message') }}</label>
                  <textarea name="message" id="message" placeholder="{{ __('language.Your Message...') }}"></textarea>
                </fieldset>
              </div>
              @error('message')
              <div class="alert alert-danger">{{$message}}</div>
              @enderror
              
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">{{ __('language.Send Message') }}</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="col-lg-8">
      <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved.

        Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
    </div>
  </div>
</footer>


@endsection