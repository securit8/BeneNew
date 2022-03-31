
@extends('frontend/master')

@section('title', 'Rav4')
@section('content')


@endsection

@section('footer')

<div class="vehicle-specifics-outer">
  <div class="vehicle-specifics-middle">
    <div class="vehicle-specifics-inner">


    <div id="carouselExampleIndicators-specs" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div class="spec-carousel-sliders">
      <button type="button" data-bs-target="#carouselExampleIndicators-specs" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-specs" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-specs" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-specs" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
  </div>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('front/images/prado/1.jpg')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/prado/2.jpg')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/prado/3.jpg')}}" class="" alt="...">
    </div>

    <div class="carousel-item">
      <img src="{{asset('front/images/prado/4.jpg')}}" class="" alt="...">
    </div>


  </div>

    <div class="spec-carousel-buttons">
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators-specs" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators-specs" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  
</div>



      <div class="vehicle-spec-body-outer">
        <div class="vehicle-spec-body-middle">
          <div class="vehicle-spec-body-inner">
            <div class="vehicle-spec-body-info">
              <div class="vehicle-spec-body-info-inner">

                <div class="vehicle-spec-body-text">
                  <div class="vehicle-spec-body-title">
                    <p>TOYOTA RAV4</p>
                    <img src="{{asset('front/images/fleet-logo3.png')}}" alt="">
                  </div>

                  <div class="vehicle-spec-body-tags">
                    <p>Rav4</p>
                    <p>SUV</p>
                    <p>2018</p>
                  </div>

                  <div class="vehicle-spec-body-info-text">
                    <p>@lang('front.fleet-car-13-inner')</p>
                    </div>
                  </div>

                  <div class="vehicle-spec-body-image">
                    <img src="{{asset('front/images/rav4/1.webp') }}" alt="">
                  </div>
                </div>



                <div class="spec-sheet-lines" id="spec-sheet">
                      <div class="sheet-line-1">

                        <p class="sheet-part-1">@lang('front.fleet-creator')</p> 
                        
                        <p class="sheet-part-2">Toyota</p>
                      </div>

                      <div class="sheet-line-2">

                        <p class="sheet-part-1">@lang('front.fleet-model')</p> 
                        
                        <p class="sheet-part-2">Rav4</p>
                      </div>

                      <div class="sheet-line-3">

                        <p class="sheet-part-1">@lang('front.fleet-color')</p> 
                        
                        <p class="sheet-part-2">@lang('front.fleet-black')</p>
                      </div>

                      <div class="sheet-line-4">

                        <p class="sheet-part-1">@lang('front.fleet-category')</p> 
                        
                        <p class="sheet-part-2">@lang('front.fleet-suv')</p>
                      </div>

                      <div class="sheet-line-5">

                        <p class="sheet-part-1">@lang('front.fleet-year')</p> 
                        
                        <p class="sheet-part-2">2018</p>
                      </div>

                      <div class="sheet-line-6">

                        <p class="sheet-part-1">@lang('front.fleet-engine')</p> 
                        
                        <p class="sheet-part-2">2.5 </p>
                      </div>

                      <div class="sheet-line-7">

                        <p class="sheet-part-1">@lang('front.fleet-fuel')</p> 
                        
                        <p class="sheet-part-2">@lang('front.fleet-benzin') </p>
                      </div>

                      <div class="sheet-line-8">

                        <p class="sheet-part-1">@lang('front.fleet-interior')</p> 
                        
                        <p class="sheet-part-2">@lang('front.fleet-cotton')</p>
                      </div>

                      <div class="sheet-line-9">

                        <p class="sheet-part-1">@lang('front.fleet-passanger')</p> 
                        
                        <p class="sheet-part-2">4</p>
                      </div>


                      <div class="sheet-line-10">

                        <p class="sheet-part-1">@lang('front.fleet-luggage')</p> 
                        
                        <p class="sheet-part-2">3/4 @lang('front.fleet-medium')</p>
                      </div>

                    </div>
                </div>

                


              </div>

          <div class="book-button">
            <button>
              <p>დაჯავშნე ახლავე</p>
              <img src="{{asset('front/images/arrow-right.png') }}" alt="">
            </button>
          </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>







@endsection















