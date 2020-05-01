<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;


class CoursesController extends Controller{

    protected $successStatus = 200;
    protected $errorStatus = 401;

    public function store(Request $request){


        $image = $request->image->store('images');

        Course::create([
           'title' => $request->title,
           'author' => $request->author,
           'duration' => $request->duration,
           'image' => $image,
           'language' => $request->language
        ]);

        return redirect()->back();
    }

    public function destroy($id){
        $course = Course::where('id' , $id)->firstOrFail();
        Storage::delete($course->image);
        $course->delete();
        return redirect()->back();
    }
}
