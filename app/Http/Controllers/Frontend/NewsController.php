<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Blog;
use Blogcategory;
use Config;
use Input;
use News;
use Newscategory;
class NewsController extends Controller
{
    public function detail($slug){
        $blog = News::where('slug',$slug)->first();
        
        $categories=Newscategory::where('status','Active')->get();
        return view(Config::get('config.front_template') . '.pages.frontend.news.detail')->withBlog($blog)->withCategories($categories);
    }
    public function index(){
        $category_id=$keyword="";
        if(Input::get('id')){
            $category_id=Input::get('id');
        }
        if(Input::get('search')){
            $keyword=Input::get('search');
        }
            $blog = News::where(function($query) use ($keyword, $category_id) {

                
                    if (!empty($keyword))
                        $query->where('title','like', "%".$keyword."%");

                    if (!empty($category_id)) {
                        $query->where('category_id', $category_id);
                    }

                });
                $blogs = $blog->paginate(10);
        
        $categories=Newscategory::where('status','Active')->get();
        return view(Config::get('config.front_template') . '.pages.frontend.news.index')->withBlogs($blogs)->withCategories($categories);
    }
}
