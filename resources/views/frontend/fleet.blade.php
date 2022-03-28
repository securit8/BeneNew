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
                                    <p>2021</p>
                                </div>
                                
                                <div class="element-info-text">
                                    <p>@lang('front.fleet-car-1-outer')</p>
                                </div>
                                
                                <div class="element-info-button">
                                <a href="{{route('frontend.S-class')}}"><button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                </div>
                                
                            </div>

                            <div class="fleet-element-1-image">
                                <img src="{{asset('front/images/Mercedes-Benz-S-Class-W-223-2021.png')}}" alt="">
                            </div>
                            
                        </div>

                        <div class="fleet-element-2 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>Toyota Land Cruiser 300</p> <img src="{{asset('front/images/fleet-logo3.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>Land Cruiser</p> 
                                        <p>Sedan</p>
                                        <p>2021</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>ჩვენი ავტოპაკის ერთ-ერთი წევრი არის უახლესი Toyota Land Cruiser 300.
                                        ავტომობილი წარმოებულია 2022 წელს და წარმოადგენს Land Cruiser- ის მაღალი
                                        გამავლობის პრემიუმ კლასის ავტოსატრანსპორტო საშუალებას და წარმოდგენილია
                                        მაქსიმალური კომპლექტაციით.
                                        წინა მოდელთან შედარებით მას უფრო მეტად დახვეწილი დიზაინი, კომფორტული
                                        ინტერიერი და თანამედროვე დიზაინი გამოარჩევს.</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.land')}}"> <button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-2-image">
                                    <img src="{{asset('front/images/Toyota-Land-Cruiser-300-2021.png')}}" alt="">
                                </div>
                            </div>

                        <div class="fleet-element-3 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>MERCEDES-BENZ</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>S class</p> 
                                        <p>Sedan</p>
                                        <p>2016</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>ჩვენი ავტოპაკის კიდევ ერთი დახვეწილი მოდელი არის Mercedes-Benz S-Class W222
                                        ავტომობილი წარმოებულია 2019 წელს და წარმოადგენს S-Class-ის მე-6 თაობას.
                                        ავტომობილი ხასიათდება Mercedes-Benz-ის ერთ-ერთ საუკეთესო მოდელად, რომლის
                                        სრულყოფილება თითოეულ დეტალში იგრძნობა.</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.S-class2016')}}"><button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-3-image">
                                    <img src="{{asset('front/images/Mercedes-Benz-S-class-2016.png')}}" alt="">
                                </div>
                        </div>



                        <div class="fleet-element-4 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>MERCEDES-BENZ</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>E class</p> 
                                        <p>Sedan</p>
                                        <p>2018</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>წარმოგიდგენთ ჩვენი ავტოპარკის კიდევ ერთ დახვეწილ მოდელს - Mercedes-Benz E-Class W213
                                        ავტომობილი გამოშვებულია 2018 წელს და E-Class-ის მე-5 თაობას წარმოადგენს.
                                        ავტომობილი გამოირჩევა ელეგანტურობით, სალონის დახვეწილი დიზაინით და
                                        საშუალო გაბარიტებით. მისი ეს მახასიათებლები მომხმარებლების განსაკუთრებულ
                                        სიმპატიას იმსახურებს.</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.e-class')}}"><button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-4-image">
                                    <img src="{{asset('front/images/Mercedes-Benz-E-class-250-2018.png')}}" alt="">
                                </div>
                        </div>



                        <div class="fleet-element-5 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>TOYOTA CAMRY</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>Camry</p> 
                                        <p>Sedan</p>
                                        <p>2019</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>ჩვენი ავტოპარკის ჰიბირულ და ელექტო მანქანების რეიტინგში გამორჩეულ ადგილს
                                        Toyota Camry-ის მოდელი Sport Edition Hybrid-ი იკავებს.
                                        ეს დახვეწილი ჰიბრიდული სედანი წარმოებულია 2019 წელს და აღჭურვილია
                                        ულტრათანამედროვე მულტიმედია სისტემით და მაქსიმალური კომპლექტაციით.</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.camry')}}"><button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-5-image">
                                    <img src="{{asset('front/images/Toyota-Camry-Sport-Edition-Hybrid-2019.png')}}" alt="">
                                </div>
                        </div>



                        <div class="fleet-element-6 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>TESLA</p> <img src="{{asset('front/images/fleet-logo2.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>E class</p> 
                                        <p>Sedan</p>
                                        <p>2018</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>სედანის ტიპის ელექტრომობილი Tesla Model 3 ჩვენი ავტოპარკის ერთ-ერთი
                                        გამორჩეული და მოთხოვნადი მოდელია.
                                        Model 3 არის სრულად ელექტრო და სრული დამუხტვით 400 კილომეტრამდე მანძილს
                                        ფარავს.</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.tesla')}}"><button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-6-image">
                                    <img src="{{asset('front/images/TESLA-MODEL-3-2019.png')}}" alt="">
                                </div>
                        </div>



                        <div class="fleet-element-7 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>TOYOTA LAND CRUISER 200</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>E class</p> 
                                        <p>Sedan</p>
                                        <p>2018</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>ჩვენი ავტოპარკის ერთ-ერთი წევრია ლეგენდარული Toyota Land Cruiser 200
                                        ავტომობილი წარმოებულია 2019 წელს და ის Toyota- ს ფირმის ერთ-ერთ წარმატებულ,
                                        მაღალი გამავლობის ავტოსატრანსპორტო საშუალებას წარმოადგენს.
                                        ამ მოდელს თვალშისაცემი დიზაინი, გაუმჯობესებული ინტერიერი და გამავლობა მას
                                        შეუდარებელ 4X4 ავტომობილად აქცევს.</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.land200')}}"><button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-7-image">
                                    <img src="{{asset('front/images/Toyota-Land-Cruiser-200-2018.png')}}" alt="">
                                </div>
                        </div>




                        <div class="fleet-element-8 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>MERCEDES-BENZ V CLASS</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>E class</p> 
                                        <p>Sedan</p>
                                        <p>2018</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>ჩვენი ავტოპაკის ერთ-ერთი წევრი არის კომფორტული Mercedes-Benz V-Class
                                        V-Class არის ბიზნეს კლასის მინივენი, რომელშიც კომფორტულად თავსდება 5-6
                                        ადამიანი. შთაბეჭდილებას ახდენს ტექნოლოგიების თანამედროვე აჭღურვილობით და
                                        პრემიუმ კლასის დიზაინით.
                                        ავტომობილი იდეალურია დიდ მანძილზე გადასაადგილებლად, აქვს მოცულობითი
                                        ბარგის გადატანის საშუალება, გასაშლელი მაგიდა სამუშაოდ და სხვა კომფორტზე
                                        ორიენტირებული მახასიათებლები.</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.v-class')}}"><button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-8-image">
                                    <img src="{{asset('front/images/Mercedes-Benz-V-class-2019.png')}}" alt="">
                                </div>
                        </div>



                        <div class="fleet-element-9 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>MERCEDES-BENZ SPRINTER</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>E class</p> 
                                        <p>Sedan</p>
                                        <p>2018</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>ჩვენი ავტოპარკის წევრია მაღალი კლასის მიკროავტობუსი - Mercedes-Benz Sprinter 515
                                        Sprinter-ის უპირატესობა მდგომარეობს იმაში, რომ მძლავრი ძრავის მეშვეობით
                                        ავტომობილს აქვს მაღალი გამავლობის უნარი და შეუძლია საშუალო სირთულის
                                        გზებზე მანევრირება.
                                        სავარძლების ქარხნული კომპლექტაცია მგზავრს საშუალებას აძლევს მოთავსდეს
                                        კომფორტულად შორ მანძილზე მგზავრობისას და თან დაცული იყოს უსაფრთხოების
                                        მაქსიმალური მოთხოვნები.</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.sprinter')}}"><button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-9-image">
                                    <img src="{{asset('front/images/Mercedes-Benz-Sprinter-515-CDI-2019.png')}}" alt="">
                                </div>
                        </div>



                        <div class="fleet-element-10 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>MERCEDES-BENZ TOURISMO</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>E class</p> 
                                        <p>Bus</p>
                                        <p>2019</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>ჩვენი ავტოპარკის წევრია პრემიუმ კლასის ავტობუსი - Mercedes-Benz Bus Tourismo
                                        Tourismo ავტობუსების კლასში ყველაზე უსაფრთხო და დაცულ ავტობუსად მოიაზრება.
                                        ავტობუსი აერთიანებს მაღალი ხარისხის სტანდარტებს, მაქსიმალურ კომფორტს და
                                        მდიდრულ ინტერიერს.</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.tourismo')}}"><button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-10-image">
                                    <img src="{{asset('front/images/Mercedes-Bens-Bus-Tourismo-2019.png')}}" alt="">
                                </div>
                        </div>



                        <div class="fleet-element-11 reveal">
                            <div class="fleet-element-info">
                                    
                                    <div class="element-info-header">
                                        <p>TEMSA PRESTIJ</p> <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                                    </div>
                                    
                                    <div class="element-info-tags">
                                        <p>E class</p> 
                                        <p>Bus</p>
                                        <p>2018</p>
                                    </div>
                                    
                                    <div class="element-info-text">
                                        <p>წარმოგიდგენთ ჩვენი ავტოპარკის საშუალო ზომის ავტობუსს - Temsa Prestij SD
                                        ავტობუსი სპეციალურად შექმნილია მოკლე და საშუალო მანძილზე მგზავრობისთვის.
                                        კომფორტული სავარძლები და რიგებს შორის დიდი მანძილი მგზავრობას სასიამოვნოს
                                        და კომფორტულს ხდის.
                                        აუდიო სისტემის აღჭურვილობა განსაკუთრებულად კომფორტულია საექსკურსიო
                                        მოგზაურობისთვის.</p>
                                    </div>
                                    
                                    <div class="element-info-button">
                                    <a href="{{route('frontend.temsa')}}"><button><p>სრულად</p><img src="{{asset('front/images/arrow-right.png')}}" alt=""></button></a>
                                    </div>
                                    
                                </div>

                                <div class="fleet-element-11-image">
                                    <img src="{{asset('front/images/Temsa-PRestij-SD-2019.png')}}" alt="">
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


@endsection
