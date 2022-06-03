

<!DOCTYPE html>
<html lang="">
  <head>
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

<script async src="https://www.googletagmanager.com/gtag/js?id=G-E9CSXFYW6Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E9CSXFYW6Q');
</script>

    
  <div class="navigation">
  


  
<div class="navbar">
<div class="bene_logo"><a href="/"><img src="{{asset('../front/images/header-logo.png') }}" ></a></div>
   
  
    <div id="navibar">

      <div class="about {{Request::is('about') ? 'current' : ''}}"><a href="{{route('frontend.about')}}">@lang('front.about')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <!-- <div class="about {{Request::is('news') ? 'current' : ''}}"><a href="{{route('frontend.news')}}">@lang('front.news')</a></div>
      <div class ="nav-line"><p>|</p></div> -->
      <div class="autopark {{Request::is('fleet') ? 'current' : ''}}"><a href="{{route('frontend.fleet')}}">@lang('front.fleet')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="electric {{Request::is('electric') ? 'current' : ''}}"><a href="{{route('frontend.electric')}}"><img src="{{asset('../front/images/line.svg')}}">@lang('front.electric')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="motors {{Request::is('motors') ? 'current' : ''}}"><a href="{{route('frontend.motors')}}">@lang('front.motors')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="rent {{Request::is('car-rent') ? 'current' : ''}}"><a href="{{route('frontend.car-rent')}}">@lang('front.rent')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="academy {{Request::is('academy') ? 'current' : ''}}"><a href="{{route('frontend.academy')}}">@lang('front.academy')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="events {{Request::is('taxi') ? 'current' : ''}}"><a href="{{route('frontend.taxi')}}">@lang('front.taxi')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="events {{Request::is('events') ? 'current' : ''}}"><a href="{{route('frontend.events')}}">@lang('front.events')</a></div>
      <div class ="nav-line"><p>|</p></div>
      <div class="partners {{Request::is('partners') ? 'current' : ''}}"><a href="{{route('frontend.partners')}}">@lang('front.partners')</a></div>

      <div class="contact {{Request::is('contact') ? 'current' : ''}}"><a href="{{route('frontend.contact')}}"><img src="{{asset('../front/images/logo/headphones.svg')}}" >@lang('front.contact-header-1')</a></div>
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

<!-- კონტენტის დასაწყისი -->

<section id="news" >




<div class="container p-0">
  <h3 class = "mt-5 d-block">L'Impératrice</h3><br>
   <h4 class = "mt-4 d-block">ღონისძიების შესახებ:</h4>
        <!--<img class="inner_news_image" src="{{ asset('front/assets/images/shuttle.jpg') }}" width="300"  height="500" >-->
    <div class="row ">
      <div class="col-md-12 pt-3 mt-3 ml-3 background_252525 color_white border_radius_25" style="border-top:1px solid #c7c7c7;">
      <p>15 აგვისტოს Black Sea Arena-ის ეზოში მდებარე Front Stage-ი L'Impératrice-ის კონცერტს უმასპიძლებს. Front Stage-ი Black Sea Arena-ის ექსპერიმენტული სცენაა და ღონისძიებების ღია სივრცეში გამართვის შესაძლებლობას გვაძლევს. ეს სიახლე საშუალებას მოგვცემს 2022 წლის 15 აგვისტოს ისევ შევხვდეთ ერთმანეთს, თავისუფლად გავცვალოთ დადებითი ენერგიები ერთ სიბრტყეზე და ყველაზე ცხელ სეზონზე ყველაზე ფერადი თავგადასავალი მოვიწყოთ.

L'Impératrice ფრანგული დისკო-პოპ ბენდია, რომელიც 2012 წელს დაფუძნდა. თანამედროვე დისკოსა და ფრანგული პოპის შერწმით შექმნილმა მუსიკამ L'Impératrice-ს მსოფლიოს მასშტაბით გაუთქვა სახელი და თანამედროვეობის ერთ-ერთ ცნობილ ბენდად ჩამოაყალიბა. ბენდის წევრები არ მალავენ, რომ მათი მთავარი შთაგონების წყარო Daft Punk იყო.

