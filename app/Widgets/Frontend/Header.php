<?php

namespace App\Widgets\Frontend;

use Arrilot\Widgets\AbstractWidget;
use Menu;
use Config;
use App\Models\Admin\Customsetting;
class Header extends AbstractWidget
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
        $logo=Customsetting::where('name','logo')->first();
        $email=Customsetting::where('name','contact_email')->first();
        $contact=Customsetting::where('name','contactaddress')->first();
        $sociallinks=Customsetting::where('setting_type','Social Media')->get();
        
        
        return view(Config::get('config.front_template').".widgets.frontend.header", [
            'logo' => $logo->value, 'email'=>$email->value, 'contact'=>$contact->value, 'sociallinks'=>$sociallinks
        ]);
    }
}