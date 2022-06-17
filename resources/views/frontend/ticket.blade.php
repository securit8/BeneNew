<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/assets/images/favicon.png') }}">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/style.css') }}">
    <link rel="stylesheet"  href="{{ asset('front/assets/css/fonts.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subse0 t=all" rel="stylesheet" type="text/css" />
<style>
    .ticket-body {
        border: 1px solid black;
        border-radius: 25px; 
    }

    body {
        display: flex; 
        justify-content: center;
    }

    input {
        border: none;
        background-color: rgba(151, 151, 151, 0.685);
        outline: none;
    }

    p {
        margin-bottom: 0;
    }
    
</style>
</head>
<body>


  <div class = "row py-4 ticket-body">
    <div class = "col-12 contact left p-0">
        <h5 class = "p-3" style = "font-weight:bold;"></h5>
        <div class = "col-12 name d-flex justify-content-center p-0">
            <div class = "col-12 mt-3 d-flex justify-content-center">
                <div class="d-flex flex-column">
                    <p>STATUS:</p>
                    <input  type = "text" value = "{!!$status!!}" class = "input" />
                </div>
            </div>
            <div class = "">
                <p>სახელი და გვარი :</p>
                <input type = "text" value = "{!!$Name!!} {!!$LastName!!} " class = "input" placeholder = "Name" required />
            </div>
        </div>

        <div class = "col-12 name p-0 pt-3 d-flex flex-column flex-md-row justify-content-center ">
            <div class = "p-3">
                <div class="d-flex flex-column">
                    <p>მეილი :</p>
                    <input type = "email" value = "{!!$Email!!}" class = "input" placeholder = "Email" required />
                </div>
            </div>

            <div class = "p-3">
                <div class="d-flex flex-column">
                    <p>ტელეფონი:</p>
                    <input type = "tel" value = "{!!$Phone!!}" class = "input" placeholder = "Phone" required />
                </div>
            </div>
        </div>

        <div class = "col-12 mt-3 d-flex justify-content-center">
            <div class="d-flex flex-column">
                <p>მიმართულება:</p>
                <input  type = "text" value = "{!!$transfer!!}" class = "input" />
            </div>
        </div>

        <div class = "col-12 mt-3 d-flex justify-content-center">
            <div class="d-flex flex-column">
                <p>QR code:</p>
                <input  type = "text" value = "{!!$qr!!}" class = "input" />
            </div>
        </div>
    </div>
</div>





  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>
</body>
</html>