<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{

    public function store(Request $request)
    {
        Link::create([
            'title' => $request->title,
            'course_id' => $request->course_id,
            'title_id' => $request->title_id
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
