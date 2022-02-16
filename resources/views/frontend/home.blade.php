@extends('frontend/master')
@section('title', 'Bene-exclusive')
@section('header')

@endsection














@section('footer')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div id="index-part1-carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="index-part1-carousel-inner">

        <div class="carousel-part1-backgound">
      <img src="{{asset('front/images/home-background-1.png') }}" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-part1-shader">
      <img src="{{asset('front/images/index-part1-backround.png') }}" alt="">
      </div>
      
      <div class="index-slogan">
         <div class="who-we-are"><p>We are Bene-Exclusive.</p></div>
         <div class="our-motto"><p>Your way to comfort, We follow the dream Move with luxury!</p></div>
        <div class="slogan-button">
          <button>
            <p>See more</p>
             <i class="fas fa-arrow-right"></i>
        </button>
       </div>

      </div>
      </div>

       

    </div>

    <div class="carousel-item">
    <div class="index-part1-carousel-inner">

        <div class="carousel-part1-backgound">
      <img src="{{asset('front/images/home-background-1.png') }}" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-part1-shader">
      <img src="{{asset('front/images/index-part1-backround.png') }}" alt="">
      </div>
      
      <div class="index-slogan">
         <div class="who-we-are"><p>We are Bene-Exclusive.</p></div>
         <div class="our-motto"><p>Your way to comfort, We follow the dream Move with luxury!</p></div>
        <div class="slogan-button">
          <button>
            <p>See more</p>
             <i class="fas fa-arrow-right"></i>
        </button>
       </div>

      </div>
      </div>
    </div>

    <div class="carousel-item">
    <div class="index-part1-carousel-inner">

        <div class="carousel-part1-backgound">
      <img src="{{asset('front/images/home-background-1.png') }}" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-part1-shader">
      <img src="{{asset('front/images/index-part1-backround.png') }}" alt="">
      </div>
      
      <div class="index-slogan">
         <div class="who-we-are"><p>We are Bene-Exclusive.</p></div>
         <div class="our-motto"><p>Your way to comfort, We follow the dream Move with luxury!</p></div>
        <div class="slogan-button">
          <button>
            <p>See more</p>
             <i class="fas fa-arrow-right"></i>
        </button>
       </div>

      </div>
      </div>

    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="index-part-1">
  <div class="part-1-middle">
    <div class="part-1-inner">
        <div class="index-about-us-info">
          <div class="index-about-us-header">
            <p>@lang('front.index-about')</p>
          </div>

          <div class="index-about-us-title">
            <p>BENE EXCLUSIVE</p>
          </div>

          <div class="index-about-us-text">
            <p>@lang('front.index-text')</p>
          </div>

          <div class="index-about-us-button">
              <button>
                <p>See more</p>
                <i class="fas fa-arrow-right"></i>
              </button>
          </div>
          
        </div>

        <div class="about-us-video">
          <embed src="https://www.youtube.com/embed/W7vWuPWh4-Y?autoplay=1&mute=1" frameborder="0"></embed>
        </div>
    </div>
  </div>
</div>


<div class="index-part-2">
  <div class="index-part-2-middle">
    <div class="index-part-2-inner">
      <div class="index-news-header">
        <div class="index-news-header-title">
          <p>NEWSROOM</p>
        </div>

        <div class="see-all-button">
          <button>
            <p>See all</p>
            <i class="fas fa-arrow-right"></i>
          </button>
        </div>


      </div>

      
      <div class="index-news-body">
          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/news-1.png') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>February 4, 2022</p>
              </div>

              <h6>BENE EXCLUSIVE ფარიკაობის მსოფლიო ჩემპიონატის...</h6>

              <p>2022 წლის პირველი მასშტაბური საერთაშორისო ტურნირი ფარიკაობაში საქართველოში ტარდება. მსოფლიო თასის გათამაშება თბილისის ოლიმპიურ სასახლეში 14-17 იანვარს გაიმართება...</p>


              <div class="index-read-more">
                <h5>Read more</h5>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>


          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/news-2.png') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>February 4, 2022</p>
              </div>

              <h6>BENE EXCLUSIVE ფარიკაობის მსოფლიო ჩემპიონატის...</h6>

              <p>2022 წლის პირველი მასშტაბური საერთაშორისო ტურნირი ფარიკაობაში საქართველოში ტარდება. მსოფლიო თასის გათამაშება თბილისის ოლიმპიურ სასახლეში 14-17 იანვარს გაიმართება...</p>


              <div class="index-read-more">
                <h5>Read more</h5>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>



          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/news-3.png') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>February 4, 2022</p>
              </div>

              <h6>BENE EXCLUSIVE ფარიკაობის მსოფლიო ჩემპიონატის...</h6>

              <p>2022 წლის პირველი მასშტაბური საერთაშორისო ტურნირი ფარიკაობაში საქართველოში ტარდება. მსოფლიო თასის გათამაშება თბილისის ოლიმპიურ სასახლეში 14-17 იანვარს გაიმართება...</p>


              <div class="index-read-more">
                <h5>Read more</h5>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>



          <div class="index-news-article">
            <div class="index-news-image">
              <img src="{{asset('front/images/news-4.png') }}" alt="">
            </div>

            <div class="index-news-text">
              <div class="news-date">
              <p>February 4, 2022</p>
              </div>

              <h6>BENE EXCLUSIVE ფარიკაობის მსოფლიო ჩემპიონატის...</h6>

              <p>2022 წლის პირველი მასშტაბური საერთაშორისო ტურნირი ფარიკაობაში საქართველოში ტარდება. მსოფლიო თასის გათამაშება თბილისის ოლიმპიურ სასახლეში 14-17 იანვარს გაიმართება...</p>


              <div class="index-read-more">
                <h5>Read more</h5>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>



      </div>
    </div>
  </div>
