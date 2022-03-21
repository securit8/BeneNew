
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
      <img src="{{asset('front/images/spec-carousel-1.png')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/spec-carousel-1.png')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/spec-carousel-1.png')}}" class="" alt="...">
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
                    <p>MERCEDES-BENZ</p>
                    <img src="{{asset('front/images/fleet-logo4.png')}}" alt="">
                  </div>

                  <div class="vehicle-spec-body-tags">
                    <p>S-class</p>
                    <p>Sedan</p>
                    <p>2020-2021</p>
                  </div>

                  <div class="vehicle-spec-body-info-text">
                    <p>წარმოგიდგენთ ჩვენი ავტოპარკის სრულიად ახალ ავტომობილს Mercedes-Benz S Class W223.<br>
                      ახალ S Class მოდელს კიდევ უფრო კომფორტული, უსაფრთხო და მაღალი ტექნოლოგიის მახასიათებლები გააჩნია.<br>
                      Bene Exclusive-ის მძღოლები საუბრობენ ინგლისურ და რუსულ ენებზე.</p>
                    <p>ჩვენთან მგზავრი და მისი ბარგიც დაზღვეულია.</p>
                    </div>
                  </div>

                  <div class="vehicle-spec-body-image">
                    <img src="{{asset('front/images/Toyota-Land-Cruiser-300-2021.png') }}" alt="">
                  </div>
                </div>



                <div class="vehicle-spesific-specs" id="arrow-down">
                  <div class="vehicle-spesific-specs-info">

                    <div class="vehicle-spesific-specs-info-text">
                    <img src="{{asset('front/images/vehicle-icon.png')}}" alt="">
                    <p>ავტომობილის სრული მონაცემები</p>
                    </div>
                    
                      <div class="vehicle-spesific-specs-info-arrow" >
                        <img src="{{asset('front/images/arrow-down.png')}}" alt="">
                      </div>
                  </div>

                    <div class="spec-sheet-lines" id="spec-sheet">
                      <div class="sheet-line-1">

                        <p class="sheet-part-1">მწარმოებელი</p> 
                        
                        <p class="sheet-part-2">მერსედეს ბენც</p>
                      </div>

                      <div class="sheet-line-2">

                        <p class="sheet-part-1">კატეგორია</p> 
                        
                        <p class="sheet-part-2">სედანი</p>
                      </div>

                      <div class="sheet-line-3">

                        <p class="sheet-part-1">მგზავრების რაოდენობა</p> 
                        
                        <p class="sheet-part-2">5</p>
                      </div>

                      <div class="sheet-line-4">

                        <p class="sheet-part-1">ბარგის მოცულობა</p> 
                        
                        <p class="sheet-part-2">120 კგ</p>
                      </div>

                      <div class="sheet-line-5">

                        <p class="sheet-part-1">უსაფრთხოება</p> 
                        
                        <p class="sheet-part-2">კი</p>
                      </div>

                      <div class="sheet-line-6">

                        <p class="sheet-part-1">დაცულობა</p> 
                        
                        <p class="sheet-part-2">Mercedes-Benz (გერმანულად: [mɛɐ̯ˈtseːdəsˌbɛnts, -dɛs-]),[4][5] ან უბრალოდ Mercedes, —<br>
                           ავტომობილების გერმანული ბრენდი და – როგორც Mercedes-Benz AG– 2019 წლიდან <br>
                            Daimler AG-ის შვილობილი კომპანია. [1] Mercedes-Benz ცნობილია მდიდრული და <br>
                             კომერციული ავტომობილების წარმოებით.[შენიშვნა 2] </p>
                      </div>

                      <div class="sheet-line-7">

                        <p class="sheet-part-1">მულტიმედია</p> 
                        
                        <p class="sheet-part-2">ბლუთუზი, სათავო ო ფისი მდებარეობს შტუტგარტში, ბადენ-ვიურტემბერგი. Mercedes<br>
                          -Benz-ის ბრენდის პირველი ავტომობილი 1926 წელს იქნა წარმოებული. 2018 წელს<br> 
                          Mercedes-Benz პრემიუმ ავტომობილების უმსხვილესი გამყიდველი იყო. მან 2,31 მილიონი<br> 
                          სამგზავრო ავტომობილი გაყიდა.[6] </p>
                      </div>

                      <div class="sheet-line-8">

                        <p class="sheet-part-1">ინტერნეტი</p> 
                        
                        <p class="sheet-part-2">WI-FI</p>
                      </div>

                      <div class="sheet-line-9">

                        <p class="sheet-part-1">დამატებით</p> 
                        
                        <p class="sheet-part-2">წყალი</p>
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















