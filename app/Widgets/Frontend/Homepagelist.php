<?php

namespace App\Widgets\Frontend;

use Arrilot\Widgets\AbstractWidget;
use Menu;
use Config;
use News;
use Product;
use Blog;
class Homepagelist extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //
        $news=News::where('status','Active')->orderby('created_at','desc')->limit(12)->get();
        $products=Product::where('status','Active')->orderby('created_at','desc')->limit(12)->get();
        $blogs=Blog::where('status','Active')->orderby('created_at','desc')->limit(12)->get();
        
        return view(Config::get('config.template').".widgets.frontend.homepagelist", [
            'news' => $news, 'products'=>$products, 'blogs'=>$blogs
        ]);
    }
}