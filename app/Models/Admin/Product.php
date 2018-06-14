<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo('App\Models\Admin\Category', 'category_id', 'id');
    }
   public function images(){
        return $this->hasMany('App\Models\Admin\Productimage', 'product_id', 'id')->orderby('created_at','DESC');
    }
    public function mainimage(){
        return $this->hasOne('App\Models\Admin\Productimage', 'product_id', 'id')->select(['image'])->where('ismain','1');
    }
}
