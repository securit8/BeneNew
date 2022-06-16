<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/assets/images/favicon.png') }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/style.css') }}">
    <link rel="stylesheet"  href="{{ asset('front/assets/css/fonts.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subse0 t=all" rel="stylesheet" type="text/css" />

</head>
<body>


  <div class = "col-12 col-xs-12 col-sm-7 py-4">
  <div class = "col-12 contact left p-0">
  <h5 class = "p-3" style = "font-weight:bold;"></h5>
   <div class = "col-12 name d-flex justify-content-between p-0">
     <div class = "col-6">
       <p>@lang('front.name') @lang('front.Lname')</p>
     <div> {!!$Name!!} {!!$LastName!!} </div>
   </div>

   
  </div>

  <div class = "col-12 name d-flex justify-content-between p-0 pt-3">
    <div class = "col-6">
      <p>@lang('front.email')</p>

    <div >{!!$Email!!} </div>
  </div>

  <div class = "col-6">
    <p>@lang('front.phone')</p>
    {!!$Phone!!}
  </div>
 </div>

 <div class = "col-12 mt-3">
 <p>Location</p>
 {!!$transfer!!}
 </div>

 <p>ticket</p>
<div>{{!!$raodenoba!!}} </div>

 <div >
 <p>QR code:</p>
 {!! DNS2D::getBarcodeHTML($qr, 'QRCODE') !!}
 </div>
</div>
</div>





  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>
</body>
</html>
