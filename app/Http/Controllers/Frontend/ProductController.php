<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Category;
use Config;
use Input;
use Product;
use Productcategory;


class ProductController extends Controller
{
    public function detail($slug){
        $blog = Product::where('slug',$slug)->first();
        
        $categories=Category::where('status','Active')->get();
        return view(Config::get('config.front_template') . '.pages.frontend.products.detail')->withBlog($blog)->withCategories($categories);
    }
    public function index(){
        $category_id=$keyword="";
        if(Input::get('id')){
            $category_id=Input::get('id');
        }
        if(Input::get('search')){
            $keyword=Input::get('search');
        }
            $blog = Product::where(function($query) use ($keyword, $category_id) {
                
                    if (!empty($keyword))
                        $query->where('title','like', "%".$keyword."%");

                    if (!empty($category_id)) {
                        $query->where('category_id', $category_id);
                    }

                });
                $blogs = $blog->paginate(10);
       
        $categories=Category::where('status','Active')->get();
        
        return view(Config::get('config.front_template') . '.pages.frontend.products.index')->withProducts($blogs)->withCategories($categories);
    }
    public function categories(){
        $categories = Category::get();
        return view(Config::get('config.front_template') . '.pages.frontend.products.categories')->withCategories($categories);
    }
}
