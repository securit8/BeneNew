@extends('frontend/master')

@section('title', 'Fleet')
@section('content')


@endsection

@section('footer')
<!-- <div class="fleet-body">
<a href="/S-class">LEXUS</a>
<a href="/camry">camry</a>
<a href="/temsa">Temsa</a>
<a href="/tourismo">Tourismo</a>
<a href="/tesla">Tesla</a>
<a href="/e-class">E-class</a>
<a href="/viano">Viano</a>
<a href="/land">Land Cruiser</a>
<a href="/w222">W222</a>
</div> -->

<div class="car-fleet">
    <div class="car-fleet-middle">
        <div class="car-fleet-inner">

            <div class="car-fleet-title">
                <div class="car-fleet-title-middle">
                    <div class="car-fleet-title-inner">
                        <p>@lang('front.vehicles')</p>
                    </div>
                </div>
            </div>

            <div class="car-fleet-logos">
                <div class="car-fleet-logos-middle">
                    <div class="car-fleet-logos-inner">

                    </div>
                </div>
            </div>


<!--             
                <div class="car-rent-fleet-logos">
                    <div class="car-rent-fleet-logo-outer">
                    <div class="car-rent-fleet-logo-middle">
                        <div class="car-rent-fleet-logo-inner">
                        <div class="car-rent-logo-list-line">
                        <div class="Hyundai-logo">
                            <img src="{{asset('front/images/fleet-Logo1.png')}}">
                        </div>
                        <div class="Nissan-logo">
                            <img src="{{asset('front/images/fleet-logo2.png')}}">
                        </div>
                        <div class="Toyota-logo">
                            <img src="{{asset('front/images/fleet-logo3.png')}}">
                        </div>
                        <div class="Kia-logo">
                            <img src="{{asset('front/images/fleet-logo4.png')}}">
                        </div>
                        </div>
                        </div>
                    </div> -->



            <!-- <div class="car-fleet-type">
                <div class="car-fleet-type-middle">
                    <div class="car-fleet-type-inner">
                        
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
            </div> -->


