

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
<p style="padding-bottom:20px;padding-left:30px;">ავტობუსი გადის წერეთლიდან, გამოფენის ტერიტორიის პარკინგიდან 10:00 საათზე</p>
  <form class="form-horizontal col-12 row" method="POST" action="{{ route('frontend.payzePost') }}">
    {{ csrf_field() }}
    <div class = "col-12 row d-flex align-self-center " style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
      <div class = "col-12 col-xl-5 d-flex justify-content-center text-center text-lg-start justify-content-xl-start  ticket_padding_top">
        <p  style="color:green;font-size:1rem;padding-top:5px;">თბილისი - Black Sea Arena (ერთი გზა)</p>
        <input type="hidden" name="transfer" value="tbilisi1" />
    </div>

    <div class = "col-12 col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center justify-content-xl-end align-items-center ticket_padding_top">
      <p style="color:black;font-size:1.5rem;padding-bottom: 1px;">
        <button onclick="tb1minus()" type="button" class="circle minus" style="font-size: 22px;">-</button>
        <input value="1" name="raodenoba" id="t1value" class="quantity" style="color:black;margin:0px 30px;font-size: 1.1rem;">
        <button   onclick="tb1plus()" type="button" class="circle circle2 plus" style="font-size: 15px;">+</button>
      </p>
    </div>

    <div class = "col-12 col-sm-6 col-md-4 col-xl-2 d-flex justify-content-center ticket_padding_top align-items-center">
      <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;">
      <input id = "tbili1"  style = "background-color:#F8F8F8;border:none;display:inline-block;width:50px;"  type="text" value="50" ></span>&nbsp;ლარი</p>
    </div>
    
    <div class = "col-12 col-md-4 col-xl-2 ticket_padding_top d-flex justify-content-center align-items-center">
      <button  type ="button" onclick="tbil1()" class = "btn btn-success" data-toggle="modal" data-target="#exampleModalCenter1">შემდეგი</button>
    </div>
    </div>
    <div id="inputT1">
    <div>
      <p>სახელი</p>
      <input name="Name" type="text" placeholder="სახელი" required>
    </div>

    <div>
      <p>გვარი</p>
      <input type="LastName" placeholder="გვარი" required>
    </div>

    <div>
      <p>ტელეფონი</p>
      <input name="Phone" type="text" placeholder="ტელეფონი" required>
    </div>

    <div>
      <p>ელ. ფოსტა</p>
      <input name="Emanil" type="text" placeholder="ელ. ფოსტა" required>
    </div>
    <button  type ="submit" class = "btn btn-success"> ყიდვა </button>
  </div>
  </form>

  <form class="form-horizontal col-12 row" method="POST" action="{{ route('frontend.payzePost') }}">
    {{ csrf_field() }}
    <div class = "col-12 row d-flex align-self-center " style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
      <div class = "col-12 col-xl-5 d-flex justify-content-center text-center text-lg-start justify-content-xl-start  ticket_padding_top">
        <p  style="color:green;font-size:1rem;padding-top:5px;">თბილისი - Black Sea Arena (ორი გზა)</p>
        <input type="hidden" name="transfer" value="tbilisi2" />
    </div>

    <div class = "col-12 col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center justify-content-xl-end align-items-center ticket_padding_top">
      <p style="color:black;font-size:1.5rem;padding-bottom: 1px;">
        <button onclick="tb2minus()" type="button" class="circle minus" style="font-size: 22px;">-</button>
        <input value="1" name="raodenoba" id="t2value" class="quantity" style="color:black;margin:0px 30px;font-size: 1.1rem;">
        <button   onclick="tb2plus()" type="button" class="circle circle2 plus" style="font-size: 15px;">+</button>
      </p>
    </div>

    <div class = "col-12 col-sm-6 col-md-4 col-xl-2 d-flex justify-content-center ticket_padding_top align-items-center">
      <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;">
      <input id = "tbili2" style = "background-color:#F8F8F8;border:none;display:inline-block;width:50px;"  type="text" value="80" ></span>&nbsp;ლარი</p>
    </div>
    
    <div class = "col-12 col-md-4 col-xl-2 ticket_padding_top d-flex justify-content-center align-items-center">
      <button  type ="button" onclick="tbil2()" class = "btn btn-success" data-toggle="modal" data-target="#exampleModalCenter1">შემდეგი</button>
    </div>
    </div>
    <div id="inputT2">
    <div>
      <p>სახელი</p>
      <input name="Name" type="text" placeholder="სახელი" required>
    </div>

    <div>
      <p>გვარი</p>
      <input type="LastName" placeholder="გვარი" required>
    </div>

    <div>
      <p>ტელეფონი</p>
      <input name="Phone" type="text" placeholder="ტელეფონი" required>
    </div>

    <div>
      <p>ელ. ფოსტა</p>
      <input name="Emanil" type="text" placeholder="ელ. ფოსტა" required>
    </div>
    <button  type ="submit" class = "btn btn-success"> ყიდვა </button>
  </div>
  </form>

