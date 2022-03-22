@extends('frontend/master')

@section('title', 'Electric')
@section('content')


@endsection

@section('footer')
<div class="electric-page-header">
    <div class="electric-page-header-middle">
        <div class="electric-page-header-inner">
            <div class="electric-page-header-title">
                <p>@lang('front.electric')</p>
            </div>
        </div>
    </div>
</div>


<div class="electric-part-1">
  <div class="electric-part-1-middle">
    <div class="electric-part-1-inner">
        <div class="electric-about-us-info">
          

          <div class="electric-about-us-title">
           
          </div>

          <div class="electric-about-us-text">
            <p>
              @lang('front.electric-text-1')
            </p>

          </div>

          
          
        </div>

        <div class="electric-about-us-video">
          <img src="{{asset('front/images/abolut.jpg')}}" alt="">
        </div>
    </div>
  </div>
</div>



<div class="electric-page-part-2">
    <div class="electric-page-part-2-middle">
        <div class="electric-page-part-2-inner">
            <div class="electric-page-events">

                <div class="electric-page-events-picture">
                    <img src="{{asset('front/images/about-2.png') }}" alt="">
                </div>


                <div class="electric-page-events-text">
                    <div class="electric-page-company-name">
                        
                    </div>

                    <div class="electric-page-events-title">
                        
                    </div>

                    <div class="electric-page-events-info">
                        <p>
                         @lang('front.electric-text-2')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>












@endsection