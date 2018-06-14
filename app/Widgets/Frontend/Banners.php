<?php

namespace App\Widgets\Frontend;

use Arrilot\Widgets\AbstractWidget;
use Config;
class Banners extends AbstractWidget
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
        return view(Config::get('config.template') . '.widgets.frontend.banners', [
            'config' => $this->config,
        ]);
        
    }
}