</div>




<div class="index-part-3">
  <div class="index-part-3-middle">
    <div class="index-part-3-inner">


            <div class="index-autopark-header">
            <div class="index-autopark-title">
          <p>AUTOPARK</p>
        </div>

        <div class="see-all-button">
          <button>
            <p>See all</p>
            <i class="fas fa-arrow-right"></i>
          </button>
        </div>
            </div>



            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div id="index-autopark-carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  </div>
  <div class="carousel-inner">
   <div class="index-autopark-carousel-inner">

        <div class="carousel-item active">
        <div class="index-autopark-carousel-item">
          
        <div class="index-autopark-item-mercedez">
         <img src="{{asset('front/images/autopark-merc.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>Mercedez-Benz</h6></li>
           <li><p>S-class</p></li>
         </ul>
         </div>

            <div class="index-autopark-item-toyota">
         <img src="{{asset('front/images/autopark-land.png') }}" class="d-block w-100" alt="..."> 
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Land Cuiser</p></li>
         </ul>
         </div>

         <div class="index-autopark-item-toyotaS">
         <img src="{{asset('front/images/autopark-toyota.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Camry</p></li>
         </ul>
         </div>

       </div>
        </div>

        <div class="carousel-item">
        <div class="index-autopark-carousel-item">

        <div class="index-autopark-item-mercedez">
         <img src="{{asset('front/images/autopark-merc.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>Mercedez-Benz</h6></li>
           <li><p>S-class</p></li>
         </ul>
         </div>

         <div class="index-autopark-item-toyota">
         <img src="{{asset('front/images/autopark-land.png') }}" class="d-block w-100" alt="..."> 
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Land Cruiser</p></li>
         </ul>
         </div>

         <div class="index-autopark-item-toyotaS">
         <img src="{{asset('front/images/autopark-toyota.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Camry</p></li>
         </ul>
         </div>
       </div>
        </div>

        <div class="carousel-item"> 
          <div class="index-autopark-carousel-item">

          <div class="index-autopark-item-mercedez">
         <img src="{{asset('front/images/autopark-merc.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>Mercedez-Benz</h6></li>
           <li><p>S-class</p></li>
         </ul>
         </div>

         <div class="index-autopark-item-toyota">
         <img src="{{asset('front/images/autopark-land.png') }}" class="d-block w-100" alt="..."> 
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Land Cruiser</p></li>
         </ul>
         </div>

         <div class="index-autopark-item-toyotaS">
         <img src="{{asset('front/images/autopark-toyota.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Camry</p></li>
         </ul>
         </div>
       </div>
       </div>

   </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            
    </div>
  </div>
</div>






<div class="index-part-4">
  <div class="index-part-4-middle">
    <div class="index-part-4-inner">


            <div class="index-rent-header">
            <div class="index-rent-title">
          <p>CAR RENT</p>
        </div>

        <div class="see-all-button-rent">
          <button>
            <p>See all</p>
            <i class="fas fa-arrow-right"></i>
          </button>
        </div>
            </div>



            <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <div id="index-rent-carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  </div>
  <div class="carousel-inner">
   <div class="index-rent-carousel-inner">

        <div class="carousel-item active">
        <div class="index-rent-carousel-item">
          
        <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent1.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>HYUNDAI</h6></li>
           <li><p>Corola Automatic</p></li>
         </ul>
         </div>

         <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent2.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>KIA</h6></li>
           <li><p>Sportage Automatic</p></li>
         </ul>
         </div>

         <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent3.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Santa Fe Automatic</p></li>
         </ul>
         </div>

       </div>
        </div>

        <div class="carousel-item">
        <div class="index-rent-carousel-item">
        <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent1.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>HYUNDAI</h6></li>
           <li><p>Corola Automatic</p></li>
         </ul>
         </div>

         <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent2.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>KIA</h6></li>
           <li><p>Sportage Automatic</p></li>
         </ul>
         </div>  

         <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent3.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Santa Fe Automatic</p></li>
         </ul>
         </div>

       </div>
        </div>

        <div class="carousel-item"> 
          <div class="index-rent-carousel-item">
         <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent1.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>HYUNDAI</h6></li>
           <li><p>Corola Automatic</p></li>
         </ul>
         </div>

         <div class="index-rent-item-toyota">
         <img src="{{asset('front/images/rent2.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>KIA</h6></li>
           <li><p>Sportage Automatic</p></li>
         </ul>
         </div>   

         <div class="index-rent-item-mercedez">
         <img src="{{asset('front/images/rent3.png') }}" class="d-block w-100" alt="...">
         <ul>
           <li><h6>TOYOTA</h6></li>
           <li><p>Santa Fe Automatic</p></li>
         </ul>
         </div>

       </div>
       </div>

   </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
    <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
    <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
    <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
    <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            
    </div>
  </div>
