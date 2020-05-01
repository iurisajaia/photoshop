<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [ 'title' , 'author', 'duration' , 'image' , 'url' , 'language'];

    public function links()
    {
        return $this->hasMany('App\Link');
    }

    public function titles()
    {
        return $this->hasMany('App\Title');
    }
}
