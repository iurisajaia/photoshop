<?php

namespace App\Http\Controllers;

use App\Title;
use Illuminate\Http\Request;

class TitlesController extends Controller
{

    public function store(Request $request){

        Title::create([
            'title' => $request->title,
            'course_id' => $request->course_id
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
