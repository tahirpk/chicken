<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Config;
use App\Slider;
use App\Sliderimage;
use Permission;
use Image;
use File;
use Auth;
use Input;
use Session;
use Redirect;
class SliderController extends Controller
{
    //
    public function index(){
        $sliders = Slider::paginate(20);
        return view(Config::get('config.template') . '.pages.admin.slider.list')->withSliders($sliders);
    }
    public function indeximage($id){
        $sliderimages = Sliderimage::where('slider_id',$id)->paginate(20);
        $slider = Slider::where('id',$id)->first();
        return view(Config::get('config.template') . '.pages.admin.slider.imageslist')->withSlider($slider)->withSliderimages($sliderimages);
    }
    /* ----------------------------- create category action --------------------- */
    public function create() {
        
        if (Permission::hasAccess('create', 'news')) {
            
            return view(Config::get('config.template') . '.pages.admin.slider.create');
        }
        return Redirect::to('admin/error/404');
    }
    public function createimages($id) {
        
        if (Permission::hasAccess('create', 'news')) {
            
            return view(Config::get('config.template') . '.pages.admin.slider.createimages')->withId($id);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- save category action --------------------- */
    public function storeimages(){
        if (Permission::hasAccess('create', 'news')) {
            $user = Auth::user();
            $all = Input::all();
           
            
            $news = new Sliderimage;

            if (isset($all['img_id']) && !empty($all['img_id'])) {
                $news = Sliderimage::find($all['img_id']);
            } 
           
            foreach(Input::file('images') as $file){
                if(!empty($file)){
                    $fileName        = $file->getClientOriginalName();
                     $extension       = $file->getClientOriginalExtension() ?: 'png'; 
                    $folderName      = '/uploads/slider/';
                    $destinationPath = public_path() . $folderName;
                    $safeName        = str_random(10).'.'.$extension;
                    $file->move($destinationPath, $safeName);

                    //delete old pic if exists
                    if(File::exists(public_path() . $folderName.$news->image))
                    {
                        File::delete(public_path() . $folderName.$news->image);
                    }

                    //save new file path into db
                    $news->image   = $safeName;
                    $news->slider_id = $all['slider_id'];
                   
                    $news->created_at = date('Y-m-d H:i:s');
                    $news->updated_at = date('Y-m-d H:i:s');
                    $news->save();
                }
                
                Session::flash('message', 'News successfully saved');
                return Redirect::to('admin/slider/image/list/'.$all['slider_id']);
            }
            
            //$category->updatedsfsfsdf_by = $user->id;
           
                Session::flash('message', 'Saving news failed! please try again');
                return Redirect::to('admin/create/slider');
            
        }
        return Redirect::to('admin/error/404');
    }
    public function store() {
        if (Permission::hasAccess('create', 'news')) {
            $user = Auth::user();
            $all = Input::all();
           
            
            $news = new Slider;

            if (isset($all['id']) && !empty($all['id'])) {
                $news = Slider::find($all['id']);
            } 
           
            if (isset($all['slider_key']) && !empty($all['slider_key'])){
                $news->slider_key = $all['slider_key'];
                
            }
                
            if (isset($all['description']) && !empty($all['description']))
                $news->description = $all['description'];
            if (isset($all['heading']) && !empty($all['heading']))
                $news->heading = $all['heading'];
            if (isset($all['button_one']) && !empty($all['button_one']))
                $news->button_one = $all['button_one'];
            if (isset($all['button_one_link']) && !empty($all['button_one_link']))
                $news->button_one_link = $all['button_one_link'];
            if (isset($all['button_two']) && !empty($all['button_two']))
                $news->button_two = $all['button_two'];
            if (isset($all['button_two_link']) && !empty($all['button_two_link']))
                $news->button_two_link = $all['button_two_link'];
            if (isset($all['button_three']) && !empty($all['button_three']))
                $news->button_three = $all['button_three'];
            if (isset($all['button_three_link']) && !empty($all['button_three_link']))
                $news->button_three_link = $all['button_three_link'];
            
            $news->created_by = $user->id;
            $news->created_at = date('Y-m-d H:i:s');
            $news->updated_at = date('Y-m-d H:i:s');
            //$category->updatedsfsfsdf_by = $user->id;
            if ($news->save()) {
                Session::flash('message', 'News successfully saved');
                return Redirect::to('admin/slider/list');
            } else {
                Session::flash('message', 'Saving news failed! please try again');
                return Redirect::to('admin/create/slider');
            }
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- edit category action --------------------- */
    public function edit($id) {

        if (Permission::hasAccess('edit', 'news')) {
            
            $news = Slider::where('id', $id)->first();
            return view(Config::get('config.template') . '.pages.admin.slider.create')->withNews($news);
        }
        return Redirect::to('admin/error/404');
    }

    public function remove($id) {
        if (Permission::hasAccess('delete', 'news')) {
            $news = Slider::find($id); dd($id);

            if ($news->delete()) {
                Sliderimage::where('slider_id',$id)->delete();
                Session::flash('message', 'Slider successfully removed');
            } else {
                Session::flash('message', 'News removing failed! please try again');
            }
            return Redirect::to('admin/slider/list');
        }
        return Redirect::to('admin/error/404');
    }
    public function removeimage($id) {
        if (Permission::hasAccess('delete', 'news')) {
            $news = Sliderimage::find($id);

            if ($news->delete()) {
                Session::flash('message', 'Slider image successfully removed');
            } else {
                Session::flash('message', 'News removing failed! please try again');
            }
            return Redirect::to('admin/slider/image/list');
        }
        return Redirect::to('admin/error/404');
    }
}
