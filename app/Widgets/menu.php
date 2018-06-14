<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Permission;
//use Menu;
class menu extends AbstractWidget
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
        $menutree = Menu::all();

        return view(Config::get('config.template')."widgets.admin.menu", [
            'config' => $this->config,
        ]);
    }
}