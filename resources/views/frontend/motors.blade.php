
@extends('frontend/master')

@section('title', 'Bene-Motors')
@section('content')


@endsection

@section('footer')
<div class="academy-page-header">
    <div class="academy-page-header-middle">
        <div class="academy-page-header-inner">
            <div class="academy-page-header-title">
                <p>@lang('front.motors')</p>
            </div>
        </div>
    </div>
</div>

<div class="academy-part-1">
    <div class="academy-part-1-middle">
        <div class="academy-part-1-inner">

            <div class="academy-page-info">

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


          <div class="academy-text-section">
              <div class="academy-title">
                 
              </div>

              <div class="academy-text">
                  <p>
                  @lang('front.academy-part-1')
                  </p>
              </div>
          </div>

            </div>
        </div>
    </div>
</div>

<div class="academy-part-2">
    <div class="academy-part-2-middle">
        <div class="academy-part-2-inner">

            <div class="academy-anything-else">


                <div class="academy-anything-else-info">
                    <div class="anything-else-title">
                        <p>
                            ANYTHING ELSE
                        </p>
                    </div>

                    <div class="anyghing-else-text">
                        <p>
                        "Bene-Exclusive" is a company specializing in logistics working under the umbrella of "Bene-Group".
                         Initially, the services of our company were limited to premium class vehicles, however today "Bene-Ecxlusive" 
                         represents a multi-profile company. Car renting as well as orginizing of Business Projects and Events have been
                         added to our list of services. Exclusive" is a company specializing in logistics working under the
                         umbrella of "Bene-Group". Initially, the services of our company were limited to premium class vehicles,
                         however today "Bene-Ecxlusive" represents a multi-profile company. Car renting as well as orginizing of
                         Business Projects and Events have been added to our list of services.
                        </p>
                    </div>
                    
                </div>

                <div class="anything-else-image">
                    <img src="{{asset('front/images/academy-1.png') }}" alt="">
                </div>
            </div>

        </div>
    </div>
</div>



<div class="academy-part-3">
    <div class="academy-part-3-middle">
        <div class="academy-part-3-inner">

            <div class="academy-anything-else-2">

                <div class="anything-else-2-image">
                    <img src="{{asset('front/images/academy-1.png') }}" alt="">
                </div>

                <div class="academy-anything-else-2-info">
                    <div class="anything-else-2-title">
                        <p>
                            ANYTHING ELSE
                        </p>
                    </div>

                    <div class="anyghing-else-2-text">
                        <p>
                        "Bene-Exclusive" is a company specializing in logistics working under the umbrella of "Bene-Group".
                         Initially, the services of our company were limited to premium class vehicles, however today "Bene-Ecxlusive" 
                         represents a multi-profile company. Car renting as well as orginizing of Business Projects and Events have been
                         added to our list of services. Exclusive" is a company specializing in logistics working under the
                         umbrella of "Bene-Group". Initially, the services of our company were limited to premium class vehicles,
                         however today "Bene-Ecxlusive" represents a multi-profile company. Car renting as well as orginizing of
                         Business Projects and Events have been added to our list of services.
                        </p>
                    </div>
                    
                </div>

            </div>

        </div>
    </div>
</div>







@endsection