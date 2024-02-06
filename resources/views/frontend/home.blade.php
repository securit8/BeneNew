@extends('frontend/master')
@section('title', 'Bene-exclusive')
@section('header')
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
<!-- <style>
.imglim{
  background: url("/front/images/popuplimp.jpg");
 
}
</style> -->
@endsection








@section('footer')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div id="index-part1-carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselEcampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="index-part1-carousel-inner">

        <div class="carousel-part1-backgound">
          <img src="{{asset('front/images/5.jpg') }}" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-part1-shader">
          <img src="{{asset('front/images/index-part1-backround.png') }}" alt="">
        </div>
      
        <div class="index-slogan">
           <div class="who-we-are"><p>@lang('front.carousel-fleet')</p></div>
          <div class="slogan-button">
          <button>
            <a href="{{route('frontend.fleet')}}">
            <p>@lang('front.show-more')</p>
            <img src="{{asset('front/images/arrow-right.png') }}" alt="">
            </a>
          </button>
        </div>

      </div>
    </div>
  </div>

    

    <div class="carousel-item">
    <div class="index-part1-carousel-inner">

        <div class="carousel-part1-backgound">
      <img src="{{asset('front/images/1.jpg') }}" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-part1-shader">
      <img src="{{asset('front/images/index-part1-backround.png') }}" alt="">
      </div>
      
      <div class="index-slogan">
         <div class="who-we-are"><p>@lang('front.carousel-academy')</p></div>
        <div class="slogan-button">
          <button>
            <a href="{{route('frontend.academy')}}">
            <p>@lang('front.show-more')</p>
            <img src="{{asset('front/images/arrow-right.png') }}" alt="">
            </a>
        </button>
       </div>

      </div>
      </div>
    </div>

    <div class="carousel-item">
    <div class="index-part1-carousel-inner">

        <div class="carousel-part1-backgound">
      <img src="{{asset('front/images/2.jpg') }}" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-part1-shader">
      <img src="{{asset('front/images/index-part1-backround.png') }}" alt="">
      </div>
      
      <div class="index-slogan">
         <div class="who-we-are"><p>@lang('front.carousel-events')</p></div>
        <div class="slogan-button">
          <button>
            <a href="{{route('frontend.events')}}">
            <p>@lang('front.show-more')</p>
            <img src="{{asset('front/images/arrow-right.png') }}" alt="">
            </a>
        </button>
       </div>

      </div>
      </div>

      


    </div>

    <div class="carousel-item">
      <div class="index-part1-carousel-inner">
        
      <div class="carousel-part1-backgound">
        <img src="{{asset('front/images/4.jpg') }}" class="d-block w-100"alt="">
      </div>

      <div class="carousel-part1-shader">
        <img src="{{asset('front/images/index-part1-backround.png') }}" alt="">
      </div>
      
      <div class="index-slogan">
         <div class="who-we-are"><p>@lang('front.bene-motors')</p></div>
        <div class="slogan-button">
          <button>
            <a href="{{route('frontend.motors')}}">
            <p>@lang('front.show-more')</p>
            <img src="{{asset('front/images/arrow-right.png') }}" alt="">
            </a>
        </button>
       </div>

      </div>

      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="index-part-1">
  <div class="part-1-middle">
    <div class="part-1-inner">
        <div class="index-about-us-info">
          <div class="index-about-us-header">

          </div>

          <div class="index-about-us-title">
            <p>@lang('front.index-about')</p>
          </div>

          <div class="index-about-us-text">
             <p>
               @lang('front.index-about-text')
              </p>
          </div>

          <div class="index-about-us-button">
              <button>
              <a href="{{route('frontend.about')}}">
              <p>@lang('front.show-more')</p>
              <img src="{{asset('front/images/arrow-right.png') }}" alt="">
              </a>
              </button>
          </div>
          
        </div>

        <div class="about-us-video">
          <embed src="https://www.youtube.com/watch?v=DBvhFqfW44y?autoplay=1&mute=1" frameborder="0"></embed>
        </div>
    </div>
  </div>
</div>


