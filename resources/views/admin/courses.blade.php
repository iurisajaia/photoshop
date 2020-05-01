@extends('layout.admin')
@section('admin')
    @foreach($courses as $course)
        <h3>{{$course->title}}</h3>
        <ul class="list-group">
            @foreach($course->titles as $title)
                <li class="list-group-item">
                    {{$title->title}}
                    <ul class="list-group">
                        @foreach($title->links as $link)
                            <li class="list-group-item">
                                {{$link->title}}
                            </li>
                        @endforeach
                    </ul>
                </li>

            @endforeach
        </ul>
    @endforeach
@endsection
