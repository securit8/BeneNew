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
                        <h2>@lang('front.rent-title')</h2>
                    </div>
                </div>
            </div>

            <div class="car-rent-logos">
                <div class="car-rent-logos-middle">
                    <div class="car-rent-logos-inner">

                    </div>
                </div>
            </div>


            
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
                    </div>



            <div class="car-rent-type">
                <div class="car-rent-type-middle">
                    <div class="car-rent-type-inner">
                        
                    <div class="fleet-type-list">
                        <div class="all">
                            <p>All</p>
                        </div>
                        <div class="fleet-line">
                            <p>|</p>
                        </div>
                        <div class="suv">
                            <p>SUV</p>
                        </div>
                        <div class="fleet-line">
                        <p>|</p>
                        </div>
                        <div class="sedan">
                            <p>Sedan</p>
                        </div>
                        <div class="fleet-line">
                        <p>|</p>
                        </div>
                        <div class="minivan">
                            <p>Minivan</p>
                        </div>
                        <div class="fleet-line">
                        <p>|</p>
                        </div>
                        <div class="minibus">
                            <p>Minibus</p>
                        </div>
                        <div class="fleet-line">
                        <p>|</p>
                        </div>
                        <div class="bus">
                            <p>Bus</p>
                        </div>
                        <div class="fleet-line">
                        <p>|</p>
                        </div>
                        <div class="coupe">
                            <p>Coupe</p>
                        </div>
                        
                        </div>

                    </div>
                </div>
            </div>



            <div class="car-rent-line">
                <hr>
            </div>

            <div class="car-rent-class">
                <div class="car-rent-class-middle">
                    <div class="car-rent-class-inner">
                        <div class="car-rent-class">
                            <h4>All</h4>
                        </div>
                    </div>
                </div>
            </div>
        

            <div class="car-rent-line">
                <hr>
            </div>
            


            <div class="car-rent-vehicles">
                <div class="car-rent-vehicles-middle">
                    <div class="car-rent-vehicles-inner">


                        <div class="car-rent-vehicles-row1 reveal">
                            <div class="car-rent-vehicles-row1-middle">
                                <div class="car-rent-vehicles-row1-inner">
                                    
                                
                                    <div class="car-rent-row1-car1">
                                        <img src="{{asset('front/images/rent1.png')}}" alt="">
                                        <div class="rent-toyota-specs">  
                                        <div class="car-rent-name">
                                            <h5>TOYOTA</h5>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Corolla Automatic</p>
                                        </div>
                                        <div class="car-rent-vehicle-line">
                                            
                                        </div>

                                        </div>
                                        
                                    </div>
                                    
                                    <div class="car-rent-row1-car2">
                                        <img src="{{asset('front/images/rent2.png')}}" alt="">
                                        <div class="rent-kia-specs">
                                        <div class="car-rent-name">
                                            <h5>KIA</h5>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Sportage Automatic</p>
                                        </div>
                                        <div class="car-rent-vehicle-line">
                                            
                                        </div>
                                        
                                        </div>
                                        
                                    </div>

                                    <div class="car-rent-row1-car3">
                                        <img src="{{asset('front/images/rent3.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
                                        <div class="car-rent-name">
                                            <h5>HYUNDAI</h5>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Santa Fe Automatic</p>
                                        </div>
                                        <div class="car-rent-vehicle-line">
                                            
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
                                        <img src="{{asset('front/images/rent3.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
                                        <div class="car-rent-name">
                                            <h5>HYUNDAI</h5>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Santa Fe Automatic</p>
                                        </div>
                                        <div class="car-rent-vehicle-line">
                                            
                                        </div>

                                        </div>
                                    </div>
                                    
                                    <div class="car-rent-row2-car2">
                                        <img src="{{asset('front/images/rent1.png')}}" alt="">
                                        <div class="rent-toyota-specs">  
                                        <div class="car-rent-name">
                                            <h5>TOYOTA</h5>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Corolla Automatic</p>
                                        </div>
                                        <div class="car-rent-vehicle-line">
                                            
                                        </div>

                                        </div>
                                    </div>

                                    <div class="car-rent-row2-car3">
                                        <img src="{{asset('front/images/rent2.png')}}" alt="">
                                        <div class="rent-kia-specs">
                                        <div class="car-rent-name">
                                            <h5>KIA</h5>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Sportage Automatic</p>
                                        </div>
                                        <div class="car-rent-vehicle-line">
                                            
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
                                        <img src="{{asset('front/images/rent2.png')}}" alt="">
                                        <div class="rent-kia-specs">
                                        <div class="car-rent-name">
                                            <h5>KIA</h5>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Sportage Automatic</p>
                                        </div>
                                        <div class="car-rent-vehicle-line">
                                            
                                        </div>
                                        
                                        </div>
                                    </div>
                                    
                                    <div class="car-rent-row3-car2">
                                        <img src="{{asset('front/images/rent3.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
                                        <div class="car-rent-name">
                                            <h5>HYUNDAI</h5>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Santa Fe Automatic</p>
                                        </div>
                                        <div class="car-rent-vehicle-line">
                                            
                                        </div>

                                        </div>
                                    </div>

                                    <div class="car-rent-row3-car3">
                                        <img src="{{asset('front/images/rent1.png')}}" alt="">
                                        <div class="rent-toyota-specs">  
                                        <div class="car-rent-name">
                                            <h5>TOYOTA</h5>
                                        </div>
                                        <div class="car-rent-vehicle-type">
                                            <p>Corolla Automatic</p>
                                        </div>
                                        <div class="car-rent-vehicle-line">
                                            
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