@extends('frontend/master')

@section('title', 'E-class')
@section('content')

@endsection

<div class="Sclass" class="reveals">
  <div class="Car-name">
<h3>VEHICLE FACT SHEET</h3>
<h3>Mercedes E class</h3>
  </div>
  <div class="Sclass-imgs reveal">
<div class="Sclass-img1">
<img src="public/front/images/Sclass1.jpg" id="img1">
<img src="public/front/images/Sclass2.jpg" id="img2">
</div>
<div class="Sclass-img2">
<img src="public/front/images/Sclass3.jpg" id="img3">
<img src="public/front/images/Sclass4.jpg" id="img4">
</div>
</div>
<div class="specs Reveal">
<div class="specs-title">
  <div class="Sspec1"><p>VEHILCE</p> <br> <p class="Sdetail1">Mercedes Benz E class 250</p></div>
  <div class="Sspec2"><p>TYPE, YEAR, COLOR, INTERIOR</p> <br> <p class="Sdetail2">Limousine; 2018 black Metallic; Light brown leather.</p></div>
  <div class="Sspec3"><p>SEAT CAPACITY</p> <br> <p class="Sdetail3">2/3 PAX maximum.</p></div>
  <div class="Sspec4"><p>LUGGAGE CAPACITY</p> <br> <p class="Sdetail4"> 13.1 cu ft cargo volume. Up to 2-3 big suitcases plus hand luggage.</p></div>
  <div class="Sspec5"><p>TECHNICAL DETAILS</p> <br> <p class="Sdetail5">2.0L I4 / 241HP; 9 speed automatic</p></div>
  <div class="Sspec6"><p>SAFETY FEATURES</p> <br> <p class="Sdetail6">PRE-SAFE safety system, ESP, ABS and BAS. Attention Assist and Collision Prevention
Assist System Integrated Restraint System, 9 airbags &amp; side Curtain Air Bags.</p></div>
  <div class="Sspec7"><p>SECURITY FEATURES</p> <br> <p class="Sdetail7">Driveaway locking ( auto-lock as soon as the car reaches 5 km/h )</p></div>
  <div class="Sspec8"><p>COMFORT FEATURES</p> <br> <p class="Sdetail8">Luxuriously crafted cabin with full leather seats. 2 zone climate control ‘’
THERMOTRONIC’’ . Heated front - and rear seats.</p></div>
  <div class="Sspec9"><p>MULTIMEDIA</p> <br> <p class="Sdetail9"> Radio / CD / DVD / MP3 – player with SD card reader.</p></div>
  <div class="Sspec10"><p>CONNECTIVITY</p> <br> <p class="Sdetail10">3 12V power slots.</p></div>
  <div class="Sspec11"><p>AMENTITIES</p> <br> <p class="Sdetail11">Mineral water complimentary on-board. Tissues / napkins complimentary on-board.</p></div>
</div>
</div>















<script>
window.addEventListener('scroll', Reveal);

function Reveal(){
let  reveal = document.querySelectorAll('.reveal');

for(var i = 0; i < reveal.length; i++){
  var windowheight = window.innerHeight;
  var revealtop = reveal[i].getBoundingClientRect().top;
  var revealpoint = 10;

  if(revealtop < windowheight - revealpoint){
    reveal[i].classList.add('active');
  }
  else{
    reveal[i].classList.remove('active');
  }
}
}


</script>

</div>
