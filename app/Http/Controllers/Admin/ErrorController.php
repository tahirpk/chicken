<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Config;

class ErrorController extends Controller
{
    //
    public function index(){
        return view(Config::get('config.template').'.pages.admin.errors.index');
    }
}
