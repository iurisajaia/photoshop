@extends('layout.admin')
@section('admin')

    <div class="mt-3 mb-3">
        <h3>კურსი</h3>
        <form action="/create-course" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="სათაური" name="title" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="ავტორი" name="author" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="დრო" name="duration" />
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="image" />
            </div>
            <div class="form-group">
                <select name="language">
                    <option value="ქართული">ქართული</option>
                    <option value="ინგლისური">ინგლისური</option>
                    <option value="რუსული">რუსული</option>
                </select>
            </div>
            <button class="btn btn-success">დამატება</button>

        </form>
    </div>

    <div class="mt-3 mb-3">
        <h3>სათაური</h3>
        <form action="/create-title" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="სათაური" name="title" />
            </div>
            <div class="form-group">
                <select name="course_id">
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->title}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success">დამატება</button>

        </form>
    </div>

    <div class="mt-3 mb-3">
        <h3>ვიდეო</h3>
        <form action="/create-link" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="სათაური" name="title" />
            </div>
            <div class="form-group">
                <select name="course_id">
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select name="title_id">
                    @foreach($titles as $title)
                        <option value="{{$title->id}}">{{$title->title}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success">დამატება</button>

        </form>
    </div>
@endsection
