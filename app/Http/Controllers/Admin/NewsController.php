<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Auth;
use Newscategories;
use Config;
use Input;
use Session;
use Redirect;
use Permission;
use Image;
use File;
use News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /* ----------------------------- view category list action --------------------- */
    public function index() {
        if (Permission::hasAccess('view', 'news')) {
            $news = new News;
            $perpage=20;
            if (Input::get('perpage')) {
                $perpage=Input::get('perpage');
            }
            if (Input::get('key')) {
                
                $news->where('name', 'like', '%' . Input::get('key') . '%');
                $news->where('description', 'like', '%' . Input::get('key') . '%');
            }
            $newslist = $news->paginate($perpage);
            return view(Config::get('config.template') . '.pages.admin.news.list')->withNewslist($newslist);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- create category action --------------------- */
    public function create() {
        
        if (Permission::hasAccess('create', 'news')) {
            $categories = Newscategories::get();
            return view(Config::get('config.template') . '.pages.admin.news.create')->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- save category action --------------------- */
    public function store() {
        if (Permission::hasAccess('create', 'news')) {
            $user = Auth::user();
            $all = Input::all();
           
            
            $news = new News;

            if (isset($all['id']) && !empty($all['id'])) {
                $news = News::find($all['id']);
            } 
            if($file = Input::file('image')){
                $fileName        = $file->getClientOriginalName();
                $extension       = $file->getClientOriginalExtension() ?: 'png';
                $folderName      = '/uploads/news/';
                $destinationPath = public_path() . $folderName;
                $safeName        = str_random(10).'.'.$extension;
                $file->move($destinationPath, $safeName);

                //delete old pic if exists
                if(File::exists(public_path() . $folderName.$news->pictue))
                {
                    File::delete(public_path() . $folderName.$news->pictue);
                }

                //save new file path into db
                $news->picture   = $safeName;
                
            }
            if (isset($all['name']) && !empty($all['name'])){
                $news->title = $all['name'];
                $news->slug = str_slug($all['name'], '-');
            }
                
            if (isset($all['short_description']) && !empty($all['short_description']))
                $news->short_description = $all['short_description'];
            if (isset($all['description']) && !empty($all['description']))
                $news->description = $all['description'];
            if (isset($all['parent_id']) && !empty($all['parent_id']))
                $news->category_id = $all['parent_id'];
            $news->created_by = $user->id;
            $news->updated_by = $user->id;
            //$category->updatedsfsfsdf_by = $user->id;
            if ($news->save()) {
                Session::flash('message', 'News successfully saved');
                return Redirect::to('admin/news/list');
            } else {
                Session::flash('message', 'Saving news failed! please try again');
                return Redirect::to('admin/create/news');
            }
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- edit category action --------------------- */
    public function edit($id) {
        if (Permission::hasAccess('edit', 'news')) {
            $categories = Newscategories::get();
            $news = News::where('id', $id)->first();
            return view(Config::get('config.template') . '.pages.admin.news.create')->withNews($news)->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    public function remove($id) {
        if (Permission::hasAccess('delete', 'news')) {
            $news = News::find($id);

            if ($news->delete()) {
                Session::flash('message', 'News successfully removed');
            } else {
                Session::flash('message', 'News removing failed! please try again');
            }
            return Redirect::to('admin/news/list');
        }
        return Redirect::to('admin/error/404');
    }
}