<div class="index-part-2">
  <div class="index-part-2-middle">
    <div class="index-part-2-inner">

      <div class="index-news-header">
          <div class="index-news-header-title">
            <p>@lang('front.newsroom')</p>
          </div>

          <div class="see-all-button">
            <button>
              <a href="https://www.facebook.com/beneexclusive/">
              <p>@lang('front.show-more')</p>
              <img src="{{asset('front/images/blue-short-arrow.png') }}" alt="">
              </a>
            </button>
          </div>


      </div>

      <div id="carouselExampleIndicators-index-news" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <div class="taxi-carousel-sliders d-none">
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="0" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-news" data-bs-slide-to="5" class="active" aria-current="true"  aria-label="Slide 6"></button>
          </div>
        </div>


        <div class="carousel-inner">

          <div class="carousel-item active mb-6">
            <a href="https://www.facebook.com/beneexclusive/videos/1036966293837265">
              <img src="{{asset('front/images/article/5.jpg') }}" class="" alt="...">
            </a>
          </div>


          <div class="carousel-item mb-6">
            <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/967350223916930">
              <img src="{{asset('front/images/article/2.jpg')}}" class="" alt="...">
            </a>
          </div>

          <div class="carousel-item mb-6">
            <a href="{{route('frontend.blacksea')}}">
             <img src="{{asset('front/images/article/6.jpg')}}" class="" alt="...">
            </a>
          </div>

          <div class="carousel-item mb-6">
            <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/952419448743341/">
             <img src="{{asset('front/images/article/1.jpg')}}" class="" alt="...">
            </a>
          </div>


          <div class="carousel-item mb-6">
            <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/929407307711222/">
              <img src="{{asset('front/images/article/3.jpg')}}" class="" alt="...">
            </a>
          </div>

          <div class="carousel-item mb-6">
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
              <img src="{{asset('front/images/article/exclusive-web-stars.png') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
                <p>6 @lang('front.november'), 2022</p>
              </div>
              <h6>@lang('front.news-article-14-header')</h6>
              
              <p>@lang('front.news-article-14-body') </p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/1113304185988199/">
                  <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/bene-kia.jpg') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
                <p>25 @lang('front.october'), 2022</p>
              </div>
              <h6>@lang('front.news-article-13-header')</h6>

              <p>@lang('front.news-article-13-body') </p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/posts/pfbid07VGkpu3QCUGADp65sUipXnAcAVD9T5rdf9hAG4ZngqjjmAsFpr3fTVaBjE5MZ1TBl">
                  <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/exclusive-web-rally.png') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
                <p>9 @lang('front.october'), 2022</p>
              </div>
              <h6>@lang('front.news-article-12-header')</h6>
<br>
              <p>@lang('front.news-article-12-body') </p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/posts/pfbid02J779ZHTG18sR9z8wvtTpdQqUUf7T8fvKkRHBBWfa8so7PNJXEUBUFQTr6SxpSo54l">
                  <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/gogli.png') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
                <p>15 @lang('front.september'), 2022</p>
              </div>
              <h6>@lang('front.news-article-11-header')</h6>

              <p>@lang('front.news-article-11-body') </p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/PraimShow/videos/1230313354425303">
                  <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/euro.jpg') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
                <p>2 @lang('front.september'), 2022</p>
              </div>
              <h6>@lang('front.news-article-10-header')</h6>
<br>
              <p>@lang('front.news-article-10-body') </p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/1069234070395211/">
                  <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/gogla.png') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
                <p>18 @lang('front.august'), 2022</p>
              </div>
              <h6>@lang('front.news-article-9-header')</h6>

              <p>@lang('front.news-article-9-body') </p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/100065343585633/videos/5084328855008950">
                  <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/bene-tesla.jpg') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
                <p>11 @lang('front.august'), 2022</p>
              </div>
              <h6>@lang('front.news-article-8-header')</h6>
<br>
              <p>@lang('front.news-article-8-body') </p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/1054975928487692/">
                  <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/article/exclusive-web-fiba.png') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
                <p>26 @lang('front.july'), 2022</p>
              </div>
              <h6>@lang('front.news-article-7-header')</h6>
<br>
              <p>@lang('front.news-article-7-body') </p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/1046128726039079/">
                  <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
            <div class="index-news-article">
              <div class="index-news-image">
                <img src="{{asset('front/images/article/6.jpg') }}" alt="">
              </div>

              <div class="index-news-text">
                <div class="news-date">
                <p>7 @lang('front.april'), 2022</p>
                </div>

                <h6>@lang('front.news-article-6-header')</h6>

                <p>@lang('front.news-article-6-body')</p>


                <div class="index-read-more">
                  <a href="{{route('frontend.blacksea')}}">
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
                <p>16 @lang('front.june'), 2022</p>
              </div>
              <h6>@lang('front.news-article-3-header')</h6>

              <p>@lang('front.news-article-3-body') </p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/1020451055273513/">
                  <h5>@lang('front.show-more')</h5></a>
                <img src="{{asset('front/images/news-arrow.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>

          <div class="swiper-slide">
            <div class="index-news-article">
              <div class="index-news-image">
                <img src="{{asset('front/images/article/5.jpg') }}" alt="">
              </div>

              <div class="index-news-text">
                <div class="news-date">
                <p>7 @lang('front.june'), 2022</p>
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
                <p>16 @lang('front.june'), 2022</p>
              </div>
              <h6>@lang('front.news-article-3-header')</h6>

              <p>@lang('front.news-article-3-body') </p>


              <div class="index-read-more">
                <a href="https://www.facebook.com/beneexclusive/photos/a.146175766034384/1020451055273513/">
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







