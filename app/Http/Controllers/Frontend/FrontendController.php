<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Config;
use Portfolio;
use Projectcategory;
use Project;
use App\Models\Admin\News;
use App\Models\Admin\Category;
use Portalbranch;
use App\Configuration;
use App\Slider;
use App\Sliderimage;
use App\Models\Admin\Page;
class FrontendController extends Controller
{
    
    public function index(){
       
        $about= Page::where('slug','we-are-farm-fresh')->first();
        $categories =   Category::limit(6)->orderby('created_at','DESC')->get();
        $newses =   News::limit(3)->orderby('created_at','DESC')->get();
        $slider     =   Slider::where('slider_key','home')->first();
        $slider2     =   Slider::where('slider_key','home-2')->first();
        return view(Config::get('config.front_template') . '.pages.frontend.home.index')->withAboutus($about)->withSlider($slider)->withSlider2($slider2)->withCategories($categories)->withNewses($newses);
    }
    
    public function attach(){
        
    }
}