ცხრაწლიანი არსებობის განმავლობაში L'Impératrice-მა უკვე ორი ალბომი და რამდენიმე მინი ალბომი ჩაწერა. ფრანგული ბენდისთვის განსაკუთრებით წარმატებული აღმოჩნდა სინგლები Sonate Pacifique და Agitations Tropicales.

ბენდის ბოლო ნამუშევარი Tako Tsubo 2021 წელს გამოვიდა და კრიტიკოსების დადებითი შეფასებები დაიმსახურა. სწორედ ამ ალბომით დაანონსებული ტურის ფარგლებში ეწვევა ბენდი საქართველოს და კონცერტს Black Sea Arena-ის ეზოში გამართავს. </p> 
    
      </div>
    <div class ="row my-5 buy_ticket">
<h2 class="my-5">ბილეთები</h2>

<form class="form-horizontal col-12" method="POST" action="">
  {{ csrf_field() }}
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p name="kaxeti" style="color:black;font-size:1rem;padding-top:5px;">თბილისი - ბლექ სი არენა (ერთი გზა)</p>
    <input type="hidden" name="tourName" value="Cruiser_Airport" />
  </div>
  <div class = "col-3 d-flex justify-content-end">
    <p style="color:black;font-size:1.5rem;padding-bottom:5px;"><button type="button" class="circle minus">-</button>
      <input value="1" name="qty" class = "quantity" style="color:black;margin:0px 30px;font-size:1.5rem;">
      <button  type="button" class="circle circle2 plus">+</button></p>

  </div>
  <div class = "col-2 ticket_padding_top">
    <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;"><input id = "kaxeti_price" style = "background-color:#F8F8F8;border:none;display:inline-block;width:50px;" name="cash_f" type="text" value=""></span>&nbsp;ლარი</p>
  </div>
  <input type="hidden" name="sec" value="<?=md5(md5(time())."flytaxi");?>">
  <div class = "col-2 ticket_padding_top">
    <button name = "submit" type ="button" class = "btn btn-success" data-toggle="modal" data-target="#exampleModalCenter1">ყიდვა</button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">ავტორიზაცია</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
  <div class="modal-body">

  <div class = "col-12 p-0 d-flex justify-content-between">
  <div class = "col-5" style = "flex:48%;max-width:48%;border:1px solid #757575;padding:0;margin-bottom:20px;border-radius: 3px;background-color:white;">
    <input value="" name="user_name" type="text" class = "quantity" style="color:black;font-size:0.7rem;width:80%;background-color:white;" placeholder="სახელი" required />
  </div>

  <div class = "col-5" style = "flex:48%;max-width:48%;border:1px solid #757575;padding:0;margin-bottom:20px;border-radius: 3px;background-color:white;">

      <input value="" name="user_lname" type="text" class = "quantity" style="color:black;font-size:0.7rem;width:80%;background-color:white;" placeholder="გვარი" required />


  </div>
  </div>

  <div class = "col-12" style = "border:1px solid #757575;border-radius: 3px;margin-bottom:20px;padding:0;background-color:white;">

      <input value="" type="number" pattern="\d*"  name="user_tel" class = "quantity" style="color:black;font-size:0.7rem;width:80%;background-color:white;" placeholder="მობილური" required />


  </div>

  <div class = "col-12" style = "border:1px solid #757575;border-radius: 3px;margin-bottom:0px;padding:0;background-color:white;">

      <input value="" type="email"  name="user_email" class = "quantity" style="color:black;font-size:0.7rem;width:80%;background-color:white;" placeholder="ელ.ფოსტა" required />


  </div>

  <div class = "col-12 p-0 mb-2">
    <span style="color:#757575;font-size:0.6rem;">* ყველა ველის შევსება აუცილებელია</span>
  </div>

  <div class = "col-12 p-0">
    <input type = "checkbox" name="chkbx_value" value="2" /><span style="color:#757575;font-size:0.6rem;"> თუ ხართ <strong>Visa Platinum, Visa Signature ან Visa Infinite</strong> ბარათის მფლობელი მონიშნეთ გრაფა და მიიღეთ 10% იანი ფასდაკლება</span>
  </div>



  </div>
  <div class="modal-footer">
  <div class = "col-12">
     <button type="submit" class="btn btn-success w-100">ყიდვა</button>
  </div>
  </div>
  </div>
  </div>
  </div>

