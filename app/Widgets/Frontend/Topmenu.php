<?php

namespace App\Widgets\Frontend;

use Arrilot\Widgets\AbstractWidget;
use Menu;
use Config;

class Topmenu extends AbstractWidget
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
        $menutree = Menu::where('showfront',1)->orderby("sorting_order","ASC")->get();
        
        return view(Config::get('config.template').".widgets.frontend.topmenu", [
            'menues' => $menutree,
        ]);
    }
}