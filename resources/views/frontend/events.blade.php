@extends('frontend/master')

@section('title', 'Events')
@section('content')


@endsection

@section('footer')

<div class="events-outer">
    <div class="events-middle">
        <div class="evenrs-inner">



            <div class= "proeqtebi" >
                
                <div class="project">
                    <div class="project-image-1">
                        <img src="{{asset('front/images/proeqti1.jpg') }}" alt="">
                    </div>

                    <div class="project-info">
                        <div class="project-title">
                            <p>მოიარე</p>
                        </div>
                        <div class="project-text">
                            <p>როდესაც განვითარება და განტვირთვა მნიშვნელოვანი როგორც არასდროს.</p>
                        </div>
                        <div class="project-button">
                                <button> 
                                <a href="{{route('frontend.event-moiare')}}">
                                    <p>See More</p>
                                    <img src="{{asset('front/images/arrow-right.png') }}" alt="">
                                    </a>
                                </button>
                        </div>
                    </div>
                </div>


                <div class="project">
                        <div class="project-image-2">
                            <img src="{{asset('front/images/proeqti2.jpg') }}" alt="">
                        </div>

                        <div class="project-info">
                            <div class="project-title">
                                <p>NETWORKING GEORGIA</p>
                            </div>
                            <div class="project-text">
                                <p>პირველი ქართული პროექტი,რომელიც ემსახურება ბიზნეს კონტაქტების გაცვლას არაფორმალურ გარემოში.</p>
                            </div>
                            <div class="project-button">
                                <button> 
                                    <a href="{{route('frontend.event-moiare')}}">
                                    <p>See More</p>
                                    <img src="{{asset('front/images/arrow-right.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                </div>


                <div class="project">
                        <div class="project-image-3">
                            <img src="{{asset('front/images/proeqti3.jpg') }}" alt="">
                        </div>

                        <div class="project-info">
                            <div class="project-title">
                                <p>MERCEDES-BENZ EVENT</p>
                            </div>

                            <div class="project-text">
                                <p>Mercedes-Benz Business EVENT-ბიზნეს ივენთია,რომელიც სხვადასხვა დარგში მოღვაწე კომპანიების წარმატებისკენ განვლილი გზისა და გამოცდილების გაზიარებას ემსახურება.</p>
                            </div>
                            <div class="project-button">
                                <button> 
                                    <a href="{{route('frontend.event-moiare')}}">
                                    <p>See More</p>
                                    <img src="{{asset('front/images/arrow-right.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                </div>


                <div class="project">
                        <div class="project-image-4">
                            <img src="{{asset('front/images/proeqti4.jpg') }}" alt="">
                        </div>

                        <div class="project-info">
                            <div class="project-title">
                                <p>MERCEDES-BENZ BUSSINESS WEEK</p>
                            </div>

                            <div class="project-text">
                                <p>Mercedes-Benz Business Week - არის ბიზნეს ივენთი,რომლის იდეაც კომპანიებისთვის ახალი კონტაქტების მოძიებასა და მაკრო ბიზნესს გარემოში მეტ ჩართულობას ემსახურება.</p>
                            </div>
                            <div class="project-button">
                                <button> 
                                    <a href="{{route('frontend.event-moiare')}}">
                                    <p>See More</p>
                                    <img src="{{asset('front/images/arrow-right.png') }}" alt="">
                                    </a>
                                </button>   
                            </div>
                        </div>
                </div>


                <div class="project">
                         <div class="project-image-5">
                            <img src="{{asset('front/images/proeqti5.jpg') }}" alt="">
                        </div>

                        <div class="project-info">
                            <div class="project-title">
                                <p>DISTRIBUTION AND LOGISTICS FORUM</p>
                            </div>
                            <div class="project-text">
                                <p>Distribution and Logistics Forum - ყოველწლიური ფორუმია,რომელიც ლოგისტიკურ დარგში არსებული პრობლემების გადაწყვეტას და სამომავლო გეგმების დასახვას ემსახურება.</p>
                            </div>
                            
                            <div class="project-button">
                                <button> 
                                     <a href="{{route('frontend.event-moiare')}}">
                                    <p>See More</p>
                                    <img src="{{asset('front/images/arrow-right.png') }}" alt="">
                                    </a>
                                </button>
                            </div>
                        </div>
                </div>
            </div>



        </div>
    </div>
</div>









@endsection