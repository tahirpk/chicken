<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Auth;
use Category;
use Config;
use Input;
use Session;
use Redirect;
use App\Permission;
use Page;
use Image;
use File;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /* ----------------------------- view category list action --------------------- */
    public function index() {
        if (Permission::hasAccess('view', 'page')) {
            $page = new Page;
            if (Input::get('key')) {
                $page->where('title', 'like', '%' . Input::get('key') . '%');
                $page->where('description', 'like', '%' . Input::get('key') . '%');
            }
            $pages = $page->paginate(20);
            return view(Config::get('config.template') . '.pages.admin.contents.list')->withPages($pages);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- create category action --------------------- */
    public function create() {
        
        if (Permission::hasAccess('create', 'page')) {
            $categories = Category::where('parent_id', 0)->get();
            return view(Config::get('config.template') . '.pages.admin.contents.create')->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- save category action --------------------- */
    public function store() {
        if (Permission::hasAccess('create', 'page')) {
            $user = Auth::user();
            $all = Input::all();
            $category = new Category;

            if (isset($all['id']) && !empty($all['id'])) {
                $page = Page::find($all['id']);
            } else {
                $page = new Page;
                $page->slug = str_slug($all['name'], '-');
            }
            if (isset($all['name']) && !empty($all['name'])){
                $page->title = $all['name'];
                
            }
            if (isset($all['matatag']) && !empty($all['matatag']))
                $page->matatag = $all['matatag'];
            if (isset($all['description']) && !empty($all['description']))
                $page->description = $all['description'];
            if (isset($all['short_description']) && !empty($all['short_description']))
                $page->short_description = $all['short_description'];
            if($file = Input::file('image')){
                $fileName        = $file->getClientOriginalName();
                $extension       = $file->getClientOriginalExtension() ?: 'png';
                $folderName      = '/uploads/pages/';
                $destinationPath = public_path() . $folderName;
                $safeName        = str_random(10).'.'.$extension;
                $file->move($destinationPath, $safeName);

                //delete old pic if exists
                if(File::exists(public_path() . $folderName.$page->pictue))
                {
                    File::delete(public_path() . $folderName.$page->pictue);
                }

                //save new file path into db
                $page->picture   = $safeName;
                
            }
            $page->created_by = $user->id;
            $page->updated_by = $user->id;
            //$category->updatedsfsfsdf_by = $user->id;
            if ($page->save()) {
                Session::flash('message', 'Page successfully saved');
                return Redirect::to('admin/page/list');
            } else {
                Session::flash('message', 'Saving page failed! please try again');
                return Redirect::to('admin/create/page');
            }
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- edit category action --------------------- */
    public function edit($id) {
        if (Permission::hasAccess('edit', 'page')) {
            
            $page = Page::where('id', $id)->first();
            return view(Config::get('config.template') . '.pages.admin.contents.create')->withPage($page);
        }
        return Redirect::to('admin/error/404');
    }

    public function remove($id) {
        if (Permission::hasAccess('delete', 'page')) {
            $page = Page::find($id);

            if ($page->delete()) {
                Session::flash('message', 'Page successfully removed');
            } else {
                Session::flash('message', 'Page removing failed! please try again');
            }
            return Redirect::to('admin/page/list');
        }
        return Redirect::to('admin/error/404');
    }
}
