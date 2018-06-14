<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){
        return $this->hasMany('App\Models\Admin\Product', 'category_id', 'id')->limit(10)->orderby('created_at','DESC');
    }
}
