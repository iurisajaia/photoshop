@extends('layout.app')
@section('content')

<!-- Main Slider -->
<div class="hun-section-mainslider layout-1 mb-5">
    <div class="inner-section">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6 col-text">
                    <div class="text-slider">
                        <h1 class="title-slider">
                            გრაფიკული დიზაინის კურსები
                        </h1>

                        <div class="description-slider">
                            შეარჩიე სასურველი კურსი უფასოდ და შეიძინე ახალი პროფესია სახლიდან გაუსვლელად!
                        </div>

                        <div class="buttons-slider">
                            <a href="/courses" class="btn-slide fill-style">
                                კურსები
                            </a>

                            <a href="/download" class="btn-slide border-style">
                                პროგრამები
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-pic">
                    <div class="pic-slider">
                        <div class="inner-pic">
                            <div class="slide-pic js-call-slick">
                                <div class="slide-slick" data-slick='{"fade": true, "speed": 800, "dots": false, "arrows": true, "autoplay": true, "autoplaySpeed": 5000, "infinite": true, "slidesToShow": 1, "slidesToScroll": 1}'>

                                    <div class="item-slick" style="background-image: url(assets/images/single-jpg-08.png)"></div>

                                    <div class="item-slick" style="background-image: url(assets/images/single-jpg-05.png)"></div>

                                    <div class="item-slick" style="background-image: url(assets/images/single-jpg-03.png)"></div>
                                </div>

                                <div class="arrows-slick">
                                    <a class="item-arrow prev-slick"></a>
                                    <a class="item-arrow next-slick"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end Main Slider -->

<!-- Card -->
<div class="hun-section-card layout-1 set-bg-light clip-top-bg pt-5 mt-5">
    <div class="inner-section">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($courses as $course)
                    <div class="col-md-10 col-lg-4">
                    <div class="item-card">
                        <div class="pic-card">
                            <a href="/course/{{$course->id}}"><img src="assets/images/card-01.jpg" alt="IMG"></a>


                        </div>

                        <div class="text-card">
                            <h4 class="title-card">
                                <a href="/course/{{$course->id}}">{{$course->title}}</a>
                            </h4>

                            <a href="/course/{{$course->id}}" class="link-card">
                                სრულად
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- end Card -->

@endsection
