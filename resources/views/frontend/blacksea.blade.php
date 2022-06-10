

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

<img width="100%" src="{{ asset('../front/assets/images/limperatrice.jpeg') }}" >


<div class="container p-0">
  <h3 class = "mt-5 d-block">L'Impératrice</h3><br>
   <h4 class = "mt-4 d-block">ღონისძიების შესახებ:</h4>
        <!--<img class="inner_news_image" src="{{ asset('front/assets/images/shuttle.jpg') }}" width="300"  height="500" >-->
    <div class="row ">
      <div class="col-md-8 pt-3 mt-3 ml-3  border_radius_25" style="border-top:1px solid #c7c7c7;">
      <p>ტრადიციულად, Black Sea Arena-ზე მიმავალი მსმენელის კომფორტსა და უსაფრთხოებაზე Bene Exclusive ზრუნავს.
       ავტობუსის რეისები შეკვეთილისკენ თბილისიდან, ბათუმიდან და ქუთაისიდან სრულდება.
       
      </div>
    <div class ="row my-5 buy_ticket">
<h2 class="my-5">ბილეთები</h2>
<p style="padding-bottom:10px;padding-left:30px;font-size:1.5rem;color:green">თბილისი </p>        
<p style="padding-bottom:20px;padding-left:30px;">ავტობუსი გადის წერეთლის გამოფენის ტერიტორიის პარკინგიდან 10:00 საათზე</p>
<form class="form-horizontal col-12" method="POST" action="">
  {{ csrf_field() }}
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p name="kaxeti" style="color:green;font-size:1rem;padding-top:5px;">თბილისი - Black Sea Arena (ერთი გზა)</p>
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



  </div>
  
 


</form>
<form class="form-horizontal col-12" method="POST" action="">
  {{ csrf_field() }}
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p name="kaxeti" style="color:green;font-size:1rem;padding-top:5px;">თბილისი - Black Sea Arena (ერთი გზა)</p>
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
  </div>  </div>
</form>

<p style="padding-bottom:10px;padding-left:30px;font-size:1.5rem;color:green">ქუთაისი </p>        
<p style="padding-bottom:20px;padding-left:30px;">ავტობუსი გადის ჭავჭავაძის ავტოსასდგურიდან (Mcdonald's ის მიმდებარედ) 14:00 საათზე</p>
<form class="form-horizontal col-12" method="POST" action="">
  {{ csrf_field() }}
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p name="kaxeti" style="color:green;font-size:1rem;padding-top:5px;">ქუთაისი - Black Sea Arena (ერთი გზა)</p>
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



  </div>
  
 


</form>
<form class="form-horizontal col-12" method="POST" action="">
  {{ csrf_field() }}
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p name="kaxeti" style="color:green;font-size:1rem;padding-top:5px;">ქუთაისი - Black Sea Arena (ერთი გზა)</p>
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
  </div>  </div>
</form>


<p style="padding-bottom:10px;padding-left:30px;font-size:1.5rem;color:green">ბათუმი </p>        
<p style="padding-bottom:20px;padding-left:30px;">ავტობუსი გადის ბათუმის რკინიგზის პარკინგიდან 16:00 საათზე</p>
<form class="form-horizontal col-12" method="POST" action="">
  {{ csrf_field() }}
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p name="kaxeti" style="color:green;font-size:1rem;padding-top:5px;">თბილისი - Black Sea Arena (ერთი გზა)</p>
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



  </div>
  
 


</form>
<form class="form-horizontal col-12" method="POST" action="">
  {{ csrf_field() }}
<div class = "col-12 d-flex justify-content-center" style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
  <div class = "col-5  ticket_padding_top">
    <p name="kaxeti" style="color:green;font-size:1rem;padding-top:5px;">თბილისი - Black Sea Arena (ერთი გზა)</p>
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
  </div>  </div>
</form>

</div>

</section>





</body>
















