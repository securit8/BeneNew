@extends('frontend/master')

@section('title', 'Events')
@section('content')


@endsection

@section('footer')

<div class="events-outer">
    <div class="events-middle">
        <div class="evenrs-inner">

        <div class="project">
                        <div class="project-image-2">
                        <a href="{{route('frontend.blacksea')}}">
                            <img src="{{asset('../front/assets/images/limperatrice.jpeg') }}" alt="">
                        </a>
                        </div>

                        <div class="project-info">
                            <div class="project-title">
                                <p>L'Impératrice </p>
                            </div>
                            <div class="project-text">
                                <p>@lang('front.tr-det')</p>
                            </div>
                            <div class="project-button">
                                <button> 
                                    <a href="{{route('frontend.blacksea')}}">
                                    <p>@lang('front.show-more')</p>
                                    <img src="{{asset('front/images/arrow-right.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                </div>

            <div class= "proeqtebi" >
                
                <div class="project">
                    <div class="project-image-1">
                    <a href="{{route('frontend.event-moiare')}}">
                        <img src="{{asset('front/images/proeqti1.jpg') }}" alt="">
                    </a>
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
                        <a href="{{route('frontend.networking')}}">
                            <img src="{{asset('front/images/proeqti2.jpg') }}" alt="">
                        </a>
                        </div>

                        <div class="project-info">
                            <div class="project-title">
                                <p>NETWORKING </p>
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
                        <a href="{{route('frontend.mercedes-event')}}">
                            <img src="{{asset('front/images/proeqti3.jpg') }}" alt="">
                        </a>
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
                        <a href="{{route('frontend.week')}}">
                            <img src="{{asset('front/images/proeqti4.jpg') }}" alt="">
                        </a>
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
                         <a href="{{route('frontend.distribution')}}">
                            <img src="{{asset('front/images/proeqti5.jpg') }}" alt="">
                        </a>
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


                    <div class="project">
                         <div class="project-image-5">
                         <a href="{{route('frontend.distribution')}}">
                            <img src="{{asset('front/images/uefa.jpg') }}" alt="">
                        </a>
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


                <div class="project">
                         <div class="project-image-5">
                         <a href="{{route('frontend.distribution')}}">
                            <img src="{{asset('front/images/bruno.png') }}" alt="">
                        </a>
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


                <div class="project">
                         <div class="project-image-5">
                         <a href="{{route('frontend.distribution')}}">
                            <img src="{{asset('front/images/black-sea.png') }}" alt="">
                        </a>
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