@extends('frontend/master')
@section('title', 'Bene-exclusive')
@section('header')

@endsection














@section('footer')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="inner-line">
            <div class="line-1-background">
           <img src="front\images\background.png" class="d-block w-100" alt="...">
           </div>
           <div class="front-line-1">
           <div class="line-1">
           <img src="front\images\S-class.png">
           <div class="line-1-info">
           <h3>Mercedes-Benz</h3>
           <p>S-class</p>
           </div>
           </div>

           <div class="line-1">
           <img src="front\images\toyota.png">
           <div class="line-1-info" id="land">
           <h3>Toyota</h3>
           <p>Land Cruiser 300</p>
           </div>
           <div class="line-1-btn">
             <button><p>დაჯავშნე</p></button>
           </div>
           </div>

           <div class="line-1">
           <img src="front\images\toyotaS.png">
           <div class="line-1-info">
           <h3>Toyota</h3>
           <p>Camry</p>
           </div>
         </div>

      </div>
     </div>
    </div>
    <div class="carousel-item">
      <img src="front\images\toyotaB.png" class="d-block w-100" alt="...">
      <div class="img-overlay">
      </div>
    </div>
    <div class="carousel-item">
      <img src="front\images\toyotaB.png" class="d-block w-100" alt="...">
      <div class="img-overlay">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span><i class="fas fa-arrow-left" id="arrow"></i></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span><i class="fas fa-arrow-right" id="arrow"></i></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="search-bar" id="search">
  <div class="search-inner">
    <input type="text" placeholder="Search...">
  </div>
</div>


<div class="index-part2">
  <div class="index-part2-header">
    <div class="index-part2-header-inner">
      <h2>მთავარი მრგლოვანი ტექსტი</h2>
    </div>

    <div class="index-part2-info">
      <h5>მეორეხარისხოვანი ტექსტი</h5>
    </div>
  </div>
  <div class="index-part2-images reveal">
    <div class="index-part2-images-inner">

      <div class="part2-image">
        <img src="front\images\mercedez.png" alt="">
        <div class="part2-image-header">
        <p>მთავარი მრგლოვანი ტექსტი</p>
        </div>
        <div class="part2-image-info">
          <p>მეორეხარისხოვანი ტექსტი</p>
        </div>
      </div>

      <div class="part2-image">
        <img src="front\images\mercedez2.png" alt="">
        <div class="part2-image-header">
        <p>მთავარი მრგლოვანი ტექსტი</p>
        </div>
        <div class="part2-image-info">
          <p>მეორეხარისხოვანი ტექსტი</p>
        </div>
      </div>

      <div class="part2-image">
        <img src="front\images\tesla.png" alt="">
        <div class="part2-image-header">
        <p>მთავარი მრგლოვანი ტექსტი</p>
        </div>
        <div class="part2-image-info">
          <p>მეორეხარისხოვანი ტექსტი</p>
        </div>

      </div>
    </div>
  </div>
</div>


<div class="index-part3">
  <div class="index-part3-header">
    <div class="index-part3-header-inner reveal">
      <h2>მთავარი მრგლოვანი ტექსტი</h2>
    </div>

    <div class="index-part3-info reveal">
      <h5>მეორეხარისხოვანი ტექსტი</h5>
    </div>
  </div>

  <div class="index-part3-images">
    <div class="index-part3-images-inner">
      <div class="images-line1 reveal">

      <div class="line1-1">
      <img src="front\images\row1-1.png" alt="">
      </div>

      <div class="line1-2">
      <img src="front\images\row1-2.png" alt="">
      </div>

      <div class="line1-3">
      <img src="front\images\row1-3.png" alt="">
      </div>

      <div class="line1-4">
      <img src="front\images\row1-4.png" alt="">
      </div>

      <div class="line1-5">
      <img src="front\images\row1-5.png" alt="">
      </div>

      <div class="line1-6">
      <img src="front\images\row1-6.png" alt="">
      </div>

      </div>
      

      <div class="images-line2 reveal">

      <div class="line2-1">
      <img src="front\images\row2-1.png" alt="">
      </div>

      <div class="line2-2">
      <img src="front\images\row2-2.png" alt="">
      </div>

      <div class="line2-3">
      <img src="front\images\row2-3.png" alt="">
      </div>

      <div class="line2-4">
      <img src="front\images\row2-4.png" alt="">
      </div>

      <div class="line2-5">
      <img src="front\images\row2-5.png" alt="">
      </div>

      <div class="line2-6">
      <img src="front\images\row2-6.png" alt="">
      </div>

      </div>
    </div>
  </div>
</div>


<div class="index-part4">
  <div class="index-part4-header">
    <div class="index-part4-header-inner reveal">
    <h2>მთავარი მრგლოვანი ტექსტი</h2>
    </div>

    <div class="index-part4-info reveal">
      <h5>მეორეხარისხოვანი ტექსტი</h5>
    </div>
    </div>
  </div>

  <div class="part4-image reveal">
    <div class="part4-image-inner">
    <img src="front\images\part4.png" alt="">
    <div class="part4-image-info reveal">
    <h4>მთავარი მრგლოვანი ტექსტი</h4>
    </div>

    <div class="part4-image-info reveal">
      <h5>მეორეხარისხოვანი ტექსტი</h5>
    </div>
    </div>
    </div>
  </div>
</div>


<!-- <script>
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


</script> -->


<script>
window.addEventListener('scroll', reveal);

function reveal(){
  var reveals = document.querySelectorAll('.reveal');
  
  for(var i = 0; i < reveals.length; i++){
    
    
    var windowheight = window.innerHeight;
    var revealtop = reveals[i].getBoundingClientRect().top;
    var revealpoint = 150;

    if(revealtop < windowheight - revealpoint){
      reveals[i].classList.add('active');
    }

    else{
      reveals[i].classList.remove('active'); 
    }
  }
}




</script>
@endsection