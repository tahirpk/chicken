<?php

namespace App\Widgets\Frontend;

use Arrilot\Widgets\AbstractWidget;

class Contentmenu extends AbstractWidget
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

        return view("widgets.frontend.contentmenu", [
            'config' => $this->config,
        ]);
    }
}