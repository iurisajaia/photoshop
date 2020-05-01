<?php

namespace App\Http\Controllers;

use App\Course;
use App\Title;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function rootPage(){
        $courses = Course::orderBy('id', 'desc')->take(3)->get();

        return view('welcome')->with(['courses' => $courses]);
    }

    public function coursesPage(){
        $courses = Course::orderBy('id' , 'desc')->get();

        return view('courses')->with(['courses' => $courses]);
    }

    public function singleCoursePage($id){

        $course = Course::with('titles.links')->where('id', $id)->first();

        $courses = Course::orderBy('id', 'desc')->take(3)->get();

        $data = [
            'courses' => $courses,
            'course' => $course
        ];
        return view('course')->with($data);
    }

    public function editorPage(){
        return view('editor');
    }

    public function downloadPage(){
        return view('download');
    }

    public function adminDashboardPage(){
        return view('admin.dashboard');
    }

    public function adminCoursesPage(){
        $courses = Course::with('titles.links')->get();

        return view('admin.courses')->with(['courses' => $courses]);
    }

    public function createCoursePage(){
        $courses = Course::all();
        $titles = Title::all();

        $data = [
            'courses' => $courses,
            'titles' => $titles
        ];

        return view('admin.create-course')->with($data);
    }
}