<div class="index-part-5">
  <div class="part-5-middle">
    <div class="part-5-inner">
      <div class="index-academy-info">
      
          <div class="academy-image-outer">
            <div class="academy-image">
              <div class="academy-background-image">
              <img src="{{asset('front/images/academy/5.jpg') }}" alt="">
              </div>

             

            </div>
          </div>

              <div class="home-academy-text">

                <div class="index-academy-title">
                  <p>@lang('front.index-academy')</p>
                </div>

                <div class="index-academy-text">
                  <p> @lang('front.index-academy-text')</p>
                </div>

                <div class="index-academy-button">
                    <button>
                      <a href="{{route('frontend.academy')}}">
                      <p>@lang('front.show-more')</p>
                        <img src="{{asset('front/images/arrow-right.png') }}" alt=""> 
                      </a>
                    </button>
                </div>
              </div>
        </div>

       
    </div>
  </div>
</div>




<div class="index-part-6">
  <div class="part-6-middle">
    <div class="part-6-inner">
        <div class="index-taxi-info">
          

          <div class="index-taxi-title">
            <p>@lang('front.front-taxi')</p>
          </div>

          <div class="index-taxi-text">
            <p> @lang('front.index-taxi-page-text')</p>
          </div>

          <div class="index-taxi-button">
              <button>
                <p>@lang('front.show-more')</p>
                <i class="fas fa-arrow-right"></i>
              </button>
          </div>
          
        </div>

        <div class="index-taxi-image">
          <img src="{{asset('front/images/taxi/taxi.png') }}" alt="">
        </div>
    </div>
  </div>
</div>



<div class="index-part-7">
  <div class="part-7-middle">
    <div class="part-7-inner">
        <div class="index-event-header"><p>@lang('front.index-events')</p></div>


      <div id="carouselExampleIndicators-index-events" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <div class="taxi-carousel-sliders d-none">
            <button type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
        </div>


        <div class="carousel-inner">
          <div class="carousel-item active mb-5">
            <a href="{{route('frontend.mercedes-event')}}">
              <img src="{{asset('front/images/proeqti3.jpg')}}" class="" alt="...">
            </a>
          </div>


          <div class="carousel-item mb-5">
            <a href="{{route('frontend.week')}}">
             <img src="{{asset('front/images/proeqti4.jpg')}}" class="" alt="...">
            </a>
          </div>


          <div class="carousel-item mb-5">
            <a href="{{route('frontend.distribution')}}">
              <img src="{{asset('front/images/proeqti5.jpg')}}" class="" alt="...">
            </a>
          </div>

          <div class="carousel-item mb-5">
            <a href="{{route('frontend.event-moiare')}}">
              <img src="{{asset('front/images/proeqti1.jpg')}}" class="" alt="...">
            </a>
          </div>
          <div class="carousel-item mb-5">
            <a href="{{route('frontend.event-moiare')}}">
              <img src="{{asset('front/images/article/6.jpg')}}" class="" alt="...">
            </a>
          </div>


        </div>

          <div class="spec-carousel-buttons">
            <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide="prev">
              <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
              <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleIndicators-index-events" data-bs-slide="next">
              <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
              <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
        </div>


      
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
      <div class="swiper-slide">
        <a href="{{route('frontend.networking')}}"><img src="{{asset('front/images/proeqti2.jpg')}}" alt=""></a></div>

        <div class="swiper-slide"><a href="{{route('frontend.mercedes-event')}}"><img src="{{asset('front/images/proeqti3.jpg')}}" alt=""></a></div>
        <div class="swiper-slide"><a href="{{route('frontend.blacksea')}}"><img src="{{asset('front/images/proeqti6.jpg')}}" alt=""></a></div>
        <div class="swiper-slide"><a href="{{route('frontend.week')}}"><img src="{{asset('front/images/proeqti4.jpg')}}" alt=""></a></div>

        <div class="swiper-slide"><a href="{{route('frontend.distribution')}}"><img src="{{asset('front/images/proeqti5.jpg')}}" alt=""></a></div>
{{route('frontend.event-moiare')}}
        <div class="swiper-slide"><a href=""><img src="{{asset('front/images/proeqti1.jpg')}}" alt=""></a></div>
        
       
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
      </div>


    </div>
  </div>
</div>



<div class="index-part-8">
  <div class="part-8-middle">
    <div class="part-8-inner">
      <div class="index-partners-header">
      <p>@lang('front.partners')</p>
      </div>

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

        <div class="index-partners-logo" id="logo-last-line">
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


      

    </div>
  </div>
</div>









@endsection