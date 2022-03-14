@extends('frontend/master')

@section('title', 'Moiare')
@section('content')


@endsection

@section('footer')


<div id="carouselExampleIndicators-events" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div class="spec-carousel-sliders">
      <button type="button" data-bs-target="#carouselExampleIndicators-events" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-events" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-events" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  </div>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('front/images/event-page-carousel.png')}}" class="w-100" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/event-page-carousel.png')}}" class="w-100" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/event-page-carousel.png')}}" class="w-100" alt="...">
    </div>

    


  </div>

    <div class="spec-carousel-buttons">
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators-events" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators-events" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  
</div>


<div class="moiare-outer">
    <div class="moiare-middle">
        <div class="moiare-inner">

            <div class="moiare-body-outer">
                <div class="moiare-body-inner">
                    <div class="moiare-body-info">
                        <div class="moiare-body-title">
                            <p>MERCEDES-BENZ BUSSINESS WEEK</p>
                        </div>

                        <div class="moiare-body-text">
                            <p>"Bene-Exclusive" is a company specializing in logistics working under the umbrella of <br>"Bene-Group".
                                 Initially, the services of our company were limited to premium class vehicles,<br> however today "Bene-Ecxlusive" represents a multi-profile company. 
                                Car renting as well as<br> orginizing of Business Projects and Events have been added to our list of services.<br>
                                "Bene-Exclusive" is a company specializing in logistics working under the umbrella of "Bene-Group". 
                                Initially, the services of our company were limited to premium class vehicles, however today "Bene-Ecxlusive" represents a multi-profile company.
                                 Car renting as well as orginizing of Business Projects and Events have been added to our list of services.</p>
                        </div>
                    </div>

                    <div class="moiare-body-image">
                        <img src="{{asset('front/images/proeqti4.jpg')}}" alt="">
                    </div>
                </div>
            </div>



            <div class="moiare-video-outer">
                <div class="moiare-video-inner">
                    <img src="{{asset('front/images/event-video-img.png')}}" alt="">
                </div>
            </div>




                            <div class="index-part-7">
                <div class="part-7-middle">
                    <div class="part-7-inner">
                        <div class="index-event-header"><p>EVENTS</p></div>

                    <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                        <div id="index-event-carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        </div>
                        <div class="carousel-inner">
                        <div class="index-event-carousel-inner">

                            <div class="carousel-item active">
                            <div class="index-event-carousel-item">
                                
                            <div class="event-1">
                                <div class="event-1-backrgound">
                                    <img src="{{asset('front/images/event-1-background.png') }}" class="" alt="...">
                                </div>

                                <div class="event-1-logo">
                                    <img src="{{asset('front/images/event-1-logo.png') }}" class="" alt="...">
                                </div>

                                </div>

                            <img src="{{asset('front/images/event-2.png') }}" class="d-block w-100" alt="...">   

                            <img src="{{asset('front/images/event-3.png') }}" class="d-block w-100" alt="...">

                            </div>
                            </div>

                            <div class="carousel-item">
                            <div class="index-event-carousel-item">
                                <div class="event-1">
                                <div class="event-1-backrgound">
                                    <img src="{{asset('front/images/event-1-background.png') }}" class="" alt="...">
                                </div>

                                <div class="event-1-logo">
                                    <img src="{{asset('front/images/event-1-logo.png') }}" class="" alt="...">
                                </div>

                                </div>
                            <img src="{{asset('front/images/event-2.png') }}" class="d-block w-100" alt="...">   

                            <img src="{{asset('front/images/event-3.png') }}" class="d-block w-100" alt="...">
                            </div>
                            </div>

                            <div class="carousel-item"> 
                                <div class="index-event-carousel-item">
                                <div class="event-1">
                                <div class="event-1-backrgound">
                                    <img src="{{asset('front/images/event-1-background.png') }}" class="" alt="...">
                                </div>

                                <div class="event-1-logo">
                                    <img src="{{asset('front/images/event-1-logo.png') }}" class="" alt="...">
                                </div>

                                </div>
                            <img src="{{asset('front/images/event-2.png') }}" class="d-block w-100" alt="...">   

                            <img src="{{asset('front/images/event-3.png') }}" class="d-block w-100" alt="...">
                            </div>
                            </div>

                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
                        <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
                        <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
                        <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
                        <span class="visually-hidden">Next</span>
                        </button>
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







@endsection