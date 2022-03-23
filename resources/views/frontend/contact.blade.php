@extends('frontend/master')

@section('title', 'Contact')
@section('content')


@endsection

@section('footer')
<div class="contact-page">
    
    <div class="contact-outer">
        <div class="contact-inner">
            <div class="contact-backgorund">

                <div class="contact-page-title">
                    <p>@lang('front.contact-header')</p>
                </div>

                <div class="contact-page-background-image">
                    <img src="{{asset('front/images/contact-backrgound-image-1.png')}}" alt="">
                </div>

                <div class="contact-window">
                    <div class="contact-widow-header">
                        <p>@lang('front.contact-window-header')</p>
                    </div>

                    <div class="contact-window-input">
                        <div class="input-name">
                           <img src="{{asset('front/images/person-icon.png')}}" alt="">
                            <input type="text" placeholder="@lang('front.input-name')">
                        </div>

                        <div class="input-mail">
                        <i class="fa-solid fa-at"></i>
                            <input type="text" placeholder="@lang('front.input-mail')">
                        </div>

                        <div class="input-phone">
                        <img src="{{asset('front/images/phone-icon.png')}}" alt="">
                            <input type="text" placeholder="@lang('front.input-text')">
                        </div>

                        <div class="input-message">
                        <img src="{{asset('front/images/message-icon.png')}}" alt="">
                            <input type="text" placeholder="@lang('front.input-send')">
                        </div>

                        <div class="input-button">
                           <button>
                            <p>@lang('front.input-send')</p>
                            <img src="{{asset('front/images/arrow-right.png') }}" alt="">
                           </button>
                        </div>
                    </div>
                </div>
           
               

            </div>


            <div class="contact-page-2">
                <div class="contact-page-2-middle">
                    <div class="contact-page-2-inner">
                        <div class="contact-info-page">
                            <div class="contact-info-header">
                                <p>@lang('front.contact-info')</p>
                            </div>

                            <div class="contact-info-titles">
                                <p>@lang('front.all')</p>
                                <p>@lang('front.tbilisi')</p>
                                <p>@lang('front.qutaisi')</p>
                                <p>@lang('front.batumi')</p>
                            </div>

                            <div class="contact-info-line">
                                <hr>
                            </div>

                            <div class="contact-info-location">
                                <div class="location-part-1">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>ალ.ყაზბეგის ქ. #15</p>
                                </div>
                                
                                <div class="location-part-2">
                                <i class="fa-solid fa-at"></i>
                                <p>info@bene-exclusive.com</p>
                                </div>
                                
                                <div class="location-part-3">
                                <i class="fa-solid fa-phone"></i>
                                <p>(+995) 322 052 100</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="contact-page-3">
                <div class="contact-page-3-middle">
                    <div class="contact-page-3-inner">

                        <div class="contact-page-3-background">
                            <img src="{{asset('front/images/contact-background-image-2.png')}}" alt="">
                        </div>
                        
                        <div class="become-member">
                            <p>@lang('front.member')</p>
                        </div>


                        <div class="upload-cv">
                                <div class="cv-text">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                <p>@lang('front.cv')</p>
                                </div>

                                 <div class="cv-button">
                                    <button>
                                     <p>@lang('front.input-send')</p>
                                     <img src="{{asset('front/images/arrow-right.png') }}" alt="">
                                    </button>
                                 </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




</div>
@endsection