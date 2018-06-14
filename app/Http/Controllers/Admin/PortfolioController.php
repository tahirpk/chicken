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
use Portfolio;
use Portalbranch;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /* ----------------------------- view category list action --------------------- */
    public function index() {
        if (Permission::hasAccess('view', 'category')) {
            $portal = new Portfolio;
            if (Input::get('key')) {
                $portal->where('name', 'like', '%' . Input::get('key') . '%');
                $portal->where('description', 'like', '%' . Input::get('key') . '%');
            }
            $portals = $portal->paginate(20);
            return view(Config::get('config.template') . '.pages.admin.portals.list')->withPortals($portals);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- create category action --------------------- */
    public function create() {
        if (Permission::hasAccess('create', 'category')) {
            $categories = Portalbranch::get();
            
            return view(Config::get('config.template') . '.pages.admin.portals.create')->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- save category action --------------------- */
    public function store() {
        if (Permission::hasAccess('create', 'category')) {
            $user = Auth::user();
            $all = Input::all();
            $portal = new Portfolio;

            if (isset($all['id']) && !empty($all['id'])) {
                $portal = Portfolio::find($all['id']);
            } else {
                $portal = new Portfolio;
            }
            if (isset($all['name']) && !empty($all['name']))
                $portal->title = $all['name'];
            if (isset($all['matatags']) && !empty($all['matatags']))
                $portal->matatags = $all['matatags'];
            if (isset($all['description']) && !empty($all['description']))
                $portal->description = $all['description'];
            if (isset($all['parent_id']) && !empty($all['parent_id']))
                $portal->category_id = $all['parent_id'];
            $portal->created_by = $user->id;
            $portal->updated_by = $user->id;
            //$category->updatedsfsfsdf_by = $user->id;
            if ($portal->save()) {
                Session::flash('message', 'Portal successfully saved');
                return Redirect::to('admin/portfolio/list');
            } else {
                Session::flash('message', 'Saving portal failed! please try again');
                return Redirect::to('admin/create/portfolio');
            }
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- edit category action --------------------- */
    public function edit($id) {
        if (Permission::hasAccess('edit', 'category')) {
            $categories = Category::where('parent_id', 0)->get();
            $portal = Portfolio::where('id', $id)->first();
            return view(Config::get('config.template') . '.pages.admin.portals.create')->withPortal($portal)->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    public function remove($id) {
        if (Permission::hasAccess('delete', 'category')) {
            $portal = Portfolio::find($id);

            if ($portal->delete()) {
                Session::flash('message', 'Portal successfully removed');
            } else {
                Session::flash('message', 'Portal removing failed! please try again');
            }
            return Redirect::to('admin/portfolio/list');
        }
        return Redirect::to('admin/error/404');
    }
}