</div>
</form>


<form class="form-horizontal col-12" method="POST" action="">
  {{ csrf_field() }}
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p name="kaxeti" style="color:black;font-size:1rem;padding-top:5px;">თბილისი - ბლექ სი არენა ორმხრივი გზა</p>
    <input type="hidden" name="tourName" value="Cruiser_Per_Day" />
  </div>
  <div class = "col-3 d-flex justify-content-end">
    <p style="color:black;font-size:1.5rem;padding-bottom:5px;" class ="full_day"><button type="button" class="circle minus">-</button>
      <input value="1" name="qty" class = "quantity" style="color:black;margin:0px 30px;font-size:1.5rem;">
      <button  type="button" class="circle circle2 plus">+</button></p>

  </div>
  <div class = "col-2 ticket_padding_top">
    <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;"><input id = "kaxeti_price" style = "background-color:#F8F8F8;border:none;display:inline-block;width:50px;" name="cash_f" type="text" value=""></span>&nbsp;ლარი</p>
  </div>
  <input type="hidden" name="sec" value="<?=md5(md5(time())."flytaxi");?>">
  <div class = "col-2 ticket_padding_top">
    <button name = "submit" type ="button" class = "btn btn-success" data-toggle="modal" data-target="#exampleModalCenter2">ყიდვა</button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">ავტორიზაცია</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
  <div class="modal-body">

  <div class = "col-12 p-0 d-flex justify-content-between">
  <div class = "col-5" style = "flex:48%;max-width:48%;border:1px solid #757575;padding:0;margin-bottom:20px;border-radius: 3px;background-color:white;">
    <input value="" name="user_name" type="text" class = "quantity" style="color:black;font-size:0.7rem;width:80%;background-color:white;" placeholder="სახელი" required />
  </div>

  <div class = "col-5" style = "flex:48%;max-width:48%;border:1px solid #757575;padding:0;margin-bottom:20px;border-radius: 3px;background-color:white;">

      <input value="" name="user_lname" type="text" class = "quantity" style="color:black;font-size:0.7rem;width:80%;background-color:white;" placeholder="გვარი" required />


  </div>
  </div>

  <div class = "col-12" style = "border:1px solid #757575;border-radius: 3px;margin-bottom:20px;padding:0;background-color:white;">

      <input value="" type="number" pattern="\d*"  name="user_tel" class = "quantity" style="color:black;font-size:0.7rem;width:80%;background-color:white;" placeholder="მობილური" required />


  </div>

  <div class = "col-12" style = "border:1px solid #757575;border-radius: 3px;margin-bottom:0px;padding:0;background-color:white;">

      <input value="" type="email"  name="user_email" class = "quantity" style="color:black;font-size:0.7rem;width:80%;background-color:white;" placeholder="ელ.ფოსტა" required />


  </div>

  <div class = "col-12 p-0 mb-2">
    <span style="color:#757575;font-size:0.6rem;">* ყველა ველის შევსება აუცილებელია</span>
  </div>

  <div class = "col-12 p-0">
    <input type = "checkbox" name="chkbx_value" value="2" /><span style="color:#757575;font-size:0.6rem;"> თუ ხართ <strong>Visa Platinum, Visa Signature ან Visa Infinite</strong> ბარათის მფლობელი მონიშნეთ გრაფა და მიიღეთ 10% იანი ფასდაკლება</span>
  </div>



  </div>
  <div class="modal-footer">
  <div class = "col-12">
     <button type="submit" class="btn btn-success w-100">ყიდვა</button>
  </div>
  </div>
  </div>
  </div>
  </div>

</div>
</form>

  </div>
</div>

</section>





</body>
















