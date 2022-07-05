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
                                    <p>MERCEDES-BENZ S-CLASS</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                </div>
                                
                                <div class="element-info-tags">
                                    <p>S class</p> 
                                    <p>Sedan</p>
                                    <p>2022</p>
                                </div>
                                
                                <div class="element-info-text">
                                    <p>@lang('front.fleet-car-1-outer')</p>
                                </div>
                                
                                <div class="element-info-button">
                                    <a href="{{route('frontend.S-class')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                </div>
                                
                            </div>

                            <div class="fleet-element-1-image">
                                <img src="{{asset('front/images/Mercedes-Benz-S-Class-W-223-2021.png')}}" alt="">
                            </div>

                            <div id="fleet-query" class="element-info-text">
                                    <p>@lang('front.fleet-car-1-outer')</p>
                                </div>
                                
                                <div id="fleet-query" class="element-info-button">
                                    <a href="{{route('frontend.S-class')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                </div>
                            
                        </div>

                        <div class="fleet-element-2 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>TOYOTA LAND CRUISER 300</p> <img src="{{asset('front/images/fleet-logo3.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>Land Cruiser</p> 
                                        <p>SUV</p>
                                        <p>2022</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>@lang('front.fleet-car-2-outer')</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                        <a href="{{route('frontend.land')}}"> <button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-2-image">
                                    <img src="{{asset('front/images/Toyota-Land-Cruiser-300-2021.png')}}" alt="">
                                </div>

                                    <div id="fleet-query" class="element-info-text">
                                        <p>@lang('front.fleet-car-2-outer')</p>
                                    </div>
                                    
                                    <div id="fleet-query" class="element-info-button">
                                        <a href="{{route('frontend.land')}}"> <button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>

                            </div>


                            <div class="fleet-element-8 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>MERCEDES-BENZ V CLASS</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>V-class</p> 
                                        <p>Minivan</p>
                                        <p>2020</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>@lang('front.fleet-car-8-outer')</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.v-class')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-8-image">
                                    <img src="{{asset('front/images/Mercedes-Benz-V-class-2019.png')}}" alt="">
                                </div>

                                    <div id="fleet-query" class="element-info-text">
                                        <p>@lang('front.fleet-car-8-outer')</p>
                                    </div>
                                    
                                    <div id="fleet-query" class="element-info-button">
                                    <a href="{{route('frontend.v-class')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                        </div>




                        <div class="fleet-element-3 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>MERCEDES-BENZ S-CLASS</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>S class</p> 
                                        <p>Sedan</p>
                                        <p>2019</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>@lang('front.fleet-car-3-outer')</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.S-class2019')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-3-image">
                                    <img src="{{asset('front/images/Mercedes-Benz-S-class-2016.png')}}" alt="">
                                </div>

                                    <div id="fleet-query" class="element-info-text">
                                        <p>@lang('front.fleet-car-3-outer')</p>
                                    </div>
                                    
                                    <div id="fleet-query" class="element-info-button">
                                    <a href="{{route('frontend.S-class2019')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                        </div>



                        <div class="fleet-element-4 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>MERCEDES-BENZ E-CLASS</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>E class</p> 
                                        <p>Sedan</p>
                                        <p>2018</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>@lang('front.fleet-car-4-outer')</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.e-class')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-4-image">
                                    <img src="{{asset('front/images/Mercedes-Benz-E-class-250-2018.png')}}" alt="">
                                </div>

                                    <div id="fleet-query" class="element-info-text">
                                        <p>@lang('front.fleet-car-4-outer')</p>
                                    </div>
                                    
                                    <div id="fleet-query" class="element-info-button">
                                    <a href="{{route('frontend.e-class')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                        </div>



                        <div class="fleet-element-5 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>TOYOTA CAMRY</p> <img src="{{asset('front/images/fleet-logo3.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>Camry</p> 
                                        <p>Sedan</p>
                                        <p>2019</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>@lang('front.fleet-car-5-outer')</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.camry')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-5-image">
                                    <img src="{{asset('front/images/Toyota-Camry-Sport-Edition-Hybrid-2019.png')}}" alt="">
                                </div>

                                    <div id="fleet-query" class="element-info-text">
                                        <p>@lang('front.fleet-car-5-outer')</p>
                                    </div>
                                    
                                    <div id="fleet-query" class="element-info-button">
                                    <a href="{{route('frontend.camry')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                        </div>



                        <div class="fleet-element-6 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>TESLA MODEL 3</p> <img src="{{asset('front/images/fleet-logo2.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>Model 3</p> 
                                        <p>Sedan</p>
                                        <p>2019</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>@lang('front.fleet-car-6-outer')</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.tesla')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-6-image">
                                    <img src="{{asset('front/images/TESLA-MODEL-3-2019.png')}}" alt="">
                                </div>

                                    <div id="fleet-query" class="element-info-text">
                                        <p>@lang('front.fleet-car-6-outer')</p>
                                    </div>
                                    
                                    <div id="fleet-query" class="element-info-button">
                                    <a href="{{route('frontend.tesla')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                        </div>



                        <div class="fleet-element-13 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>TOYOTA RAV4</p> <img src="{{asset('front/images/fleet-logo3.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>RAV4</p> 
                                        <p>SUV</p>
                                        <p>2018</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>@lang('front.fleet-car-13-outer')</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.rav4')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-13-image">
                                    <img src="{{asset('front/images/rav4/1.png')}}" alt="">
                                </div>

                                    <div id="fleet-query" class="element-info-text">
                                        <p>@lang('front.fleet-car-13-outer')</p>
                                    </div>
                                    
                                    <div id="fleet-query" class="element-info-button">
                                    <a href="{{route('frontend.rav4')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                        </div>


                        <div class="fleet-element-12 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>TOYOTA LAND CRUISER PRADO</p> <img src="{{asset('front/images/fleet-logo3.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>Land Cruiser</p> 
                                        <p>SUV</p>
                                        <p>2017</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>@lang('front.fleet-car-12-outer')</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.prado')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-12-image">
                                    <img src="{{asset('front/images/prado/Prado1.png')}}" alt="">
                                </div>

                                    <div id="fleet-query" class="element-info-text">
                                        <p>@lang('front.fleet-car-12-outer')</p>
                                    </div>
                                    
                                    <div id="fleet-query" class="element-info-button">
                                    <a href="{{route('frontend.prado')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                        </div>




                        <div class="fleet-element-7 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>TOYOTA LAND CRUISER 200</p> <img src="{{asset('front/images/fleet-logo3.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>Land-Cruiser</p> 
                                        <p>SUV</p>
                                        <p>2019</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>@lang('front.fleet-car-7-outer')</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.land200')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-7-image">
                                    <img src="{{asset('front/images/Toyota-Land-Cruiser-200-2018.png')}}" alt="">
                                </div>

                                    <div id="fleet-query" class="element-info-text">
                                        <p>@lang('front.fleet-car-7-outer')</p>
                                    </div>
                                    
                                    <div id="fleet-query" class="element-info-button">
                                    <a href="{{route('frontend.land200')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                        </div>





                        <div class="fleet-element-9 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>MERCEDES-BENZ SPRINTER</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>Sprinter</p> 
                                        <p>Minibus</p>
                                        <p>2019</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>@lang('front.fleet-car-9-outer')</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.sprinter')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-9-image">
                                    <img src="{{asset('front/images/Mercedes-Benz-Sprinter-515-CDI-2019.png')}}" alt="">
                                </div>

                                    <div id="fleet-query" class="element-info-text">
                                        <p>@lang('front.fleet-car-9-outer')</p>
                                    </div>
                                    
                                    <div id="fleet-query" class="element-info-button">
                                    <a href="{{route('frontend.sprinter')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                        </div>



                        <div class="fleet-element-11 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>TEMSA PRESTIJ</p> 
                                        <!-- <img src="{{asset('front/images/fleet-logo4.png')}}" alt=""> -->
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>Prestij</p> 
                                        <p>Bus</p>
                                        <p>2019</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>@lang('front.fleet-car-11-outer')</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.temsa')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-11-image">
                                    <img src="{{asset('front/images/Temsa-PRestij-SD-2019.png')}}" alt="">
                                </div>

                                    <div id="fleet-query" class="element-info-text">
                                        <p>@lang('front.fleet-car-11-outer')</p>
                                    </div>
                                    
                                    <div id="fleet-query" class="element-info-button">
                                    <a href="{{route('frontend.temsa')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                        </div>



                        <div class="fleet-element-10 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>MERCEDES-BENZ TOURISMO</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>Tourismo</p> 
                                        <p>Bus</p>
                                        <p>2019</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>@lang('front.fleet-car-10-outer')</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.tourismo')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-10-image">
                                    <img src="{{asset('front/images/Mercedes-Bens-Bus-Tourismo-2019.png')}}" alt="">
                                </div>

                                    <div id="fleet-query" class="element-info-text">
                                        <p>@lang('front.fleet-car-10-outer')</p>
                                    </div>
                                    
                                    <div id="fleet-query" class="element-info-button">
                                    <a href="{{route('frontend.tourismo')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                        </div>




                        <div class="fleet-element-14 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>TESLA MODEL Y</p> <img src="{{asset('front/images/fleet-logo2.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>MODEL Y</p> 
                                        <p>CROSSOVER</p>
                                        <p>2021</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>@lang('front.fleet-car-14-outer')</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.MODELY')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-5-image">
                                    <img src="{{asset('front/images/modely/modely.png')}}" alt="">
                                </div>

                                    <div id="fleet-query" class="element-info-text">
                                        <p>@lang('front.fleet-car-14-outer')</p>
                                    </div>
                                    
                                    <div id="fleet-query" class="element-info-button">
                                    <a href="{{route('frontend.camry')}}"><button><p>@lang('front.fully')</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                        </div>


                      

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
