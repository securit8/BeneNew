@extends('frontend/master')

@section('title', 'Academy')
@section('content')


@endsection

@section('footer')

<div id="carouselExampleIndicators-taxi" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div class="taxi-carousel-sliders">
      <button type="button" data-bs-target="#carouselExampleIndicators-taxitaxi" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-taxitaxi" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-taxitaxi" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  </div>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('front/images/ფოტო-4.png')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/ფოტო-2.png')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/ფოტო-1.png')}}" class="" alt="...">
    </div>


  </div>

    <div class="spec-carousel-buttons">
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators-taxi" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators-taxi" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  
</div>


<div class="academy-page-header">
    <div class="academy-page-header-middle">
        <div class="academy-page-header-inner">
            <div class="academy-page-header-title">
                <p>@lang('front.index-academy')</p>
            </div>
        </div>
    </div>
</div>





<div class="academy-part-1">
    <div class="academy-part-1-middle">
        <div class="academy-part-1-inner">

            <div class="academy-page-info">

            <div class="academy-image-outer">
            <div class="academy-image">
              <embed src="https://www.youtube.com/embed/YymUYNEjgJ0?autoplay=1&mute=1" type="">

            </div>
          </div>


          <div class="academy-text-section">
              <div class="academy-title">
                 
              </div>

              <div class="academy-text">
                  <p>
                  @lang('front.academy-part-1')
                  </p>
              </div>
          </div>

            </div>
        </div>
    </div>
</div>

<div class="academy-part-2">
    <div class="academy-part-2-middle">
        <div class="academy-part-2-inner">

            <div class="academy-anything-else">


                <div class="academy-anything-else-info">
                    <div class="anything-else-title">
                        
                    </div>

                    <div class="anyghing-else-text">
                        <p>
                        @lang('front.academy-part-2')
                        </p>
                    </div>
                    
                </div>

                <div class="anything-else-image">
                    <img src="{{asset('front/images/ფოტო-3.png') }}" alt="">
                </div>
            </div>

        </div>
    </div>
</div>



<!-- <div class="academy-part-3">
    <div class="academy-part-3-middle">
        <div class="academy-part-3-inner">

            <div class="academy-anything-else-2">

                <div class="anything-else-2-image">
                    <img src="{{asset('front/images/academy-1.png') }}" alt="">
                </div>

                <div class="academy-anything-else-2-info">
                    <div class="anything-else-2-title">
                        <p>
                            ANYTHING ELSE
                        </p>
                    </div>

                    <div class="anyghing-else-2-text">
                        <p>
                        "Bene-Exclusive" is a company specializing in logistics working under the umbrella of "Bene-Group".
                         Initially, the services of our company were limited to premium class vehicles, however today "Bene-Ecxlusive" 
                         represents a multi-profile company. Car renting as well as orginizing of Business Projects and Events have been
                         added to our list of services. Exclusive" is a company specializing in logistics working under the
                         umbrella of "Bene-Group". Initially, the services of our company were limited to premium class vehicles,
                         however today "Bene-Ecxlusive" represents a multi-profile company. Car renting as well as orginizing of
                         Business Projects and Events have been added to our list of services.
                        </p>
                    </div>
                    
                </div>

            </div>

        </div>
    </div>
</div> -->



<div class="index-part-8">
  <div class="part-8-middle">
    <div class="part-8-inner">
      <div class="index-partners-header"><p>@lang('front.index-partners')</p></div>

      <div class="index-partners-logo">
        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/1.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/1.png') }}" alt=""></div>
        </div>
        
        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/2.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/2.png') }}" alt=""></div>
        </div>

        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/3.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/3.png') }}" alt=""></div>
        </div>

        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/4.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/4.png') }}" alt=""></div>
        </div>

        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/5.png') }}" alt=""></div>  
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/5.png') }}" alt=""></div>
        </div>

      </div>

      <div class="index-partners-logo">
        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/6.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/6.png') }}" alt=""></div>
        </div>
        
        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/7.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/7.png') }}" alt=""></div>
        </div>

        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/8.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/8.png') }}" alt=""></div>
        </div>

        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/9.png') }}" alt=""></div>
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/9.png') }}" alt=""></div>
        </div>

        <div class="logo-pocket">
          <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/10.png') }}" alt=""></div>  
          <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/10.png') }}" alt=""></div>
        </div>

      </div>

        <div class="index-partners-logo">
          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/11.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/11.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/12.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/12.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/13.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/13.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/14.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/14.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/15.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/15.png') }}" alt=""></div>
          </div>
      </div>


      <div class="index-partners-logo">
          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/16.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/16.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/17.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/17.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/18.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/18.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/19.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/19.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/20.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/20.png') }}" alt=""></div>
          </div>
      </div>


      <div class="index-partners-logo" id="logo-last-line">
          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/21.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/21.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/22.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/22.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/23.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/23.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/24.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/24.png') }}" alt=""></div>
          </div>

          <div class="logo-pocket">
            <div class="unhovered-partner-logo"><img src="{{asset('front/images/logo/დაჰოვერებამდე/25.png') }}" alt=""></div>        
            <div class="hover-partner-logo"><img src="{{asset('front/images/logo/hovering/25.png') }}" alt=""></div>
          </div>
      </div>

    </div>
  </div>
</div>


@endsection