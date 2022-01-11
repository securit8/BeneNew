<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="front/css/main.css">
 <script src="https://kit.fontawesome.com/0a96adf822.js" crossorigin="anonymous"></script>

    <title> @yield('title')</title>
  </head>
<body>
  @yield('header')
  

  <header class="container-fluid">
  <div class="navigation">
  <div ><a href="/"><img class="bene_logo" src="front/images/logo.png" ></a></div>


  
  <div class="navbar">
  <div class="Language-select">
  <button type="button" id="changelang">
  <i class="fas fa-globe fa-2x"></i>
   <div id="langbtn">
   <p></p>
  <div class="Ka">
    <a href="locale/ka"><img src="{{asset('front/images/georgia.png') }}" alt=""></a>
</div>
  <div class="En">
  <a href="locale/en"><img src="{{asset ('front/images/united-states.png') }}" alt=""></a>
</div>
</div>
  </button>

</div>

    <div id="navibar">
  <div class="home"><a href="{{route('frontend.home')}}">@lang('front.home')</a></div>
  <div class ="nav-line"><p>|</p></div>
  <div class="about"><a href="{{route('frontend.about')}}">@lang('front.about')</a></div>
  <div class ="nav-line"><p>|</p></div>
  <div class="autopark"><a href="{{route('frontend.fleet')}}">@lang('front.fleet')</a></div>
  <div class ="nav-line"><p>|</p></div>
  <div class="rent"><a href="{{route('frontend.rent')}}">@lang('front.rent')</a></div>
  <div class ="nav-line"><p>|</p></div>
  <div class="academy"><a href="{{route('frontend.academy')}}">@lang('front.academy')</a></div>
  <div class ="nav-line"><p>|</p></div>
  <div class="events"><a href="{{route('frontend.taxi')}}">@lang('front.taxi')</a></div>
  <div class ="nav-line"><p>|</p></div>
  <div class="partners"><a href="{{route('frontend.partners')}}">@lang('front.partners')</a></div>
  <div class ="nav-line"><p>|</p></div>
  <div class="motors"><a href="{{route('frontend.motors')}}">@lang('front.motors')</a></div>
  <div class ="nav-line"><p>|</p></div>
  <div class="contact"><a href="{{route('frontend.contact')}}">@lang('front.contact')</a></div>
  <span class="search-i"><a href="#search"><i class="fas fa-search fa-lg"></i></a></span>
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


<footer class="footer">
<div class="contact-info">
  <div class="contact-info-inner">
    <div class="contact-info-logo">
      <img src="{{asset('front/images/contact-logo.png')}}" alt="">
    </div>

    <div class="contact-slogan">
      <p>Move With Luxury</p>
    </div>

    <div class="contact-text">
      <a href="{{route('frontend.contact')}}"><p>Contact Us</p></a>
    </div>

    <div class="contact-site">
      <p>© www.bene-exclusive.com</p>
    </div>
  </div>
</div>





  <div class="our-social-meida">
    <div class="footer-social-icons">
  <div class="social-icons1">
  <i class="fab fa-facebook-f fa-2x"></i>
<i class="fab fa-instagram fa-2x"></i>
<i class="fab fa-twitter fa-2x"></i>
  </div>
  <div class="social-icons2">
<i class="fab fa-linkedin fa-2x"></i>
<i class="fab fa-whatsapp fa-2x"></i>
<i class="fab fa-snapchat-square fa-2x"></i>
  </div>
  </div>
  

<div class="footer-navbar">
  <div class="footer-nav-inner">

    <div class="footer-about">
      <p>@lang('front.about')</p>
    </div>
    
    <div class ="footer-nav-line"><p>|</p></div>

    <div class="footer-vehicles">
      <p>@lang('front.fleet')</p>
    </div>

    <div class ="footer-nav-line"><p>|</p></div>

    <div class="footer-rent">
    <p>@lang('front.rent')</p>
    </div>

    <div class ="footer-nav-line"><p>|</p></div>

    <div class="footer-taxi">
    <p>@lang('front.taxi')</p>
    </div>

    <div class ="footer-nav-line"><p>|</p></div>

    <div class="footer-events">
    <p>@lang('front.academy')</p>
    </div>

    <div class ="footer-nav-line"><p>|</p></div>

    <div class="footer-partners">
    <p>@lang('front.partners')</p>
    </div>

    <div class ="footer-nav-line"><p>|</p></div>

    <div class="footer-motors">
      <p>@lang('front.motors')</p>
    </div>

    <div class ="footer-nav-line"><p>|</p></div>

    <div class="footer-contact">
    <p>@lang('front.contact')</p>
    </div>

    

  </div>

</div>
</div>


</footer>



<script>
  const hamburger = document.getElementById('myhamburger');
  const mobile = document.getElementById('navibar');

  hamburger.addEventListener('click', () => {
    mobile.classList.toggle('show');
  });
</script>


<script>
  const language = document.getElementById('changelang');
  const change = document.getElementById('langbtn');

  language.addEventListener('click', () => {
    change.classList.toggle('display');
  });
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
