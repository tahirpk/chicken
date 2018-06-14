<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table='menues';
    protected $guarded = ['id'];

    public function parent()
    {
        return $this->belongsTo('App\Models\Admin\Menu', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Admin\Menu', 'parent_id');
    }
}
