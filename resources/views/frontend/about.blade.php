@extends('frontend/master')

@section('title', 'Company')
@section('content')


@endsection

@section('footer')
<div class="home-page-header">
    <div class="home-page-header-middle">
        <div class="home-page-header-inner">
            <div class="home-page-header-title">
                <p>ABOUT COMPANY</p>
            </div>
        </div>
    </div>
</div>


<div class="home-part-1">
  <div class="home-part-1-middle">
    <div class="home-part-1-inner">
        <div class="home-about-us-info">
          

          <div class="home-about-us-title">
            <p>BENE EXCLUSIVE</p>
          </div>

          <div class="home-about-us-text">
            <p>
              @lang('front.about-us-text')
            </p>

          </div>

          
          
        </div>

        <div class="home-about-us-video">
          <img src="{{asset('front/images/about-image-1.jpg')}}" alt="">
        </div>
    </div>
  </div>
</div>



<div class="about-page-part-2">
    <div class="about-page-part-2-middle">
        <div class="about-page-part-2-inner">
            <div class="about-page-events">

                <div class="about-page-events-picture">
                    <img src="{{asset('front/images/about-2.png') }}" alt="">
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
                         @lang('front.about-us-text-2')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- <div class="about-page-part-3">
    <div class="about-page-part-3-middle">
        <div class="about-page-part-3-inner">

            <div class="about-vehicle-renewals">


                <div class="about-vehicle-renewal-info">
                    <div class="about-vehicle-renewal-title">
                        <p>
                            VEHICLE RENEWALS
                        </p>
                    </div>

                    <div class="about-vehicle-renewal-text">
                        <p>
                        "Bene-Exclusive" is a company specializing in logistics working under the umbrella of "Bene-Group".
                          Initially, the services of our company were limited to premium class vehicles, however today "Bene-Ecxlusive"
                          represents a multi-profile company. Car renting as well as orginizing of Business Projects and Events have 
                          been added to our list of services. "Bene-Exclusive" is a company specializing in logistics working under the
                          umbrella of "Bene-Group". Initially, the services of our company were limited to premium class vehicles, however
                          today "Bene-Ecxlusive" represents a multi-profile company. Car renting as well as orginizing of Business Projects 
                          and Events have been added to our list of services.
                        </p>
                    </div>

                </div>


                <div class="about-vehicle-renewal-image">
                    <img src="{{asset('front/images/about-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="about-news-part-2">
  <div class="about-news-part-2-middle">
    <div class="about-news-part-2-inner">
      <div class="about-news-header">
        <div class="about-news-header-title">
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
</div>


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