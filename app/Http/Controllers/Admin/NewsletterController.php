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
class NewsletterController extends Controller
{
    /* ----------------------------- view category list action --------------------- */
    public function index() {
        if (Permission::hasAccess('view', 'newsletter')) {
            $category = new Category;
            if (Input::get('key')) {
                $category->where('name', 'like', '%' . Input::get('key') . '%');
                $category->where('description', 'like', '%' . Input::get('key') . '%');
            }
            $categories = $category->paginate(20);
            return view(Config::get('config.template') . '.pages.admin.newsletter.list')->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- create category action --------------------- */
    public function create() {
        if (Permission::hasAccess('create', 'newsletter')) {
            $categories = Category::where('parent_id', 0)->get();
            return view(Config::get('config.template') . '.pages.admin.newsletter.create')->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- save category action --------------------- */
    public function store() {
        if (Permission::hasAccess('create', 'newsletter')) {
            $user = Auth::user();
            $all = Input::all();
            $category = new Category;

            if (isset($all['id']) && !empty($all['id'])) {
                $category = Category::find($all['id']);
            } else {
                $category = new Category;
            }
            if (isset($all['name']) && !empty($all['name']))
                $category->name = $all['name'];
            if (isset($all['description']) && !empty($all['description']))
                $category->description = $all['description'];
            if (isset($all['parent_id']) && !empty($all['parent_id']))
                $category->parent_id = $all['parent_id'];
            $category->created_by = $user->id;
            $category->updated_by = $user->id;
            //$category->updatedsfsfsdf_by = $user->id;
            if ($category->save()) {
                Session::flash('message', 'Category successfully saved');
                return Redirect::to('admin/newsletter/list');
            } else {
                Session::flash('message', 'Saving category failed! please try again');
                return Redirect::to('admin/create/newsletter');
            }
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- edit category action --------------------- */
    public function edit($id) {
        if (Permission::hasAccess('edit', 'newsletter')) {
            $categories = Category::where('parent_id', 0)->get();
            $category = Category::where('id', $id)->first();
            return view(Config::get('config.template') . '.pages.admin.newsletter.create')->withCategory($category)->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    public function remove($id) {
        if (Permission::hasAccess('delete', 'newsletter')) {
            $category = Category::find($id);

            if ($category->delete()) {
                Session::flash('message', 'Category successfully removed');
            } else {
                Session::flash('message', 'Category removing failed! please try again');
            }
            return Redirect::to('admin/newsletter/list');
        }
        return Redirect::to('admin/error/404');
    }
}
