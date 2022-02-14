@extends('frontend/master')

@section('title', 'Contact')
@section('content')


@endsection

@section('footer')
<div class="contact-page">
    
    <div class="contact-outer">
        <div class="contact-inner">
            <div class="contact-backgorund">
            
            <div class="contact-elements">
            <img src="{{asset('front\images\contact-background.png')}}">

                  <div class="location">

                  <div class="contact-header">
                  <p>@lang('front.contact-header')</p>
                  </div>
                      <div class="location-name">
                          
                  <i class="fas fa-map-marker-alt"></i>  
                  <p>Al. Kazbegi str #15</p>
                  </div>

                  <div class="location-mail">
                  <i class="fas fa-at"></i> 
                  <p>info@bene-exclusive.com</p>
                  </div>

                  <div class="location-phone">
                  <i class="fas fa-phone-alt"></i> 
                  <p>(+995) 322 052 100</p>
                  </div>

                  </div>
                  <div class="contact-window"> 
                    <div class="contact-window-header">
                        <p>@lang('front.contact-header')</p>
                    </div>

                    <div class="contact-inputs">

                    <div class="input-name">
                    <i class="far fa-user"></i>
                        <input type="text" placeholder="@lang('front.input-name')">
                    </div>
                    

                    <div class="input-email">
                    <i class="fas fa-at"></i>
                    <input type="email" placeholder="E-mail">
                    </div>

                    <div class="input-number">
                    <i class="fas fa-phone-alt"></i>
                        <input type="number"  placeholder="@lang('front.input-number')">
                    </div>

                    <div class="input-message">
                    <i class="far fa-comment-alt"></i>
                        <input type="text" placeholder="@lang('front.input-text')">
                    </div>

                    </div>

                    <div class="input-send-button">
                        <button type="button" class="send-btn"><p>@lang('front.input-send')</p><i class="fas fa-arrow-right"></i></button>
                    </div>

                 </div>
               </div>

            </div>

        </div>
    </div>




</div>
@endsection