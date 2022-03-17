@extends('frontend/master')

@section('title', 'Academy')
@section('content')


@endsection

@section('footer')
<div class="academy-page-header">
    <div class="academy-page-header-middle">
        <div class="academy-page-header-inner">
            <div class="academy-page-header-title">
                <p>@lang('front.index-academy')</p>
            </div>
        </div>
    </div>
</div>



<div id="carouselExampleIndicators-taxi" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div class="taxi-carousel-sliders">
      <button type="button" data-bs-target="#carouselExampleIndicators-taxitaxi" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-taxitaxi" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-taxitaxi" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  </div>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('front/images/academy-slider-1.jpg')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/academy-slider-2.jpg')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/academy-slider-3.jpg')}}" class="" alt="...">
    </div>


  </div>

    <div class="spec-carousel-buttons">
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators-taxi" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators-taxi" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  
</div>

<div class="academy-part-1">
    <div class="academy-part-1-middle">
        <div class="academy-part-1-inner">

            <div class="academy-page-info">

            <div class="academy-image-outer">
            <div class="academy-image">
              <embed src="https://www.youtube.com/embed/YymUYNEjgJ0autoplay=1&mute=1" type="">

            </div>
          </div>


          <div class="academy-text-section">
              <div class="academy-title">
                 
              </div>

              <div class="academy-text">
                  <p>
                  @lang('front.academy-part-1')
                  </p>
              </div>
          </div>

            </div>
        </div>
    </div>
</div>

<div class="academy-part-2">
    <div class="academy-part-2-middle">
        <div class="academy-part-2-inner">

            <div class="academy-anything-else">


                <div class="academy-anything-else-info">
                    <div class="anything-else-title">
                        
                    </div>

                    <div class="anyghing-else-text">
                        <p>
                        @lang('front.academy-part-2')
                        </p>
                    </div>
                    
                </div>

                <div class="anything-else-image">
                    <img src="{{asset('front/images/academy-page-text-image.jpg') }}" alt="">
                </div>
            </div>

        </div>
    </div>
</div>



<!-- <div class="academy-part-3">
    <div class="academy-part-3-middle">
        <div class="academy-part-3-inner">

            <div class="academy-anything-else-2">

                <div class="anything-else-2-image">
                    <img src="{{asset('front/images/academy-1.png') }}" alt="">
                </div>

                <div class="academy-anything-else-2-info">
                    <div class="anything-else-2-title">
                        <p>
                            ANYTHING ELSE
                        </p>
                    </div>

                    <div class="anyghing-else-2-text">
                        <p>
                        "Bene-Exclusive" is a company specializing in logistics working under the umbrella of "Bene-Group".
                         Initially, the services of our company were limited to premium class vehicles, however today "Bene-Ecxlusive" 
                         represents a multi-profile company. Car renting as well as orginizing of Business Projects and Events have been
                         added to our list of services. Exclusive" is a company specializing in logistics working under the
                         umbrella of "Bene-Group". Initially, the services of our company were limited to premium class vehicles,
                         however today "Bene-Ecxlusive" represents a multi-profile company. Car renting as well as orginizing of
                         Business Projects and Events have been added to our list of services.
                        </p>
                    </div>
                    
                </div>

            </div>

        </div>
    </div>
</div> -->



<div class="index-part-8">
  <div class="part-8-middle">
    <div class="part-8-inner">
      <div class="index-partners-header"><p>PARTNERS</p></div>

      <div class="index-partners-logo">
        <div><img src="{{asset('front/images/partners-logo-2.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-1.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-2.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-1.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-2.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-1.png') }}" alt=""></div>
      </div>
    </div>
  </div>
</div>


@endsection