<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use Category;
use Config;
use Input;
use Session;
use Redirect;
use Permission;
use Newscategories;
class NewscategoryController extends Controller
{
    /* ----------------------------- view category list action --------------------- */
    public function index() {
        if (Permission::hasAccess('view', 'newscategory')) {
            $category = new Newscategories;
            if (Input::get('key')) {
                $category->where('name', 'like', '%' . Input::get('key') . '%');
                $category->where('description', 'like', '%' . Input::get('key') . '%');
            }
            $categories = $category->paginate(20);
            return view(Config::get('config.template') . '.pages.admin.newscategory.list')->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- create category action --------------------- */
    public function create() {
        
        // echo '<pre>'; print_r();die;
        if (Permission::hasAccess('create', 'category')) {
            $categories = Newscategories::get();
            return view(Config::get('config.template') . '.pages.admin.newscategory.create')->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- save category action --------------------- */
    public function store() {
        if (Permission::hasAccess('create', 'newscategory')) {
            $user = Auth::user();
            $all = Input::all();
            $category = new Newscategories;

            if (isset($all['id']) && !empty($all['id'])) {
                $category = Newscategories::find($all['id']);
            } 
            
            if (isset($all['name']) && !empty($all['name']))
                $category->name = $all['name'];
            if (isset($all['description']) && !empty($all['description']))
                $category->description = $all['description'];
            
            $category->created_by = $user->id;
            $category->updated_by = $user->id;
            //$category->updatedsfsfsdf_by = $user->id;
            if ($category->save()) {
                Session::flash('message', 'Category successfully saved');
                return Redirect::to('admin/newscategory/list');
            } else {
                Session::flash('message', 'Saving category failed! please try again');
                return Redirect::to('admin/create/newscategory');
            }
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- edit category action --------------------- */
    public function edit($id) {
        if (Permission::hasAccess('edit', 'newscategory')) {
           
            $category = Newscategories::where('id', $id)->first();
            return view(Config::get('config.template') . '.pages.admin.newscategory.create')->withCategory($category);
        }
        return Redirect::to('admin/error/404');
    }

    public function remove($id) {
        if (Permission::hasAccess('delete', 'newscategory')) {
            $category = Newscategories::find($id);

            if ($category->delete()) {
                Session::flash('message', 'Category successfully removed');
            } else {
                Session::flash('message', 'Category removing failed! please try again');
            }
            return Redirect::to('admin/newscategory/list');
        }
        return Redirect::to('admin/error/404');
    }
}
