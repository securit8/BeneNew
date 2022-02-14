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
    <div class="language-icon">
    <img src="{{asset('front/images/earth.png') }}" alt="">
  </div>
   <div id="langbtn">
   <p></p>
  <div class="Ka">
    <a href="locale/ka"><img src="{{asset('front/images/geo.png') }}" alt=""></a>
</div>
  <div class="En">
  <a href="locale/en"><img src="{{asset ('front/images/usa.png') }}" alt=""></a>
</div>
</div>
  </button>

</div>

    <div id="navibar">
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
    <div class="contact-info-logo">
      <img src="{{asset('front/images/contact-logo.png')}}" alt="">
    </div>

    <div class="contact-slogan">
      <p>@lang('front.slogan')</p>
    </div>

    <div class="our-social-meida">
    <div class="footer-social-icons">
  <div class="social-icons1">
  <i class="fab fa-facebook-f"></i>
<i class="fab fa-instagram"></i>
<i class="fab fa-twitter"></i>
<i class="fab fa-linkedin"></i>
  </div>

    
  </div>
</div>


    


  
 
  



</div>
</div>
<div class="footer-navigation-bar">
      <div class="footer-navigation-bar-inner">
        <div class="footer-autopark">
          <h6>@lang('front.fleet')</h6>
          <ul>
          <li>ALL</li>
          <li>SUV</li>
          <li>Sedan</li>
          <li>Minivan</li>
          <li>Minibus</li>
          <li>Bus</li>
          <li>Coupe</li>
          </ul>
        </div>

        <div class="footer-service-bar">
          <h6>@lang('front.services')</h6>
          <ul>
          <li><a href="{{route('frontend.rent')}}">@lang('front.rent')</a></li>
          <li><a href="{{route('frontend.academy')}}">@lang('front.academy')</a></li>
          <li><a href="{{route('frontend.taxi')}}">@lang('front.taxi')</a></li>
          </ul>
        </div>

        <div class="footer-about-bar">
          <h6>@lang('front.about')</h6>
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
