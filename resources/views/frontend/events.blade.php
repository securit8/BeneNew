@extends('frontend/master')

@section('title', 'Events')
@section('content')


@endsection

@section('footer')

<div class="events-outer">
    <div class="events-middle">
        <div class="evenrs-inner">



            <div class= "proeqtebi" >
                
                <div class="project">
                    <div class="project-image-1">
                        <img src="{{asset('front/images/proeqti1.jpg') }}" alt="">
                    </div>

                    <div class="project-info">
                        <div class="project-title">
                            <p>@lang('front.moiare')</p>
                        </div>
                        <div class="project-text">
                            <p>@lang('front.moiare-description')</p>
                        </div>
                        <div class="project-button">
                                <button> 
                                <a href="{{route('frontend.event-moiare')}}">
                                    <p>@lang('front.show-more')</p>
                                    <img src="{{asset('front/images/arrow-right.png') }}" alt="">
                                    </a>
                                </button>
                        </div>
                    </div>
                </div>


                <div class="project">
                        <div class="project-image-2">
                            <img src="{{asset('front/images/proeqti2.jpg') }}" alt="">
                        </div>

                        <div class="project-info">
                            <div class="project-title">
                                <p>NETWORKING GEORGIA</p>
                            </div>
                            <div class="project-text">
                                <p>@lang('front.networking-description')</p>
                            </div>
                            <div class="project-button">
                                <button> 
                                    <a href="{{route('frontend.networking')}}">
                                    <p>@lang('front.show-more')</p>
                                    <img src="{{asset('front/images/arrow-right.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                </div>


                <div class="project">
                        <div class="project-image-3">
                            <img src="{{asset('front/images/proeqti3.jpg') }}" alt="">
                        </div>

                        <div class="project-info">
                            <div class="project-title">
                                <p>@lang('front.mersedes-event')</p>
                            </div>

                            <div class="project-text">
                                <p>@lang('front.mersedes-event-description')</p>
                            </div>
                            <div class="project-button">
                                <button> 
                                    <a href="{{route('frontend.mercedes-event')}}">
                                    <p>@lang('front.show-more')</p>
                                    <img src="{{asset('front/images/arrow-right.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                </div>


                <div class="project">
                        <div class="project-image-4">
                            <img src="{{asset('front/images/proeqti4.jpg') }}" alt="">
                        </div>

                        <div class="project-info">
                            <div class="project-title">
                                <p>@lang('front.mersedes-business-week')</p>
                            </div>

                            <div class="project-text">
                                <p>@lang('front.mersedes-business-week-description')</p>
                            </div>
                            <div class="project-button">
                                <button> 
                                    <a href="{{route('frontend.week')}}">
                                    <p>@lang('front.show-more')</p>
                                    <img src="{{asset('front/images/arrow-right.png') }}" alt="">
                                    </a>
                                </button>   
                            </div>
                        </div>
                </div>


                <div class="project">
                         <div class="project-image-5">
                            <img src="{{asset('front/images/proeqti5.jpg') }}" alt="">
                        </div>

                        <div class="project-info">
                            <div class="project-title">
                                <p>@lang('front.distribution')</p>
                            </div>
                            <div class="project-text">
                                <p>@lang('front.distribution-description')</p>
                            </div>
                            
                            <div class="project-button">
                                <button> 
                                     <a href="{{route('frontend.distribution')}}">
                                    <p>@lang('front.show-more')</p>
                                    <img src="{{asset('front/images/arrow-right.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                </div>
            </div>



        </div>
    </div>
</div>









@endsection