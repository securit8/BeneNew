<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="front/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet"  href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

<script src="https://kit.fontawesome.com/5c894f6509.js" crossorigin="anonymous"></script>


    <title> @yield('title')</title>
  </head>
<body>
  @yield('header')
  

  <header class="container-fluid">
  <div class="navigation">
  


  
<div class="navbar">
<div class="bene_logo"><a href="/"><img src="{{asset('front/images/header-logo.png') }}" ></a></div>
   
  
    <div id="navibar">

      <div class="about {{Request::is('about') ? 'current' : ''}}"><a href="{{route('frontend.about')}}">@lang('front.about')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <!-- <div class="about {{Request::is('news') ? 'current' : ''}}"><a href="{{route('frontend.news')}}">@lang('front.news')</a></div>
      <div class ="nav-line"><p>|</p></div> -->
      <div class="autopark {{Request::is('fleet') ? 'current' : ''}}"><a href="{{route('frontend.fleet')}}">@lang('front.fleet')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="electric {{Request::is('electric') ? 'current' : ''}}"><a href="{{route('frontend.electric')}}"><img src="{{asset('front/images/line.svg')}}">@lang('front.electric')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="motors {{Request::is('motors') ? 'current' : ''}}"><a href="{{route('frontend.motors')}}">@lang('front.motors')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="rent {{Request::is('rent') ? 'current' : ''}}"><a href="{{route('frontend.rent')}}">@lang('front.rent')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="academy {{Request::is('academy') ? 'current' : ''}}"><a href="{{route('frontend.academy')}}">@lang('front.academy')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="events {{Request::is('taxi') ? 'current' : ''}}"><a href="{{route('frontend.taxi')}}">@lang('front.taxi')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="events {{Request::is('events') ? 'current' : ''}}"><a href="{{route('frontend.events')}}">@lang('front.events')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="partners {{Request::is('partners') ? 'current' : ''}}"><a href="{{route('frontend.partners')}}">@lang('front.partners')</a></div>

      <div class="contact {{Request::is('contact') ? 'current' : ''}}"><a href="{{route('frontend.contact')}}"><img src="{{asset('front/images/logo/headphones.svg')}}" >@lang('front.contact')</a></div>
    </div>

    <div class="Language-select">

      <div id="langbtn">

          <div class="Ka">
            <a href="locale/ka">GE</a>
          </div>
          <div class="En">
            <a href="locale/en">EN</a>
          </div>
          <div class="Ru">
            <a href="locale/ru">RU</a>
          </div>
      </div>

    </div>
  
</div>

<div class="hamburger" id="myhamburger">
  <span class="bar"></span>
  <span class="bar"></span>
  <span class="bar"></span>
</div>
  </div>
</header>





@yield('footer')

<div class="footer-outer">
  <footer class="footer">
    <div class="contact-info">
      <div class="contact-info-inner">
        <div class="contact-logo-info">
        <div class="contact-info-logo">
          <img src="{{asset('front/images/logo/headphones.svg')}}" alt="">
        </div>

        <div class="contact-slogan">
          <p>@lang('front.call-center')</p>
        </div>
        </div>

        <div class="our-social-meida">
          <div class="footer-social-icons">
            <div class="social-icons1">
              <a href="https://www.facebook.com/beneexclusive"><i class="fa-brands fa-facebook fa-lg"></i></a>
              <a href="https://www.instagram.com/beneexclusive/"><i class="fab fa-instagram fa-lg"></i></a>
              <a href="https://www.youtube.com/channel/UCJRjBx9nvcjHrd8JNDeLpvQ"><i class="fa-brands fa-youtube fa-lg"></i></a>
              <a href="https://www.linkedin.com/company/bene-exclusive/"><i class="fab fa-linkedin fa-lg"></i></a>
           </div>

    
          </div>
        </div>
      </div>
    </div>


    <div class="footer-navigation-bar">
      <div class="footer-navigation-bar-inner">
        <div class="footer-autopark">
          <p>@lang('front.fleet')</p>
          <ul>
          <li>@lang('front.all')</li>
          <li>@lang('front.suv')</li>
          <li>@lang('front.sedan')</li>
          <li>@lang('front.minivan')</li>
          <li>@lang('front.minibus')</li>
          <li>@lang('front.bus')</li>
          <li>@lang('front.coupe')</li>
          </ul>
        </div>

        <div class="footer-service-bar">
          <p>@lang('front.services')</p>
          <ul>
          <li><a href="{{route('frontend.rent')}}">@lang('front.rent')</a></li>
          <li><a href="{{route('frontend.academy')}}">@lang('front.academy')</a></li>
          <li><a href="{{route('frontend.taxi')}}">@lang('front.taxi')</a></li>
          </ul>
        </div>

        <div class="footer-about-bar">
          <p>@lang('front.about-company')</p>
          <ul>
          <li><a href="{{route('frontend.motors')}}">@lang('front.motors')</a></li>
          <li><a href="{{route('frontend.partners')}}">@lang('front.partners')</a></li>
          <li><a href="{{route('frontend.contact')}}">@lang('front.contact')</a></li>
          </ul>
        </div>

      </div>
    </div>
  </footer>
</div>

<div class="hr-line">
<hr>
</div>

  <div class="copyright">
    <p>&copy 2014-2022 @lang('front.copyright')</p>
  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
       var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        centeredSlides: false,
        loop: true,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          type: "fraction",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      var appendNumber = 4;
      var prependNumber = 1;
      document
        .querySelector(".prepend-2-slides")
        .addEventListener("click", function (e) {
          e.preventDefault();
          swiper.prependSlide([
            '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
            '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
          ]);
        });
      document
        .querySelector(".prepend-slide")
        .addEventListener("click", function (e) {
          e.preventDefault();
          swiper.prependSlide(
            '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
          );
        });
      document
        .querySelector(".append-slide")
        .addEventListener("click", function (e) {
          e.preventDefault();
          swiper.appendSlide(
            '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
          );
        });
      document
        .querySelector(".append-2-slides")
        .addEventListener("click", function (e) {
          e.preventDefault();
          swiper.appendSlide([
            '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
            '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
          ]);
        });
    </script>

<script>
  const hamburger = document.getElementById('myhamburger');
  const mobile = document.getElementById('navibar');

  hamburger.addEventListener('click', () => {
    mobile.classList.toggle('show');
  });
</script>


<script>
  const activePage = window.location.pathname;
  const navLinks = document.querySelectorAll('a').
  forEach(link =>{
   if(link.href.includes(`${activePage}`)){
    link.classList.add('current');
   }
  })
</script>



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

<script>
  const arrow = document.getElementById('arrow-down');
  const drop = document.getElementById('spec-sheet');

  arrow.addEventListener('click', () => {
    drop.classList.toggle('display');
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
