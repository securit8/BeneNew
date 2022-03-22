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

            <!-- <div class="car-rent-logos">
                <div class="car-rent-logos-middle">
                    <div class="car-rent-logos-inner">

                    </div>
                </div>
            </div> -->


<!--             
                <div class="car-rent-fleet-logos">
                    <div class="car-rent-fleet-logo-outer">
                    <div class="car-rent-fleet-logo-middle">
                        <div class="car-rent-fleet-logo-inner">
                        <div class="car-rent-logo-list-line">
                        <div class="Hyundai-logo">
                            <img src="{{asset('front/images/Hyundai-Logo.png')}}">
                        </div>
                        <div class="Nissan-logo">
                            <img src="{{asset('front/images/Nissan_logo.png')}}">
                        </div>
                        <div class="Toyota-logo">
                            <img src="{{asset('front/images/fleet-logo3.png')}}">
                        </div>
                        <div class="Kia-logo">
                            <img src="{{asset('front/images/kia-logo.png')}}">
                        </div>
                        </div>
                        </div>
                    </div> -->


<!-- 
            <div class="car-rent-type">
                <div class="car-rent-type-middle">
                    <div class="car-rent-type-inner">
                        
                    <div class="rent-type-list">
                        <div class="rent-all">
                            <p>All</p>
                        </div>

                        <div class="rent-line">
                            <p>|</p>
                        </div>

                        <div class="rent-suv">
                            <p>SUV</p>
                        </div>
                        
                        <div class="rent-line">
                        <p>|</p>
                        </div>
                        
                        <div class="rent-sedan">
                            <p>Sedan</p>
                        </div>
                        
                        <div class="rent-line">
                        <p>|</p>
                        </div>
                        
                        <div class="rent-minivan">
                            <p>Minivan</p>
                        </div>
                        
                        <div class="rent-line">
                        <p>|</p>
                        </div>
                        
                        <div class="rent-minibus">
                            <p>Minibus</p>
                        </div>
                        <div class="rent-line">
                        <p>|</p>
                        </div>
                        
                        <div class="rent-bus">
                            <p>Bus</p>
                        </div>
                        <div class="rent-line">
                        <p>|</p>
                        </div>
                        <div class="rent-coupe">
                            <p>Coupe</p>
                        </div>
                        
                        </div>

                    </div>
                </div>
            </div> -->



            <!-- <div class="car-rent-line">
                <hr>
            </div>

            <div class="car-rent-class">
                <div class="car-rent-class-middle">
                    <div class="car-rent-class-inner">
                        <div class="car-rent-class">
                            <p>All</p>
                        </div>
                    </div>
                </div>
            </div>
         -->

            <div class="car-rent-line">
                <hr>
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
                                                <img src="{{asset('front/images/spec-icon1.png')}}" alt=""><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon7.png')}}" alt=""><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon6.png')}}" alt=""><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon5.png')}}" alt=""><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon4.png')}}" alt=""><p>Hybrid</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon3.png')}}" alt=""><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon2.png')}}" alt=""><p>4-5 Doors</p>
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
                                            <p>HYUNDAI SONATA AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Land Cruiser</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                            <div class="vehicle-specs-line-1">
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon1.png')}}" alt=""><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon7.png')}}" alt=""><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon6.png')}}" alt=""><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon5.png')}}" alt=""><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon4.png')}}" alt=""><p>Hybrid</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon3.png')}}" alt=""><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon2.png')}}" alt=""><p>4-5 Doors</p>
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
                                            <p>TOYOTA YRIS AUTOMATIC</p>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>V-class</p>
                                        </div>
                                        <div class="rent-vehicle-specs">
                                            <div class="vehicle-specs-line-1">
                                            <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon1.png')}}" alt=""><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon7.png')}}" alt=""><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon6.png')}}" alt=""><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon5.png')}}" alt=""><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon4.png')}}" alt=""><p>Hybrid</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon3.png')}}" alt=""><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon2.png')}}" alt=""><p>4-5 Doors</p>
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
                                        <img src="{{asset('front/images/fleet-car-1.png')}}" alt="">
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
                                                <img src="{{asset('front/images/spec-icon1.png')}}" alt=""><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon7.png')}}" alt=""><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon6.png')}}" alt=""><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon5.png')}}" alt=""><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon4.png')}}" alt=""><p>Hybrid</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon3.png')}}" alt=""><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon2.png')}}" alt=""><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>

                                        </div>
                                    </div>
                                    
                                    <div class="car-rent-row2-car2">
                                        <img src="{{asset('front/images/fleet-car-2.png')}}" alt="">
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
                                                <img src="{{asset('front/images/spec-icon1.png')}}" alt=""><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon7.png')}}" alt=""><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon6.png')}}" alt=""><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon5.png')}}" alt=""><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon4.png')}}" alt=""><p>Hybrid</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon3.png')}}" alt=""><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon2.png')}}" alt=""><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>

                                        </div>
                                    </div>

                                    <div class="car-rent-row2-car3">
                                        <img src="{{asset('front/images/fleet-car-3.png')}}" alt="">
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
                                                <img src="{{asset('front/images/spec-icon1.png')}}" alt=""><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon7.png')}}" alt=""><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon6.png')}}" alt=""><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon5.png')}}" alt=""><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon4.png')}}" alt=""><p>Hybrid</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon3.png')}}" alt=""><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon2.png')}}" alt=""><p>4-5 Doors</p>
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
                                        <img src="{{asset('front/images/fleet-car-1.png')}}" alt="">
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
                                                <img src="{{asset('front/images/spec-icon1.png')}}" alt=""><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon7.png')}}" alt=""><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon6.png')}}" alt=""><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon5.png')}}" alt=""><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon4.png')}}" alt=""><p>Hybrid</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon3.png')}}" alt=""><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon2.png')}}" alt=""><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>
                                        
                                        </div>
                                    </div>
                                    
                                    <div class="car-rent-row3-car2">
                                        <img src="{{asset('front/images/fleet-car-2.png')}}" alt="">
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
                                                <img src="{{asset('front/images/spec-icon1.png')}}" alt=""><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon7.png')}}" alt=""><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon6.png')}}" alt=""><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon5.png')}}" alt=""><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon4.png')}}" alt=""><p>Hybrid</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon3.png')}}" alt=""><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon2.png')}}" alt=""><p>4-5 Doors</p>
                                                </div>
                                                 
                                            </div>
                                        </div>

                                        </div>
                                    </div>

                                    <div class="car-rent-row3-car3">
                                        <img src="{{asset('front/images/fleet-car-3.png')}}" alt="">
                                        <div class="rent-toyota-specs"> 
                                        <div class="fleet-vehicle-type">
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
                                                <img src="{{asset('front/images/spec-icon1.png')}}" alt=""><p>5 seats</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon7.png')}}" alt=""><p>2 Small Suitcases</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon6.png')}}" alt=""><p>Air Conditioning</p>
                                                </div>

                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon5.png')}}" alt=""><p>Automatic Transmission</p>
                                                </div>
                                            </div>

                                            <div class="vehicle-specs-line-2">
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon4.png')}}" alt=""><p>Hybrid</p>   
                                                </div>
                                                            
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon3.png')}}" alt=""><p>1 Large Suitcase</p>
                                                </div>
                                                 
                                                <div class="car-spec-line">
                                                <img src="{{asset('front/images/spec-icon2.png')}}" alt=""><p>4-5 Doors</p>
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