</div>




<div class="index-part-5">
  <div class="part-5-middle">
    <div class="part-5-inner">
      <div class="index-academy-info">
      
          <div class="academy-image-outer">
            <div class="academy-image">
              <div class="academy-background-image">
              <img src="{{asset('front/images/academy-background.png') }}" alt="">
              </div>

              <div class="academy-logo-image">
              <img src="{{asset('front/images/academy-logo.png') }}" alt="">
              </div>

            </div>
          </div>

              <div class="home-academy-text">

                <div class="index-academy-title">
                  <h5>ACADEMY</h5>
                </div>

                <div class="index-academy-text">
                  <p> The new training course at Bene Academy starts on November 10th.<br>
                      Applicants will undergo both theoretical and practical training.<br>
                      The cost of the theoretical course is 400GEL, while the practical course is 600GEL.<br>
                      Join us, there are only 3 places left.<br>
                      For information, inforamtion about you (name, surname, phone number, e-mail) is published at reservations@bene-exclusive.com 
                      In the subject field, enter "Drivers' School". Our manager will contact you the most and talk to select motivated participants.</p>
                </div>

                <div class="index-academy-button">
                    <button>
                      <p>See more</p>
                      <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
              </div>
        </div>

       
    </div>
  </div>
</div>




<div class="index-part-6">
  <div class="part-6-middle">
    <div class="part-6-inner">
        <div class="index-taxi-info">
          

          <div class="index-taxi-title">
            <h2>TAXI</h2>
          </div>

          <div class="index-taxi-text">
            <p> 90% of our fleet is electric vehicles with zero emissions. We have fixed prices guaranteed. You can pay with us at the cash desk,
                or by card, both at the box office and directly with the driver. Airport taxi is available 24/7
                Taxis are available from the airport to the city, as well as from anywhere in Tbilisi to the airport
                Our vehicles have a large luggage compartment, which ensures comfortable transportation
                We offer the latest models of sedans and minivans - Tesla, Mercedes-Benz, Changan and Toyota</p>
          </div>

          <div class="index-taxi-button">
              <button>
                <p>See more</p>
                <i class="fas fa-arrow-right"></i>
              </button>
          </div>
          
        </div>

        <div class="index-taxi-image">
          <img src="{{asset('front/images/taxi-image.png') }}" alt="">
        </div>
    </div>
  </div>
</div>



<div class="index-part-7">
  <div class="part-7-middle">
    <div class="part-7-inner">
        <div class="index-event-header"><p>EVENTS</p></div>

      <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <div id="index-event-carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        </div>
        <div class="carousel-inner">
        <div class="index-event-carousel-inner">

              <div class="carousel-item active">
              <div class="index-event-carousel-item">
                
              <img src="{{asset('front/images/event-2.png') }}" class="d-block w-100" alt="...">

              <img src="{{asset('front/images/event-2.png') }}" class="d-block w-100" alt="...">   

              <img src="{{asset('front/images/event-2.png') }}" class="d-block w-100" alt="...">

            </div>
              </div>

              <div class="carousel-item">
              <div class="index-event-carousel-item">
              <img src="{{asset('front/images/event-3.png') }}" class="d-block w-100" alt="...">

              <img src="{{asset('front/images/event-3.png') }}" class="d-block w-100" alt="...">   

              <img src="{{asset('front/images/event-3.png') }}" class="d-block w-100" alt="...">
            </div>
              </div>

              <div class="carousel-item"> 
                <div class="index-event-carousel-item">
              <img src="{{asset('front/images/event-2.png') }}" class="d-block w-100" alt="...">

              <img src="{{asset('front/images/event-2.png') }}" class="d-block w-100" alt="...">   

              <img src="{{asset('front/images/event-2.png') }}" class="d-block w-100" alt="...">
            </div>
            </div>

        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
          <span class="carousel-control-prev-icon d-none" aria-hidden="true"></span>
          <span  class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-right.png') }}" alt=""></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
          <span class="carousel-control-next-icon d-none" aria-hidden="true"></span>
          <span class="carousel-arrow-icon"><img src="{{asset('front/images/carousel-left.png') }}" alt=""></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
                  
          </div>
        </div>
      </div>



    </div>
  </div>
</div>



<div class="index-part-8">
  <div class="part-8-middle">
    <div class="part-8-inner">
      <div class="index-partners-header"><p>PARTNERS</p></div>

      <div class="index-partners-logo">
        <div><img src="{{asset('front/images/partners-logo-2.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-1.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-2.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-1.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-2.png') }}" alt=""></div>
        <div><img src="{{asset('front/images/partners-logo-1.png') }}" alt=""></div>
      </div>
    </div>
  </div>
</div>

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