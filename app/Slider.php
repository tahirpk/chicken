<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public function images(){
        return $this->hasMany('App\Sliderimage', 'slider_id', 'id');
    }
   
}
