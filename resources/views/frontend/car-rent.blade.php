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
                                <ul>
                                    <li>@lang('front.suv')</li>
                                    <li>@lang('front.sedan')</li>
                                    <li>@lang('front.minivan')</li>
                                </ul>
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
                                            <p>TOYOTA YRIS AUTOMATIC</p>
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
                                        <img src="{{asset('front/images/fleet-car-4.png')}}" alt="">
                                        <div class="rent-kia-specs">
                                        <div class="rent-vehicle-type">
                                                <p>SUV</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>NISSAN KICKS</p>
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

                                    <div class="car-rent-row1-car3">
                                        <img src="{{asset('front/images/fleet-car-7.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
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
                                        
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="car-rent-vehicles-row2 reveal">
                            <div class="car-rent-vehicles-row2-middle">
                                <div class="car-rent-vehicles-row2-inner">
                                    
                                
                                    <div class="car-rent-row2-car1">
                                        <img src="{{asset('front/images/fleet-car-2.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
                                        <div class="rent-vehicle-type">
                                                <p>Economy</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>TOYOTA YRIS AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Camry</p>
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
                                    
                                    <div class="car-rent-row2-car2">
                                        <img src="{{asset('front/images/fleet-car-5.png')}}" alt="">
                                        <div class="rent-toyota-specs">  
                                        <div class="rent-vehicle-type">
                                                <p>Standard/intermediate</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>HYUNDAI SONATA AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Land Cruiser</p>
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

                                    <div class="car-rent-row2-car3">
                                        <img src="{{asset('front/images/fleet-car-8.png')}}" alt="">
                                        <div class="rent-kia-specs">
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
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="car-rent-vehicles-row3 reveal">
                            <div class="car-rent-vehicles-row3-middle">
                                <div class="car-rent-vehicles-row3-inner">
                                    
                                
                                    <div class="car-rent-row3-car1">
                                        <img src="{{asset('front/images/fleet-car-3.png')}}" alt="">
                                        <div class="rent-kia-specs">
                                        <div class="rent-vehicle-type">
                                                <p>Economy</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>TOYOTA YRIS AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Camry</p>
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
                                    
                                    <div class="car-rent-row3-car2">
                                        <img src="{{asset('front/images/fleet-car-6.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
                                        <div class="rent-vehicle-type">
                                                <p>Standard/intermediate</p>
                                            </div>
                                        <div class="car-rent-name">
                                            <p>HYUNDAI SONATA AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Land Cruiser</p>
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