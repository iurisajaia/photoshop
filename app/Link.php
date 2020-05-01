<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [ 'title' , 'title_id' , 'course_id'];

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function title()
    {
        return $this->belongsTo('App\Course');
    }



}
