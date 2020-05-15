@extends('layout.app')
@section('content')

    <!-- Page Title -->
    <div class="background-container"></div>
    <!-- end Page Title -->


    <!-- Blog Detail -->
    <div class="hun-section-blog-detail layout-1 img-full">
        <div class="inner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-content">
                        <div class="content-sec">
                            @if($course)
                                <div class="single-post has-post-thumbnail">
                                    <div class="pic-post">
                                        <img style="max-width: 100%;height: 400px; object-fit: contain" src="{{asset('storage/'.$course->image)}}" alt="{{$course->title}}">

                                        <span class="date-post">
										{{date('d-m-Y', strtotime($course->created_at))}}
									</span>
                                    </div>

                                    <div class="head-post">
                                        <h1 class="title-post">
                                            {{$course->title}}
                                        </h1>

                                        <div class="meta-info-post">
										<span class="item-info">
											<i class="ion-ios-person"></i>
											<a href="#">{{$course->author}}</a>
										</span>

                                            <span class="item-info">
											<i class="ion-ios-time"></i>
											<a href="#">{{$course->duration}}</a>
										</span>

                                            <span class="item-info">
											<i class="ion-speakerphone"></i>
											<span>{{$course->language}}</span>
										</span>
                                        </div>
                                    </div>

                                    <div class="content-post hun-content-default">


                                        <div class="hun-section-image-text layout-1 style-2 reverse m-b-130">
                                            <div class="accordion-list js-call-accordion">
                                                @foreach($course->titles as $title)
                                                    <div class="item-list js-dropdown ">
                                                        <h4 class="title-item js-toggle-dropdown">
                                                            {{$title->title}}
                                                        </h4>

                                                        <div class="description-item js-dropdown-content">
                                                            <div id="accordion">
                                                                @foreach($title->links as $link)
                                                                    <div class="card-header" data-toggle="collapse" data-target="#{{$link->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                                        <h6 class="mb-0">
                                                                            {{$link->title}}
                                                                        </h6>
                                                                    </div>
                                                                    <div id="{{$link->id}}" class="url-area collapse hide">
                                                                        <iframe src="{{$link->url}}" width="640" height="364" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-3 col-sidebar js-call-sticky-sidebar">
                        <div class="hun-element-sidebar--type-1">


                            <div class="widget hun-widget-posts">
                                <h3 class="title-widget">
                                    ბოლოს დამატებული
                                </h3>

                                <div class="list-post">
                                    @foreach($courses as $course)
                                        <div class="item-post">
                                            <a href="/course/{{$course->id}}" class="pic-post" style="background-image: url(assets/images/post-05.jpg);"></a>

                                            <div class="text-post">
                                                <h4 class="title-post">
                                                    <a href="/course/{{$course->id}}">
                                                        {{$course->title}}
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Blog Detail -->




@endsection