<!-- 
            <div class="car-fleet-line">
                <hr>
            </div>

            <div class="car-fleet-class">
                <div class="car-fleet-class-middle">
                    <div class="car-fleet-class-inner">
                        <div class="car-fleet-class">
                            <p>All</p>
                        </div>
                    </div>
                </div>
            </div> -->
        

            <div class="car-fleet-line">
                <hr>
            </div>
            


            <div class="car-fleet-vehicles">
                <div class="car-fleet-vehicles-middle">
                    <div class="car-fleet-vehicles-inner">

                        <div class="fleet-element-1">
                            <div class="fleet-element-info">
                                
                                <div class="element-info-header">
                                    <p>MERCEDES-BENZ</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                </div>
                                
                                <div class="element-info-tags">
                                    <p>S class</p> 
                                    <p>Sedan</p>
                                    <p>2021</p>
                                </div>
                                
                                <div class="element-info-text">
                                    <p>წარმოგიდგენთ ჩვენი ავტოპარკის სრულიად ახალ ავტომობილს Mercedes-Benz S Class W223.<br>
                                        ახალ S Class მოდელს კიდევ უფრო კომფორტული, უსაფრთხო და მაღალი ტექნოლოგიის მახასიათებლები გააჩნია.<br>
                                        Bene Exclusive-ის მძღოლები საუბრობენ ინგლისურ და რუსულ ენებზე.<br><br>
                                        ჩვენთან მგზავრი და მისი ბარგიც დაზღვეულია.</p>
                                </div>
                                
                                <div class="element-info-button">
                                    <button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button>
                                </div>
                                
                            </div>

                            <div class="fleet-element-image">
                                <img src="{{asset('front/images/fleet1.png')}}" alt="">
                            </div>
                        </div>

                        <div class="fleet-element-2">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>MERCEDES-BENZ</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>S class</p> 
                                        <p>Sedan</p>
                                        <p>2021</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>წარმოგიდგენთ ჩვენი ავტოპარკის სრულიად ახალ ავტომობილს Mercedes-Benz S Class W223.<br>
                                            ახალ S Class მოდელს კიდევ უფრო კომფორტული, უსაფრთხო და მაღალი ტექნოლოგიის მახასიათებლები გააჩნია.<br>
                                            Bene Exclusive-ის მძღოლები საუბრობენ ინგლისურ და რუსულ ენებზე.<br><br>
                                            ჩვენთან მგზავრი და მისი ბარგიც დაზღვეულია.</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                        <button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-image">
                                    <img src="{{asset('front/images/fleet3.png')}}" alt="">
                                </div>
                            </div>

                        <div class="fleet-element-3">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>MERCEDES-BENZ</p> <img src="{{asset('front/images/fleet-logo3.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>S class</p> 
                                        <p>Sedan</p>
                                        <p>2021</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>წარმოგიდგენთ ჩვენი ავტოპარკის სრულიად ახალ ავტომობილს Mercedes-Benz S Class W223.<br>
                                            ახალ S Class მოდელს კიდევ უფრო კომფორტული, უსაფრთხო და მაღალი ტექნოლოგიის მახასიათებლები გააჩნია.<br>
                                            Bene Exclusive-ის მძღოლები საუბრობენ ინგლისურ და რუსულ ენებზე.<br><br>
                                            ჩვენთან მგზავრი და მისი ბარგიც დაზღვეულია.</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                        <button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-image">
                                    <img src="{{asset('front/images/fleet1.png')}}" alt="">
                                </div>
                        </div>


                        <!-- <div class="car-fleet-vehicles-row1">
                            <div class="car-fleet-vehicles-row1-middle">
                                <div class="car-fleet-vehicles-row1-inner">
                                    
                                
                                    <div class="car-fleet-row1-car1">
                                        <img src="{{asset('front/images/fleet-car-1.png')}}" alt="">
                                        <div class="rent-toyota-specs">  
                                            <div class="fleet-vehicle-type">
                                                <p>Economy</p>
                                            </div>
                                        <div class="car-fleet-name">
                                            <p>TOYOTA YRIS AUTOMATIC</p>
                                        </div>
                                        <div class="car-fleet-vehicle-type">
                                            <p>or Similar</p>
                                        </div>
                                        <div class="fleet-vehicle-specs">
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
                                    
                                    <div class="car-fleet-row1-car2">
                                        <img src="{{asset('front/images/fleet-car-2.png')}}" alt="">
                                        <div class="rent-kia-specs">
                                        <div class="fleet-vehicle-type">
                                                <p>Standard/intermediate</p>
                                            </div>
                                        <div class="car-fleet-name">
                                            <p>HYUNDAI SONATA AUTOMATIC</p>
                                        </div>
                                        <div class="car-fleet-vehicle-type">
                                            <p>Land Cruiser</p>
                                        </div>
                                        <div class="fleet-vehicle-specs">
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

                                    <div class="car-fleet-row1-car3">
                                        <img src="{{asset('front/images/fleet-car-3.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
                                        <div class="fleet-vehicle-type">
                                                <p>Economy</p>
                                            </div>
                                        <div class="car-fleet-name">
                                            <p>TOYOTA YRIS AUTOMATIC</p>
                                        </div>
                                        <div class="car-fleet-vehicle-type">
                                            <p>V-class</p>
                                        </div>
                                        <div class="fleet-vehicle-specs">
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
                        </div> -->

                        <!-- <div class="car-fleet-vehicles-row2 reveal">
                            <div class="car-fleet-vehicles-row2-middle">
                                <div class="car-fleet-vehicles-row2-inner">
                                    
                                
                                    <div class="car-fleet-row2-car1">
                                        <img src="{{asset('front/images/fleet-car-1.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
                                        <div class="fleet-vehicle-type">
                                                <p>Economy</p>
                                            </div>
                                        <div class="car-fleet-name">
                                            <p>TOYOTA YRIS AUTOMATIC</p>
                                        </div>
                                        <div class="car-fleet-vehicle-type">
                                            <p>Camry</p>
                                        </div>
                                        <div class="fleet-vehicle-specs">
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
                                    
                                    <div class="car-fleet-row2-car2">
                                        <img src="{{asset('front/images/fleet-car-2.png')}}" alt="">
                                        <div class="rent-toyota-specs">  
                                        <div class="fleet-vehicle-type">
                                                <p>Standard/intermediate</p>
                                            </div>
                                        <div class="car-fleet-name">
                                            <p>HYUNDAI SONATA AUTOMATIC</p>
                                        </div>
                                        <div class="car-fleet-vehicle-type">
                                            <p>Land Cruiser</p>
                                        </div>
                                        <div class="fleet-vehicle-specs">
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

                                    <div class="car-fleet-row2-car3">
                                        <img src="{{asset('front/images/fleet-car-3.png')}}" alt="">
                                        <div class="rent-kia-specs">
                                        <div class="fleet-vehicle-type">
                                                <p>Economy</p>
                                            </div>
                                        <div class="car-fleet-name">
                                            <p>TOYOTA YRIS AUTOMATIC</p>
                                        </div>
                                        <div class="car-fleet-vehicle-type">
                                            <p>V-class</p>
                                        </div>
                                        <div class="fleet-vehicle-specs">
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
                        </div> -->


                        <!-- <div class="car-fleet-vehicles-row3 reveal">
                            <div class="car-fleet-vehicles-row3-middle">
                                <div class="car-fleet-vehicles-row3-inner">
                                    
                                
                                    <div class="car-fleet-row3-car1">
                                        <img src="{{asset('front/images/fleet-car-1.png')}}" alt="">
                                        <div class="rent-kia-specs">
                                        <div class="fleet-vehicle-type">
                                                <p>Economy</p>
                                            </div>
                                        <div class="car-fleet-name">
                                            <p>TOYOTA YRIS AUTOMATIC</p>
                                        </div>
                                        <div class="car-fleet-vehicle-type">
                                            <p>Camry</p>
                                        </div>
                                        <div class="fleet-vehicle-specs">
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
                                    
                                    <div class="car-fleet-row3-car2">
                                        <img src="{{asset('front/images/fleet-car-2.png')}}" alt="">
                                        <div class="rent-huyndai-specs">
                                        <div class="fleet-vehicle-type">
                                                <p>Standard/intermediate</p>
                                            </div>
                                        <div class="car-fleet-name">
                                            <p>HYUNDAI SONATA AUTOMATIC</p>
                                        </div>
                                        <div class="car-fleet-vehicle-type">
                                            <p>Land Cruiser</p>
                                        </div>
                                        <div class="fleet-vehicle-specs">
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

                                    <div class="car-fleet-row3-car3">
                                        <img src="{{asset('front/images/fleet-car-3.png')}}" alt="">
                                        <div class="rent-toyota-specs"> 
                                        <div class="fleet-vehicle-type">
                                                <p>Economy</p>
                                            </div> 
                                        <div class="car-fleet-name">
                                            <p>TOYOTA YRIS AUTOMATIC</p>
                                        </div>
                                        <div class="car-fleet-vehicle-type">
                                            <p>V-class</p>
                                        </div>
                                        <div class="fleet-vehicle-specs">
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
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
window.addEventListener('scroll', Reveal);

function Reveal(){
let  reveal = document.querySelectorAll('.reveal');

for(var i = 0; i < reveal.length; i++){
  var windowheight = window.innerHeight;
  var revealtop = reveal[i].getBoundingClientRect().top;
  var revealpoint = 70;

  if(revealtop < windowheight - revealpoint){
    reveal[i].classList.add('active');
  }
  else{
    reveal[i].classList.remove('active');
  }
}
}


</script>
@endsection
