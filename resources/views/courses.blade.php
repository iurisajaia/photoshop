@extends('layout.app')
@section('content')

    <!-- Card -->
    <div class="hun-section-card layout-1 set-bg-light clip-top-bg pt-5">
        <div class="inner-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 pb-0">
                        <div class="hun-element-heading--type-1 align-center">
                            <h3 class="title">
                                კურსები
                            </h3>

                            <div class="description">
                                ლორემ იპსუმ გავაანალიზებდი უცნაურ დაედგინა გრავიურებს ნეკნები, ფრაზაც ჰენკი ერგება.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    @foreach($courses as $course)
                        <div class="col-md-10 col-lg-4">
                        <div class="item-card">
                            <div class="pic-card" style="height: 300px;">
                                <a href="/course/{{$course->id}}">
                                    <img  src="{{asset('storage/'.$course->image)}}" alt="{{$course->title}}">
                                </a>
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

@endsection
