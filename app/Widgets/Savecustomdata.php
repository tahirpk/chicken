<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Config;
use DB;
class Savecustomdata extends AbstractWidget
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
                'objectfor' =>0,
                'modulefor' =>0
            ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //
        
        $customfields = DB::table('customfields')->where('module_id',$this->config['moduleid'])->where('object_id', $this->config['objectid'])->get();
        
        return view(Config::get('config.template').".widgets.admin.savecustomdata", [
            'moduleid' => $this->config['moduleid'],'objectid' => $this->config['objectid'],'modulename' => $this->config['modulename'],'objectfor' =>$this->config['objectfor'], 'modulefor' =>$this->config['modulefor']
        ])->withFieldslist($customfields);
        
    }
}