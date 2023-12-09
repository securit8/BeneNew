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
              <!-- hello -->
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
          <embed src="https://www.youtube.com/embed/C2rW01H7lSY?autoplay=1&mute=1" frameborder="0"></embed>
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




<div class="about-news-part-2">
  <div class="about-news-part-2-middle">
    <div class="about-news-part-2-inner">
      <div class="about-news-header">
        <div class="about-news-header-title">
          <p>@lang('front.newsroom')</p>
        </div>

        <div class="news-see-all-button">
          <a href="https://www.facebook.com/beneexclusive/">
          <button>
            <p>@lang('front.show-more')</p>
            <img src="{{asset('front/images/blue-short-arrow.png') }}" alt="">
          </button>
          </a>
        </div>


      </div>

      
      <div id="carouselExampleIndicators-index-news" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <div class="taxi-carousel-sliders d-none">
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
        </div>


        <div class="carousel-inner">

          <div class="carousel-item active mb-5">
            <a href="https://www.facebook.com/beneexclusive/videos/1036966293837265">
              <img src="{{asset('front/images/article/5.jpg') }}" class="" alt="...">
            </a>
          </div>

          <div class="carousel-item mb-5">
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


      

      
      <div class="swiper mySwiper-news">
        <div class="swiper-wrapper">


        <div class="swiper-slide">
            <div class="index-news-article">
              <div class="index-news-image">
                <img src="{{asset('front/images/article/5.jpg') }}" alt="">
              </div>

              <div class="index-news-text">
                <div class="news-date">
                <p>7 @lang('front.april'), 2022</p>
                </div>

                <h6>@lang('front.news-article-1-header')</h6>

                <p>@lang('front.news-article-1-body')</p>


                <div class="index-read-more">
                  <a href="https://www.facebook.com/beneexclusive/videos/1036966293837265">
                  <h5>@lang('front.show-more')</h5></a>
                  <img src="{{asset('front/images/news-arrow.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/1.jpg') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>21 @lang('front.march'), 2022</p>
              </div>

              <h6>@lang('front.news-article-2-header') </h6>

                <p>
                @lang('front.news-article-2-body')
                </p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/967350223916930">
                  <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/4.jpg') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
                <p>7 @lang('front.march'), 2022</p>
              </div>

              <h6>@lang('front.news-article-3-header')</h6>

              <p>@lang('front.news-article-3-body') </p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/959071804744772/">
                  <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/2.jpg') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>24 @lang('front.february'), 2022</p>
              </div>

              <h6>@lang('front.news-article-4-header')</h6>

              <p>@lang('front.news-article-4-body')</p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/952419448743341/">
                <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>

        
     
        <div class="swiper-slide">
          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/3.jpg') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>14 @lang('front.january'), 2022</p>
              </div>

              <h6>@lang('front.news-article-5-header')</h6>

              <p>@lang('front.news-article-5-body')</p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/929407307711222/">
                <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>


      
       
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</div>




@endsection