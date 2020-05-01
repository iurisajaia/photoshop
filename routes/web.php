<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Artisan;


//Public Routes
Route::get('/', 'RoutesController@rootPage');
Route::get('/courses', 'RoutesController@coursesPage');
Route::get('/course/{id}', 'RoutesController@singleCoursePage');
Route::get('/download', 'RoutesController@downloadPage');
//Route::get('/editor', 'RoutesController@editorPage');

Route::get('/register' , function(){
   return redirect()->back();
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['admin'])->group(function () {
    Route::get('/admin', 'RoutesController@adminDashboardPage');
    Route::get('/admin/courses', 'RoutesController@adminCoursesPage');
    Route::get('/admin/create-course', 'RoutesController@createCoursePage');

    Route::post('/create-course', 'CoursesController@store');
    Route::post('/create-title', 'TitlesController@store');
    Route::post('/create-link', 'LinksController@store');
});
