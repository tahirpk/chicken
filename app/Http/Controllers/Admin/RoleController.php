<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Role;
use Config;
use Input;
use Session;
use Redirect;
use Auth;
use Permission;

class RoleController extends Controller
{
    //
    public function index(){
        if(Permission::hasAccess('view','role')){
            $role = new Role;
            if(Input::get('key'))
            {
                $role->where('name','like','%'.Input::get('key').'%');
                $role->where('display_name','like','%'.Input::get('key').'%');
                $role->where('description','like','%'.Input::get('key').'%');
            }
            $roles=$role->paginate(20);
            return view(Config::get('config.template').'.pages.admin.roles.list')->withRoles($roles);
        }
        return Redirect::to('admin/error/404');
    }
    public function create(){
        if(Permission::hasAccess('create','role')){
            return view(Config::get('config.template').'.pages.admin.roles.create');
        }
        return Redirect::to('admin/error/404');
    }
    public function store(){
        if(Permission::hasAccess('create','role')){
            $user = Auth::user();
            $all=Input::all();


            if(isset($all['id']) && !empty($all['id'])){
                $role = new Role;
                $role = Role::find($all['id']);

            }else{
                $role = new Role;
            }
             if(isset($all['name']) && !empty($all['name']))
                    $role->name = $all['name'];
             if(isset($all['display_name']) && !empty($all['display_name']))
                    $role->name = $all['display_name'];
                if(isset($all['description']) && !empty($all['description']))
                    $role->description = $all['description'];

            $role->created_by = $user->id;
            $role->updated_by = $user->id;
            //$category->updatedsfsfsdf_by = $user->id;
            if($role->save()){
                Session::flash('message', 'Role successfully saved');
                return Redirect::to('admin/role/list');
            }else{
                Session::flash('message', 'Saving role failed! please try again');
                return Redirect::to('admin/create/role');
            }
        
        }
        return Redirect::to('admin/error/404');
    }
    public function edit($id){
        if(Permission::hasAccess('edit','role')){
            $role=Role::where('id',$id)->first();
            return view(Config::get('config.template').'.pages.admin.roles.create')->withRole($role);
        }
        return Redirect::to('admin/error/404');
    }
    public function remove($id){
        if(Permission::hasAccess('delete','role')){
            $category = Role::find($id);

            if($category->delete()){
                Session::flash('message', 'Role successfully removed');

            }else{
                Session::flash('message', 'Role removing failed! please try again');

            }
            return Redirect::to('admin/role/list');
        }
        return Redirect::to('admin/error/404');
    }
    
}
