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
          <span class="breadcrumb"><a href="#">{{ __('language.Home') }}</a>  /  {{ __('language.Contact Us') }}</span>
          <h3>{{ __('language.Contact Us') }}</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>| {{ __('language.Contact Us') }}</h6>
            <h2>{{ __('language.Get In Touch With Our Agents') }}</h2>
          </div>
          <p>When you really need to download free CSS templates, please remember our website TemplateMo. Also, tell your friends about our website. Thank you for visiting. There is a variety of Bootstrap HTML CSS templates on our website. If you need more information, please contact us.</p>
          <div class="row">
            <div class="col-lg-12">
              <div class="item phone">
                <img src={{ asset("images/phone-icon.png") }} alt="" style="max-width: 52px;">
                <h6>010-052-63306<br><span>{{ __('language.Phone Number') }}</span></h6>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item email">
                <img src={{ asset("images/email-icon.png") }} alt="" style="max-width: 52px;">
                <h6>msakr55@gmail.com<br><span>{{ __('language.Business Email') }}</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">

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
        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
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