@extends('frontend/master')

@section('title', 'Car Rent')
@section('content')


@endsection

@section('footer')
<div class="car-rent">
    <div class="car-rent-middle">
        <div class="car-rent-inner">

            <div class="car-rent-title">
                <div class="car-rent-title-middle">
                    <div class="car-rent-title-inner">
                        <p>@lang('front.rent-title')</p>
                    </div>
                </div>
            </div>

            <div class="car-rent-header-part-1">
                <div class="car-rent-header-art-1-middle">
                    <div class="car-rent-header-part-1-inner">
                        <div class="car-rent-header-info">

                            <div class="car-rent-header-text">
                                
                                <p>@lang('front.car-rent-text-1')</p>
                               <p> @lang('front.car-rent-text-2')</p>
                               
                               <p> @lang('front.car-rent-text-3')</p>

                            </div>

                     
                        
                        </div>

                        <div class="car-rent-header-video">
                        <embed src="https://www.youtube.com/embed/cPjy65ekYEQ?autoplay=1&mute=1" frameborder="0"></embed>
                        </div> 
                    </div>
                </div>
            </div>

            


            <div class="car-rent-vehicles">
                <div class="car-rent-vehicles-middle">
                    <div class="car-rent-vehicles-inner">
                            <div class="car-rent-vehicles-header">
                                <p>@lang('front.our-car-rent')</p>
                            </div>



                            <div id="carouselExampleIndicators-index-events" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <div class="taxi-carousel-sliders d-none">
            <button type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        </div>


        <div class="carousel-inner">


          <div class="carousel-item active mb-5">
          <div class="car-rent-row1-car1">
                                        <img src="{{asset('front/images/fleet-car-1.png')}}" alt="">
                                        <div class="rent-toyota-specs">  
                                            <div class="rent-vehicle-type">
                                                <p>Economy</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>TOYOTA YARIS AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>or Similar</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                            <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Hybrid</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>

                                        </div>
                                        
                                    </div>
          </div>


          <div class="carousel-item mb-5">
          <div class="car-rent-row1-car2">
                                        <img src="{{asset('front/images/fleet-car-2.png')}}" alt="">
                                        <div class="rent-kia-specs">
                                        <div class="rent-vehicle-type">
                                                <p>Standard/intermediate</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>TOYOTA COROLLA AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>or Simila</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                        <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Petrol</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>
                                        
                                        </div>
                                        
                                    </div>
          </div>

          <div class="carousel-item mb-5">
          <div class="car-rent-row1-car3">
                                        <img src="{{asset('front/images/fleet-car-3.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
                                        <div class="rent-vehicle-type">
                                                <p>Economy</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>HYUNDAI SONATA AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Or Similar</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                            <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Petrol</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>2 Large Suitcases</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>

                                        </div>
                                        
                                    </div>
          </div>


        </div>

          <div class="spec-carousel-buttons">
            <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide="prev">
              <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
              <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide="next">
              <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
              <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
        </div>



        <div id="carouselExampleIndicators-index-events" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <div class="taxi-carousel-sliders d-none">
            <button type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        </div>


        <div class="carousel-inner">
          <div class="carousel-item active mb-5">
          <div class="car-rent-row2-car1">
                                        <img src="{{asset('front/images/fleet-car-4.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
                                        <div class="rent-vehicle-type">
                                                <p>SUV</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>NISSAN KICKS</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Or Similar</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                        <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Petrol</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>2 Large Suitcases</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>

                                        </div>
                                    </div>
          </div>


          <div class="carousel-item mb-5">
          <div class="car-rent-row2-car2">
                                        <img src="{{asset('front/images/fleet-car-5.png')}}" alt="">
                                        <div class="rent-toyota-specs">  
                                        <div class="rent-vehicle-type">
                                                <p>SUV</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>KIA SPORTAGE AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Or Simiral</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                        <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>4 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Petrol</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>4 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>

                                        </div>
                                    </div>
          </div>


          <div class="carousel-item mb-5">
          <div class="car-rent-row2-car3">
                                        <img src="{{asset('front/images/fleet-car-6.png')}}" alt="">
                                        <div class="rent-kia-specs">
                                        <div class="rent-vehicle-type">
                                                <p>SUV</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>HYUNDAI SANTA FE AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Or Similar</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                        <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>4 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Petrol</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>4 Large Suitcases</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>
                                        
                                        </div>
                                    </div>
          </div>

      


        </div>

          <div class="spec-carousel-buttons">
            <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide="prev">
              <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
              <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide="next">
              <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
              <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
        </div>


                        <div class="car-rent-vehicles-row1">
                            <div class="car-rent-vehicles-row1-middle">
                                <div class="car-rent-vehicles-row1-inner">
                                    
                                
                                    <div class="car-rent-row1-car1">
                                        <img src="{{asset('front/images/fleet-car-1.png')}}" alt="">
                                        <div class="rent-toyota-specs">  
                                            <div class="rent-vehicle-type">
                                                <p>Economy</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>TOYOTA YARIS AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>or Similar</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                            <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Hybrid</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>

                                        </div>
                                        
                                    </div>
                                    
                                    <div class="car-rent-row1-car2">
                                        <img src="{{asset('front/images/fleet-car-2.png')}}" alt="">
                                        <div class="rent-kia-specs">
                                        <div class="rent-vehicle-type">
                                                <p>Standard/intermediate</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>TOYOTA COROLLA AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>or Simila</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                        <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Petrol</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>
                                        
                                        </div>
                                        
                                    </div>

                                    <div class="car-rent-row1-car3">
                                        <img src="{{asset('front/images/fleet-car-3.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
                                        <div class="rent-vehicle-type">
                                                <p>Economy</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>HYUNDAI SONATA AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Or Similar</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                            <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Petrol</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>2 Large Suitcases</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>

                                        </div>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="car-rent-vehicles-row2 reveal">
                            <div class="car-rent-vehicles-row2-middle">
                                <div class="car-rent-vehicles-row2-inner">
                                    
                                
                                    <div class="car-rent-row2-car1">
                                        <img src="{{asset('front/images/fleet-car-4.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
                                        <div class="rent-vehicle-type">
                                                <p>SUV</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>NISSAN KICKS</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Or Similar</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                        <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Petrol</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>2 Large Suitcases</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>

                                        </div>
                                    </div>
                                    
                                    <div class="car-rent-row2-car2">
                                        <img src="{{asset('front/images/fleet-car-5.png')}}" alt="">
                                        <div class="rent-toyota-specs">  
                                        <div class="rent-vehicle-type">
                                                <p>SUV</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>KIA SPORTAGE AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Or Simiral</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                        <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>4 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Petrol</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>4 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>

                                        </div>
                                    </div>

                                    <div class="car-rent-row2-car3">
                                        <img src="{{asset('front/images/fleet-car-6.png')}}" alt="">
                                        <div class="rent-kia-specs">
                                        <div class="rent-vehicle-type">
                                                <p>SUV</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>HYUNDAI SANTA FE AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Or Similar</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                        <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>4 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Petrol</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>4 Large Suitcases</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>
                                        
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="car-rent-vehicles-row3 reveal">
                            <div class="car-rent-vehicles-row3-middle">
                                <div class="car-rent-vehicles-row3-inner">
                                    
                                
                                    <div class="car-rent-row3-car1">
                                        <img src="{{asset('front/images/fleet-car-7.png')}}" alt="">
                                        <div class="rent-kia-specs">
                                        <div class="rent-vehicle-type">
                                                <p>SUV</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>TOYOTA PRADO AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Or Similar</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                        <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5+2 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>1 Small Suitcase</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Petrol</p>   
                                                </div>
                                                            
                                                <!-- <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>1 Large Suitcase</p>
                                                </div>
                                                  -->
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>
                                        
                                        </div>
                                    </div>
                                    
                                    <div class="car-rent-row3-car2">
                                        <img src="{{asset('front/images/fleet-car-8.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
                                        <div class="rent-vehicle-type">
                                                <p>Van/Minivan</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>TOYOTA PROACE AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Or Similar</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                        <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>8 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Petrol</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>

                                        </div>
                                    </div>
<!-- 
                                    <div class="car-rent-row3-car3">
                                        <img src="{{asset('front/images/fleet-car-1.png')}}" alt="">
                                        <div class="rent-toyota-specs"> 
                                        <div class="rent-vehicle-type">
                                                <p>Economy</p>
                                            </div> 
                                        <div class="car-rent-name">
                                            <p>TOYOTA YRIS AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>V-class</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                        <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <i class="fa-solid fa-user"></i><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase"></i><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-snowflake"></i><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gears"></i><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-gas-pump"></i><p>Hybrid</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-suitcase-rolling"></i><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <i class="fa-solid fa-car"></i><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>
                                        </div>
                                    </div> -->

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