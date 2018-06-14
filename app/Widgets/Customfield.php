<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Config;
use DB;
class Customfield extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
        protected $config = [
                'moduleid' => 9,
                'objectid' => 0,
                'modulename' => 'product',
                
            ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //
        $customfields = DB::table('customfields')->where('module_id',$this->config['moduleid'])->where('object_id', $this->config['objectid'])->get();
        //echo '<pre>'; print_r($customfields); die;
        return view(Config::get('config.template').".widgets.admin.customfield", [
            'moduleid' => $this->config['moduleid'],'objectid' => $this->config['objectid'],'modulename' => $this->config['modulename'],
        ])->withFieldslist($customfields);
        
    }
}