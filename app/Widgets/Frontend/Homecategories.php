<?php

namespace App\Widgets\Frontend;

use Arrilot\Widgets\AbstractWidget;
use Config;
use Productcategory;
class Homecategories extends AbstractWidget
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
        $categories = Productcategory::where()->get();
         return view(Config::get('config.template') .".widgets.frontend.homecategories", [
            'config' => $this->config,
        ]);
        
    }
}