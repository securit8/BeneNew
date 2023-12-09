<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css"
    <title>my independent project</title>
  </head>
  <body>
    <div class="web_page container-fluid">
      <h1> My Web Page</h1>
      <div class="container-fluid d-inline-flex justify-content-between" id="header">
      <div class="home"> <a href="index.html">Home</a></div>
      <div class="company"> <a href="company/company.blade.php">About Us</a></div>
      <div class="projects"> <a href="projects/projects.blade.php">Projects</a></div>
      <div class="services"> <a href="services/services.blade.php">Services</a></div>
      <div class="contact"> <a href="contact/contact.blade.php">Contact Us</a></div>
      </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/front/images/neon.jpg" class="d-block w-100 h-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="public/front/images/neon.jpg" class="d-block w-100 h-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="public/front/images/super.jpg" class="d-block w-100 h-50" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </body>
</html>
