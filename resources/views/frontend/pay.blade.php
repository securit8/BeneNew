

<!DOCTYPE html>
<html lang="">
 
  <head>
  <title>Limperatrice </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TleImage" content="http://">
      <meta property="og:bene-exclusive.com" content="Bene Exclusive">
    <meta property="og:image" itemprop="image" content="../front/images/partners-logo.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:heihgt" content="300">
    <meta property="og:url" content="http://bene-exclusive.com">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../front/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="favicon.ico" /> 
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet"  href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<!-- ძველი ექსკლუზივის სტილები -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('../front/assets/css/style.css') }}">
    <link rel="stylesheet"  href="{{ asset('../front/assets/css/fonts.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="{{ asset('../admin/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('../admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('../front/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../front/assets/css/owl.theme.default.min.css') }}">
<script src="https://kit.fontawesome.com/5c894f6509.js" crossorigin="anonymous"></script>
<!-- ძველი ექსკლუზივის სტილები -->
<div class="about {{Request::is('LImperatrice') ? 'LImperatrice' : ''}}"> <a href="{{route('frontend.blacksea')}}">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E9CSXFYW6Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E9CSXFYW6Q');
</script>
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
    

  <div class="navigation">
  
  
    

  
<div class="navbar">
<div class="bene_logo"><a href="/"><img src="{{asset('../front/images/header-logo.png') }}" ></a></div>
   
  
    

    <div class="Language-select">

      <div id="langbtn">

          <div class="Ka">
            <a href="/locale/ka">GE</a>
          </div>
          <div class="En">
            <a href="/locale/en">EN</a>
          </div>
          <!-- <div class="Ru">
            <a href="locale/ru">RU</a>
          </div> -->
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

<!-- კონტენტის დასაწყისი -->

<section id="news" >





<form class="form-horizontal col-6 row" style="margin-left: 20rem;    margin-top: 4rem;" method="POST" action="{{ route('frontend.sepguzzle') }}">
    {{ csrf_field() }}
    <div class = "col-12 row d-flex align-self-center " style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
      <div class = "col-12 col-xl-5 d-flex justify-content-center text-center text-lg-start justify-content-xl-start  ticket_padding_top">
        <p  style="color:green;font-size:1rem;padding-top:5px;">NATIA BRADLEY</p>
        <input type="hidden" name="transfer" value="batum1" />
    </div>

    

    <div class = "col-6 col-sm-6 col-md-4  d-flex justify-content-center ticket_padding_top align-items-center">
      <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;">
      <input id = "batum1" style = "background-color:#F8F8F8;border:none;display:inline-block;width:50px;"  type="text" value="450" ></span>&nbsp;GEL</p>
    </div>
    
    <div class = "col-12 col-md-4 col-xl-2 ticket_padding_top d-flex justify-content-center align-items-center">
      <button  type ="button" onclick="bat1()" class = "btn btn-success" data-toggle="modal" data-target="#exampleModalCenter1">PAY</button>
    </div>
    </div>
    <div id="inputT5">
    <div>      
      <input name="Name" type="text" placeholder="@lang('front.name')" required>
    </div>

    <div>
    <br>
      <input name="LastName" placeholder="@lang('front.Lname')" required>
    </div>

    <div>
     <br>
      <input name="Phone" type="text" placeholder="@lang('front.phone')" required>
    </div>

    <div>
      <br>
      <input name="Email" type="text" placeholder="@lang('front.email')" required>
    </div>
    <button  type ="submit" class = "btn btn-success"> @lang('front.buy') </button>
  </div>
  </form>
  <img width="100%" src="{{ asset('../front/assets/images/limp.jpeg') }}" >
 

</div>

</section>



<Script>


// batumi --------------------

function b1minus(){
  var b1val=document.getElementById('b1value').value;

  if(b1val==0 || b1val==1  )
  {
   
  }
  else{
    b1val--;
    document.getElementById('b1value').value = b1val;
    document.getElementById('batum1').value=b1val*35;
  }
}
function b1plus(){
  var b1val=document.getElementById('b1value').value;
  
  if(b1val>=5)
  {
   
  }
  else{
    b1val ++;
    document.getElementById('b1value').value =b1val ;
    document.getElementById('batum1').value=b1val*35;
  }
}

function b2minus(){
  var b2val=document.getElementById('b2value').value;

  if(b2val==0 || b2val==1  )
  {
   
  }
  else{
    b2val--;
    document.getElementById('b2value').value = b2val;
    document.getElementById('batum2').value=b2val*50;
  }
}
function b2plus(){
  var b2val=document.getElementById('b2value').value;
  
  if(b2val>=5)
  {
   
  }
  else{
    b2val ++;
    document.getElementById('b2value').value =b2val ;
    document.getElementById('batum2').value=b2val*50;
  }
}
   
    function tbil1(){
      document.getElementById('inputT1').style.display="block";
    }
    function tbil2(){
      document.getElementById('inputT2').style.display="block";
    }
    function ku1(){
      document.getElementById('inputT3').style.display="block";
    }
    function ku2(){
      document.getElementById('inputT4').style.display="block";
    }
      function bat1(){
      document.getElementById('inputT5').style.display="block";
    }
    function bat2(){
      document.getElementById('inputT6').style.display="block";
    }
    
  </script>

</body>
















