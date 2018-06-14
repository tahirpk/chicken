<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Auth;
use Category;
use Config;
use Input;
use Session;
use Redirect;
use Permission;
use Blogcategory;
use Illuminate\Http\Request;

class BlogcategoryController extends Controller
{
    /* ----------------------------- view category list action --------------------- */
    public function index() {
        if (Permission::hasAccess('view', 'category')) {
            $category = new Blogcategory;
            if (Input::get('key')) {
                $category->where('name', 'like', '%' . Input::get('key') . '%');
                $category->where('description', 'like', '%' . Input::get('key') . '%');
            }
            $categories = $category->paginate(20);
            return view(Config::get('config.template') . '.pages.admin.blogcategory.list')->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- create category action --------------------- */
    public function create() {
        if (Permission::hasAccess('create', 'category')) {
            
            return view(Config::get('config.template') . '.pages.admin.blogcategory.create');
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- save category action --------------------- */
    public function store() {
        if (Permission::hasAccess('create', 'category')) {
            $user = Auth::user();
            $all = Input::all();
            $category = new Blogcategory;

            if (isset($all['id']) && !empty($all['id'])) {
                $category = Blogcategory::find($all['id']);
            }
            if (isset($all['name']) && !empty($all['name'])){
                $category->name = $all['name'];
                $category->slug = str_slug($all['name'], '-');
            }
                
            if (isset($all['description']) && !empty($all['description']))
                $category->description = $all['description'];
            if (isset($all['matatags']) && !empty($all['matatags']))
                $category->matatags = $all['matatags'];
            $category->created_by = $user->id;
            $category->updated_by = $user->id;
            //$category->updatedsfsfsdf_by = $user->id;
            if ($category->save()) {
                Session::flash('message', 'Category successfully saved');
                return Redirect::to('admin/blogcategory/list');
            } else {
                Session::flash('message', 'Saving category failed! please try again');
                return Redirect::to('admin/create/blogcategory');
            }
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- edit category action --------------------- */
    public function edit($id) {
        if (Permission::hasAccess('edit', 'blogcategory')) {
           
            $category = Blogcategory::where('id', $id)->first();
            return view(Config::get('config.template') . '.pages.admin.blogcategory.create')->withCategory($category);
        }
        return Redirect::to('admin/error/404');
    }

    public function remove($id) {
        if (Permission::hasAccess('delete', 'blogcategory')) {
            $category = Blogcategory::find($id);

            if ($category->delete()) {
                Session::flash('message', 'Category successfully removed');
            } else {
                Session::flash('message', 'Category removing failed! please try again');
            }
            return Redirect::to('admin/blogcategory/list');
        }
        return Redirect::to('admin/error/404');
    }
}
