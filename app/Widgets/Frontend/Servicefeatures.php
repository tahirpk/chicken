<?php

namespace App\Widgets\Frontend;

use Arrilot\Widgets\AbstractWidget;
use Config;
use Page;

class Servicefeatures extends AbstractWidget
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
        $page= Page::where('slug','service-features')->first();
        if(isset($page->id)){
            $businessfeatures=$page->description;
        }
        
        return view(Config::get('config.template') . '.widgets.frontend.servicefeatures', [
            'servicefeatures' => $businessfeatures,
        ]);
    }
}