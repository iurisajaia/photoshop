<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $fillable = [ 'title'  , 'course_id'];

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function links()
    {
        return $this->hasMany('App\Link');
    }


}
