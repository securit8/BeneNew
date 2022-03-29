
@extends('frontend/master')

@section('title', 'Land Cruiser 300')
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
    </div>
  </div>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('front/images/300/1.jpg')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/300/2.jpg')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/300/3.jpg')}}" class="" alt="...">
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
                    <p>Toyota Land Cruiser 300</p>
                    <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                  </div>

                  <div class="vehicle-spec-body-tags">
                    <p>Land-Cruiser</p>
                    <p>SUV</p>
                    <p>2022</p>
                  </div>

                  <div class="vehicle-spec-body-info-text">
                    <p>@lang('front.fleet-car-2-inner')</p>
                    </div>
                  </div>

                  <div class="vehicle-spec-body-image">
                    <img src="{{asset('front/images/Toyota-Land-Cruiser-300-2021.png') }}" alt="">
                  </div>
                </div>



                <div class="vehicle-spesific-specs" id="arrow-down">
                  <div class="vehicle-spesific-specs-info">

                    <!-- <div class="vehicle-spesific-specs-info-text">
                    <img src="{{asset('front/images/vehicle-icon.png')}}" alt="">
                    <p>ავტომობილის სრული მონაცემები</p>
                    </div>
                    
                      <div class="vehicle-spesific-specs-info-arrow" >
                        <img src="{{asset('front/images/arrow-down.png')}}" alt="">
                      </div>
                  </div> -->

                  <div class="spec-sheet-lines" id="spec-sheet">
                      <div class="sheet-line-1">

                        <p class="sheet-part-1">მწარმოებელი</p> 
                        
                        <p class="sheet-part-2">Toyota</p>
                      </div>

                      <div class="sheet-line-2">

                        <p class="sheet-part-1">მოდელი</p> 
                        
                        <p class="sheet-part-2">Land Cruiser 300</p>
                      </div>

                      <div class="sheet-line-3">

                        <p class="sheet-part-1">ფერი</p> 
                        
                        <p class="sheet-part-2">შავი მეტალიკი</p>
                      </div>

                      <div class="sheet-line-4">

                        <p class="sheet-part-1">კატეგორია</p> 
                        
                        <p class="sheet-part-2">ქროსოვერი</p>
                      </div>

                      <div class="sheet-line-5">

                        <p class="sheet-part-1">გამოშვების წელი</p> 
                        
                        <p class="sheet-part-2">2022</p>
                      </div>

                      <div class="sheet-line-6">

                        <p class="sheet-part-1">ძრავის მოცულობა</p> 
                        
                        <p class="sheet-part-2">3.3 </p>
                      </div>

                      <div class="sheet-line-7">

                        <p class="sheet-part-1">საწვავის ტიპი</p> 
                        
                        <p class="sheet-part-2">ბენზინი </p>
                      </div>

                      <div class="sheet-line-8">

                        <p class="sheet-part-1">სალონის ტიპი</p> 
                        
                        <p class="sheet-part-2">ტყავი</p>
                      </div>

                      <div class="sheet-line-9">

                        <p class="sheet-part-1">მგზავრების რაოდენობა</p> 
                        
                        <p class="sheet-part-2">4</p>
                      </div>


                      <div class="sheet-line-10">

                        <p class="sheet-part-1">ბარგის მოცულობა</p> 
                        
                        <p class="sheet-part-2">3/4 მოზრდილი ჩემოდანი</p>
                      </div>

                    </div>
                </div>

                


              </div>

          <div class="book-button">
          <a href="{{route('frontend.contact')}}">
            <button>
              <p>დაჯავშნე ახლავე</p>
              <img src="{{asset('front/images/arrow-right.png') }}" alt="">
            </button>
            </a>
          </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>







@endsection















