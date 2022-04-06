@extends('frontend/master')

@section('title', 'Company')
@section('content')


@endsection

@section('footer')
<div class="home-page-header">
    <div class="home-page-header-middle">
        <div class="home-page-header-inner">
            <div class="home-page-header-title">
                <p>@lang('front.about-company')</p>
            </div>
        </div>
    </div>
</div>


<div class="home-part-1">
  <div class="home-part-1-middle">
    <div class="home-part-1-inner">
        <div class="home-about-us-info">
          

          <div class="home-about-us-title">
          
          </div>

          <div class="home-about-us-text">
            <p>
              @lang('front.about-us-text')
            </p>

          </div>

          
          
        </div>

        <div class="home-about-us-video">
          <embed src="https://www.youtube.com/embed/C2rW01H7lSY?autoplay=1&mute=1'" frameborder="0"></embed>
        </div>
    </div>
  </div>
</div>



<div class="about-page-part-2">
    <div class="about-page-part-2-middle">
        <div class="about-page-part-2-inner">
            <div class="about-page-events">

                <div class="about-page-events-picture">
                    <img src="{{asset('front/images/about-us-event-2.jpg') }}" alt="">
                </div>


                <div class="about-page-events-text">
                    <div class="about-page-company-name">
                        
                    </div>

                    <div class="about-page-events-title">
                       
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






    <!-- <div class="about-page-part-3-middle">
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
          <p>@lang('front.news')</p>
        </div>

        <div class="news-see-all-button">
          <button>
            <p>@lang('front.show-more')</p>
            <img src="{{asset('front/images/blue-short-arrow.png') }}" alt="">
          </button>
        </div>


      </div>

      
      <div id="carouselExampleIndicators-index-news" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <div class="taxi-carousel-sliders d-none">
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
        </div>


        <div class="carousel-inner">
          <div class="carousel-item active mb-5">
            <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/967350223916930">
              <img src="{{asset('front/images/article/2.jpg')}}" class="" alt="...">
            </a>
          </div>


          <div class="carousel-item mb-5">
            <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/952419448743341/">
             <img src="{{asset('front/images/article/1.jpg')}}" class="" alt="...">
            </a>
          </div>


          <div class="carousel-item mb-5">
            <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/929407307711222/">
              <img src="{{asset('front/images/article/3.jpg')}}" class="" alt="...">
            </a>
          </div>

          <div class="carousel-item mb-5">
            <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/959071804744772/">
              <img src="{{asset('front/images/article/4.jpg')}}" class="" alt="...">
            </a>
          </div>


        </div>

          <div class="spec-carousel-buttons">
        <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide="prev">
          <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
          <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide="next">
          <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
          <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
          <span class="visually-hidden">Next</span>
        </button>
        </div>
        
      </div>


      

      
        <div class="index-news-body">
          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/2.jpg') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>24 თებერვალი, 2022</p>
              </div>

              <h6>სოლიდარობა უკრაინელ მოქალაქეებს</h6>

              <p>ბენე ექსკლუზივი უკრაინის მოქალაქეებს თბილისის და ქუთაისის აეროპორტში უფასო ტრანსპორტირებას სთავაზობს.</p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/952419448743341/">
                <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>


          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/1.jpg') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>21 მარტი, 2022</p>
              </div>

              <h6>ნებისმიერ ამინდზე მოგრებული ავტოპარკი </h6>

                <p>
                ბენე ექსკლუზივის მაღალი გამავლობის ავტომობილებისთვის თოვლი და უამინდობა დაბრკოლებას არ წარმოადგენს.
                </p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/967350223916930">
                  <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>



          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/3.jpg') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>14 იანვარი, 2022</p>
              </div>

              <h6>ფარიკაობის მსოფლიო თასი 2022-ის პარტნიორი</h6>

              <p>ბენე ექსკლუზივმა ფარიკაობის მსოფლიო თასის 600-მდე მონაწილის ტრანსპორტირება უზრუნველყო.</p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/929407307711222/">
                <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>



          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/4.jpg') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
                <p>7 მარტი, 2022</p>
              </div>

              <h6>Summit talks - ის  პარტნიორი </h6>

              <p>Summit Talks -ის 100-მდე მონაწილის უსაფრთხო და კომფორტული ტრანსპორტირება ბენე ექსკლუზივმა უზრუნველყო. <br><br></p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/959071804744772/">
                  <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>




@endsection