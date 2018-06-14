<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Menu;
use Config;
use Permission;
class Leftmenu extends AbstractWidget
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
        $menutree = Menu::all()->sortBy("sorting_order");

        return view(Config::get('config.template').".widgets.admin.leftmenu", [
            'menues' => $menutree,
        ]);
    }
}