<p style="padding-bottom:10px;padding-left:30px;font-size:1.5rem;color:green">ქუთაისი </p>        
<p style="padding-bottom:20px;padding-left:30px;">ავტობუსი გადის ჭავჭავაძის ავტოსადგურიდან (Mcdonald's ის მიმდებარედ) 14:00 საათზე</p>
<form class="form-horizontal col-12 row" method="POST" action="{{ route('frontend.payzePost') }}">
    {{ csrf_field() }}
    <div class = "col-12 row d-flex align-self-center " style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
      <div class = "col-12 col-xl-5 d-flex justify-content-center text-center text-lg-start justify-content-xl-start  ticket_padding_top">
        <p  style="color:green;font-size:1rem;padding-top:5px;">ქუთაისი - Black Sea Arena (ერთი გზა)</p>
        <input type="hidden" name="transfer" value="kutais1" />
    </div>

    <div class = "col-12 col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center justify-content-xl-end align-items-center ticket_padding_top">
      <p style="color:black;font-size:1.5rem;padding-bottom: 1px;">
        <button onclick="ku1minus()" type="button" class="circle minus" style="font-size: 22px;">-</button>
        <input value="1" name="raodenoba" id="k1value" class="quantity" style="color:black;margin:0px 30px;font-size: 1.1rem;">
        <button   onclick="ku1plus()" type="button" class="circle circle2 plus" style="font-size: 15px;">+</button>
      </p>
    </div>

    <div class = "col-12 col-sm-6 col-md-4 col-xl-2 d-flex justify-content-center ticket_padding_top align-items-center">
      <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;">
      <input id = "kutais1" style = "background-color:#F8F8F8;border:none;display:inline-block;width:50px;"  type="text" value="30" ></span>&nbsp;ლარი</p>
    </div>
    
    <div class = "col-12 col-md-4 col-xl-2 ticket_padding_top d-flex justify-content-center align-items-center">
      <button  type ="button" onclick="ku1()" class = "btn btn-success" data-toggle="modal" data-target="#exampleModalCenter1">შემდეგი</button>
    </div>
    </div>
    <div id="inputT3">
    <div>
      <p>სახელი</p>
      <input name="Name" type="text" placeholder="სახელი" required>
    </div>

    <div>
      <p>გვარი</p>
      <input type="LastName" placeholder="გვარი" required>
    </div>

    <div>
      <p>ტელეფონი</p>
      <input name="Phone" type="text" placeholder="ტელეფონი" required>
    </div>

    <div>
      <p>ელ. ფოსტა</p>
      <input name="Emanil" type="text" placeholder="ელ. ფოსტა" required>
    </div>
    <button  type ="submit" class = "btn btn-success"> ყიდვა </button>
  </div>
  </form>

  <form class="form-horizontal col-12 row" method="POST" action="{{ route('frontend.payzePost') }}">
    {{ csrf_field() }}
    <div class = "col-12 row d-flex align-self-center " style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
      <div class = "col-12 col-xl-5 d-flex justify-content-center text-center text-lg-start justify-content-xl-start  ticket_padding_top">
        <p  style="color:green;font-size:1rem;padding-top:5px;">ქუთაისი - Black Sea Arena (ორი გზა)</p>
        <input type="hidden" name="transfer" value="kutais2" />
    </div>

    <div class = "col-12 col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center justify-content-xl-end align-items-center ticket_padding_top">
      <p style="color:black;font-size:1.5rem;padding-bottom: 1px;">
        <button onclick="ku2minus()" type="button" class="circle minus" style="font-size: 22px;">-</button>
        <input value="1" name="raodenoba" id="k2value" class="quantity" style="color:black;margin:0px 30px;font-size: 1.1rem;">
        <button   onclick="ku2plus()" type="button" class="circle circle2 plus" style="font-size: 15px;">+</button>
      </p>
    </div>

    <div class = "col-12 col-sm-6 col-md-4 col-xl-2 d-flex justify-content-center ticket_padding_top align-items-center">
      <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;">
      <input id = "kutais2" style = "background-color:#F8F8F8;border:none;display:inline-block;width:50px;"  type="text" value="50" ></span>&nbsp;ლარი</p>
    </div>
    
    <div class = "col-12 col-md-4 col-xl-2 ticket_padding_top d-flex justify-content-center align-items-center">
      <button  type ="button" onclick="ku2()" class = "btn btn-success" data-toggle="modal" data-target="#exampleModalCenter1">შემდეგი</button>
    </div>
    </div>
    <div id="inputT4">
    <div>
      <p>სახელი</p>
      <input name="Name" type="text" placeholder="სახელი" required>
    </div>

    <div>
      <p>გვარი</p>
      <input type="LastName" placeholder="გვარი" required>
    </div>

    <div>
      <p>ტელეფონი</p>
      <input name="Phone" type="text" placeholder="ტელეფონი" required>
    </div>

    <div>
      <p>ელ. ფოსტა</p>
      <input name="Emanil" type="text" placeholder="ელ. ფოსტა" required>
    </div>
    <button  type ="submit" class = "btn btn-success"> ყიდვა </button>
  </div>
  </form>


<p style="padding-bottom:10px;padding-left:30px;font-size:1.5rem;color:green">ბათუმი </p>        
<p style="padding-bottom:20px;padding-left:30px;">ავტობუსი გადის ბათუმის რკინიგზის პარკინგიდან 16:00 საათზე</p>
<form class="form-horizontal col-12 row" method="POST" action="{{ route('frontend.payzePost') }}">
    {{ csrf_field() }}
    <div class = "col-12 row d-flex align-self-center " style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
      <div class = "col-12 col-xl-5 d-flex justify-content-center text-center text-lg-start justify-content-xl-start  ticket_padding_top">
        <p  style="color:green;font-size:1rem;padding-top:5px;">ბათუმი - Black Sea Arena (ერთი გზა)</p>
        <input type="hidden" name="transfer" value="batum1" />
    </div>

    <div class = "col-12 col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center justify-content-xl-end align-items-center ticket_padding_top">
      <p style="color:black;font-size:1.5rem;padding-bottom: 1px;">
        <button onclick="b1minus()" type="button" class="circle minus" style="font-size: 22px;">-</button>
        <input value="1" name="raodenoba" id="b1value" class="quantity" style="color:black;margin:0px 30px;font-size: 1.1rem;">
        <button   onclick="b1plus()" type="button" class="circle circle2 plus" style="font-size: 15px;">+</button>
      </p>
    </div>

    <div class = "col-12 col-sm-6 col-md-4 col-xl-2 d-flex justify-content-center ticket_padding_top align-items-center">
      <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;">
      <input id = "batum1" style = "background-color:#F8F8F8;border:none;display:inline-block;width:50px;"  type="text" value="25" ></span>&nbsp;ლარი</p>
    </div>
    
    <div class = "col-12 col-md-4 col-xl-2 ticket_padding_top d-flex justify-content-center align-items-center">
      <button  type ="button" onclick="bat1()" class = "btn btn-success" data-toggle="modal" data-target="#exampleModalCenter1">შემდეგი</button>
    </div>
    </div>
    <div id="inputT5">
    <div>
      <p>სახელი</p>
      <input name="Name" type="text" placeholder="სახელი" required>
    </div>

    <div>
      <p>გვარი</p>
      <input name="LastName" placeholder="გვარი" required>
    </div>

    <div>
      <p>ტელეფონი</p>
      <input name="Phone" type="text" placeholder="ტელეფონი" required>
    </div>

    <div>
      <p>ელ. ფოსტა</p>
      <input name="Emanil" type="text" placeholder="ელ. ფოსტა" required>
    </div>
    <button  type ="submit" class = "btn btn-success"> ყიდვა </button>
  </div>
  </form>

  <form class="form-horizontal col-12 row" method="POST" action="{{ route('frontend.payzePost') }}">
    {{ csrf_field() }}
    <div class = "col-12 row d-flex align-self-center " style = "border:1px solid black;padding:0;border-radius:20px;margin-bottom:20px;">
      <div class = "col-12 col-xl-5 d-flex justify-content-center text-center text-lg-start justify-content-xl-start  ticket_padding_top">
        <p  style="color:green;font-size:1rem;padding-top:5px;">ბათუმი - Black Sea Arena (ორი გზა)</p>
        <input type="hidden" name="transfer" value="tbilisi2" />
    </div>

    <div class = "col-12 col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center justify-content-xl-end align-items-center ticket_padding_top">
      <p style="color:black;font-size:1.5rem;padding-bottom: 1px;">
        <button onclick="b2minus()" type="button" class="circle minus" style="font-size: 22px;">-</button>
        <input value="1" name="raodenoba" id="b2value" class="quantity" style="color:black;margin:0px 30px;font-size: 1.1rem;">
        <button   onclick="b2plus()" type="button" class="circle circle2 plus" style="font-size: 15px;">+</button>
      </p>
    </div>

    <div class = "col-12 col-sm-6 col-md-4 col-xl-2 d-flex justify-content-center ticket_padding_top align-items-center">
      <p style = "font-size:1rem;padding-top:6px;"><span style="color:black;">
      <input id = "batum2" style = "background-color:#F8F8F8;border:none;display:inline-block;width:50px;"  type="text" value="40" ></span>&nbsp;ლარი</p>
    </div>
    
    <div class = "col-12 col-md-4 col-xl-2 ticket_padding_top d-flex justify-content-center align-items-center">
      <button  type ="button" onclick="bat2()" class = "btn btn-success" data-toggle="modal" data-target="#exampleModalCenter1">შემდეგი</button>
    </div>
    </div>
    <div id="inputT6">
    <div>
      <p>სახელი</p>
      <input name="Name" type="text" placeholder="სახელი" required>
    </div>

    <div>
      <p>გვარი</p>
      <input type="LastName" placeholder="გვარი" required>
    </div>

    <div>
      <p>ტელეფონი</p>
      <input name="Phone" type="text" placeholder="ტელეფონი" required>
    </div>

    <div>
      <p>ელ. ფოსტა</p>
      <input name="Emanil" type="text" placeholder="ელ. ფოსტა" required>
    </div>
    <button  type ="submit" class = "btn btn-success"> ყიდვა </button>
  </div>
  </form>

</div>

</section>



<Script>

function tb1minus(){
  var t1val=document.getElementById('t1value').value;

  if(t1val==0 || t1val==1  )
  {
   
  }
  else{
    t1val--;
    document.getElementById('t1value').value = t1val;
    document.getElementById('tbili1').value=t1val*50;
  }
}
function tb1plus(){
  var t1val=document.getElementById('t1value').value;
  console.log(t1val);
  if(t1val>=5)
  {
   
  }
  else{
    t1val ++;
    document.getElementById('t1value').value =t1val ;
    document.getElementById('tbili1').value=t1val*50;
  }
}

function tb2minus(){
  var t2val=document.getElementById('t2value').value;

  if(t2val==0 || t2val==1  )
  {
   
  }
  else{
    t2val--;
    document.getElementById('t2value').value = t2val;
    document.getElementById('tbili2').value=t2val*80;
  }
}
function tb2plus(){
  var t2val=document.getElementById('t2value').value;
  
  if(t2val>=5)
  {
   
  }
  else{
    t2val ++;
    document.getElementById('t2value').value =t2val ;
    document.getElementById('tbili2').value=t2val*80;
  }
}
// kutaisi -----------

function ku1minus(){
  var k1val=document.getElementById('k1value').value;

  if(k1val==0 || k1val==1  )
  {
   
  }
  else{
    k1val--;
    document.getElementById('k1value').value = k1val;
    document.getElementById('kutais1').value=k1val*30;
  }
}
function ku1plus(){
  var k1val=document.getElementById('k1value').value;

  if(k1val>=5)
  {
   
  }
  else{
    k1val ++;
    document.getElementById('k1value').value =k1val ;
    document.getElementById('kutais1').value=k1val*30;
  }
}

function ku2minus(){
  var k2val=document.getElementById('k2value').value;

  if(k2val==0 || k2val==1  )
  {
   
  }
  else{
    k2val--;
    document.getElementById('k2value').value = k2val;
    document.getElementById('kutais2').value=k2val*50;
  }
}
function ku2plus(){
  var k2val=document.getElementById('k2value').value;
  
  if(k2val>=5)
  {
   
  }
  else{
    k2val ++;
    document.getElementById('k2value').value =k2val ;
    document.getElementById('kutais2').value=k2val*50;
  }
}

// batumi --------------------

function b1minus(){
  var b1val=document.getElementById('b1value').value;

  if(b1val==0 || b1val==1  )
  {
   
  }
  else{
    b1val--;
    document.getElementById('b1value').value = b1val;
    document.getElementById('batum1').value=b1val*25;
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
    document.getElementById('batum1').value=b1val*25;
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
    document.getElementById('batum2').value=b2val*40;
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
    document.getElementById('batum2').value=b2val*40;
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
















