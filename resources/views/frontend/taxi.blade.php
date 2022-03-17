@extends('frontend/master')

@section('title', 'Taxi')
@section('content')


@endsection

@section('footer')

@extends('frontend/master')

@section('title', 'Company')
@section('content')


@endsection

@section('footer')
<div class="taxi-page-header">
    <div class="taxi-page-header-middle">
        <div class="taxi-page-header-inner">
            <div class="taxi-page-header-title">
                <p>@lang('front.front-taxi')</p>
            </div>
        </div>
    </div>
</div>




<div id="carouselExampleIndicators-taxi" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div class="taxi-carousel-sliders">
      <button type="button" data-bs-target="#carouselExampleIndicators-taxitaxi" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-taxitaxi" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-taxitaxi" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators-taxitaxi" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
  </div>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('front/images/viber-image-taxi-page-2.jpg')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/taxi-carousel-image-2.jpg')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
      <img src="{{asset('front/images/taxi-carousel-image-3.jpg')}}" class="" alt="...">
    </div>


    <div class="carousel-item">
        <img src="{{asset('front/images/taxi-carousel-image-4.jpg')}}" alt="">
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


<div class="taxi-part-1">
  <div class="taxi-part-1-middle">
    <div class="taxi-part-1-inner">
        <div class="taxi-about-us-info">
          

          <div class="taxi-about-us-title">
            <p>BENE EXCLUSIVE</p>
          </div>

          <div class="taxi-about-us-text">
            <p>
              @lang('front.taxi-page-text-1')
            </p>

          </div>

          
          
        </div>

        <div class="taxi-about-us-video">
          <img src="{{asset('front/images/viber-image-taxi-page-1.jpg')}}" alt="">
        </div>
    </div>
  </div>
</div>



<!-- <div class="about-page-part-2">
    <div class="about-page-part-2-middle">
        <div class="about-page-part-2-inner">
            <div class="about-page-events">

                <div class="about-page-events-picture">
                    <img src="{{asset('front/images/viber-image-taxi-page-2.jpg') }}" alt="">
                </div>


                <div class="about-page-events-text">
                    <div class="about-page-company-name">
                        <p>
                            BENE EXCLUSIVE
                        </p>
                    </div>

                    <div class="about-page-events-title">
                        <p>
                            EVENTS
                        </p>
                    </div>

                    <div class="about-page-events-info">
                        <p>
                         @lang('front.taxi-page-text-2')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->







<!-- <div class="taxi-news-part-2">
  <div class="taxi-news-part-2-middle">
    <div class="taxi-news-part-2-inner">
      <div class="about-news-header">
        <div class="taxi-news-header-title">
          <p>NEWSROOM</p>
        </div>

        <div class="news-see-all-button">
          <button>
            <p>See all</p>
            <img src="{{asset('front/images/blue-short-arrow.png') }}" alt="">
          </button>
        </div>


      </div>

      
      <div class="about-news-body">
          <div class="about-news-body-article">
            <div class="about-news-image">
              <img src="{{asset('front/images/news-1.png') }}" alt="">
            </div>

            <div class="about-news-text">
              <div class="news-date">
              <p>February 4, 2022</p>
              </div>

              <h6>BENE EXCLUSIVE ფარიკაობის მსოფლიო ჩემპიონატის...</h6>

              <p>2022 წლის პირველი მასშტაბური საერთაშორისო ტურნირი ფარიკაობაში საქართველოში ტარდება. მსოფლიო თასის გათამაშება თბილისის ოლიმპიურ სასახლეში 14-17 იანვარს გაიმართება...</p>


              <div class="about-read-more">
                <h5>Read more</h5>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>


          <div class="about-news-body-article">
            <div class="about-news-image">
              <img src="{{asset('front/images/news-2.png') }}" alt="">
            </div>

            <div class="about-news-text">
              <div class="news-date">
              <p>February 4, 2022</p>
              </div>

              <h6>BENE EXCLUSIVE ფარიკაობის მსოფლიო ჩემპიონატის...</h6>

              <p>2022 წლის პირველი მასშტაბური საერთაშორისო ტურნირი ფარიკაობაში საქართველოში ტარდება. მსოფლიო თასის გათამაშება თბილისის ოლიმპიურ სასახლეში 14-17 იანვარს გაიმართება...</p>


              <div class="about-read-more">
                <h5>Read more</h5>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>



          <div class="about-news-body-article">
            <div class="about-news-image">
              <img src="{{asset('front/images/news-3.png') }}" alt="">
            </div>

            <div class="about-news-text">
              <div class="news-date">
              <p>February 4, 2022</p>
              </div>

              <h6>BENE EXCLUSIVE ფარიკაობის მსოფლიო ჩემპიონატის...</h6>

              <p>2022 წლის პირველი მასშტაბური საერთაშორისო ტურნირი ფარიკაობაში საქართველოში ტარდება. მსოფლიო თასის გათამაშება თბილისის ოლიმპიურ სასახლეში 14-17 იანვარს გაიმართება...</p>


              <div class="about-read-more">
                <h5>Read more</h5>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>



          <div class="about-news-body-article">
            <div class="about-news-image">
              <img src="{{asset('front/images/news-4.png') }}" alt="">
            </div>

            <div class="about-news-text">
              <div class="news-date">
              <p>February 4, 2022</p>
              </div>

              <h6>BENE EXCLUSIVE ფარიკაობის მსოფლიო ჩემპიონატის...</h6>

              <p>2022 წლის პირველი მასშტაბური საერთაშორისო ტურნირი ფარიკაობაში საქართველოში ტარდება. მსოფლიო თასის გათამაშება თბილისის ოლიმპიურ სასახლეში 14-17 იანვარს გაიმართება...</p>


              <div class="about-read-more">
                <h5>Read more</h5>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>



      </div>
    </div>
  </div>
</div> -->


<div class="index-part-8">
  <div class="part-8-middle">
    <div class="part-8-inner">
      <div class="index-partners-header"><p>PARTNERS</p></div>

      <div class="index-partners-logo">
        <div><img src="{{asset('front/images/partners-logo-2.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-1.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-2.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-1.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-2.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-1.png') }}" alt=""></div>
      </div>
    </div>
  </div>
</div>

@endsection





@endsection