<?php

namespace App\Widgets\Frontend;

use Arrilot\Widgets\AbstractWidget;
use Config;
use Page;

class Businessfeatures extends AbstractWidget
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
        $businessfeatures='';
        $page= Page::where('slug','business-features')->first();
        if(count($page)>0){
            $businessfeatures=$page->description;
        }
        
        return view(Config::get('config.template') . '.widgets.frontend.businessfeatures', [
            'businessfeatures' => $businessfeatures,
        ]);
    }
}