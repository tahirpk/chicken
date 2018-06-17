<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Permission;
use Config;
use Input;
use Session;
use Redirect;
use Auth;
use Link;
use Assignpermission;
use Role;
use User;
use File;
use Image;
use App\Configuration;
use App\Models\Admin\Customsetting;

class ConfigurationController extends Controller {
    /* ----------------------------- view list action --------------------- */

    public function homepage() {
        if (Permission::hasAccess('view', 'permission')) {
            $configurations = Customsetting::where('setting_type','Homepage')->get();
            $groups = Customsetting::distinct('setting_type')->get();
            

            return view(Config::get('config.template') . '.pages.admin.configuration.list')->withConfigurations($configurations)->withGroups($groups);
        }
        return Redirect::to('admin/error/404');
    }
    public function general() {
        if (Permission::hasAccess('view', 'permission')) {
            $configurations = Customsetting::where('setting_type','General')->get();
            $groups = Customsetting::distinct('setting_type')->get();
            

            return view(Config::get('config.template') . '.pages.admin.configuration.list')->withConfigurations($configurations)->withGroups($groups);
        }
        return Redirect::to('admin/error/404');
    }
    public function smtp() {
        if (Permission::hasAccess('view', 'permission')) {
            $configurations = Customsetting::where('setting_type','SMTP')->get();
            $groups = Customsetting::distinct('setting_type')->get();
            

            return view(Config::get('config.template') . '.pages.admin.configuration.list')->withConfigurations($configurations)->withGroups($groups);
        }
        return Redirect::to('admin/error/404');
    }
    public function social() {
        if (Permission::hasAccess('view', 'permission')) {
            $configurations = Customsetting::where('setting_type','Social Media')->get();
            $groups = Customsetting::distinct('setting_type')->get();
            

            return view(Config::get('config.template') . '.pages.admin.configuration.list')->withConfigurations($configurations)->withGroups($groups);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- create permission action --------------------- */

    public function create() {
        if (Permission::hasAccess('create', 'permission')) {
            return view(Config::get('config.template') . '.pages.admin.permissions.create');
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- Save permission action --------------------- */

    public function store() {

        if (Permission::hasAccess('create', 'permission')) {
            $user = Auth::user();
            $all = Input::all();
            $settings= Customsetting::get();
           // echo '<pre>'; print_r($all);
            $keys=array();
            foreach($all as $key=>$val){
                if($key!='_token'){
                    $keys[]=$key;
                }
                
            }
            foreach($settings as $setting){
                //echo $setting->name."<br />";
                if(in_array($setting->name,$keys)){
                    if($setting->html_control_type=='file'){
                        if($file = Input::file($setting->name)){
                                 
                                $img = Customsetting::find($setting->id);
                                $fileName        = $file->getClientOriginalName();
                                $extension       = $file->getClientOriginalExtension() ?: 'png';
                                $folderName      = '/uploads/configurations/';
                                $destinationPath = public_path() . $folderName;
                                $safeName        = $setting->name.'.'.$extension;
                                
                                @$file->move($destinationPath, $safeName);
                                header ("Connection: close");

                                //delete old pic if exists
                                
                                $img->value=$safeName;
                                $img->save();
                        }
                    }else{
                        Customsetting::where('id',$setting->id)->update(['value'=>$all[$setting->name]]);
                    }
                    
                }
            }
            
            
            
                Session::flash('message', 'Configurations successfully saved');
                return Redirect::to('admin/homepage/settings');
            
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- assign permission action --------------------- */

    public function assign() { 
        if (Permission::hasAccess('create', 'permission')) {
            $assignedroles="";
            $rights=array();
            $modulesarray=array();
            if(Input::get('role')){
                $links = Link::where('status', 'Active')->get();
                $i=0;
                foreach($links as $link){
                    $permissions = Permission::where('status', 'Active')->get();
                    $permissionsarray=array();
                    
                    foreach($permissions as $permission){
                        if($i==0){
                            $modulesarray[]=$permission->display_name;
                        }
                        $ischeck=0;
                        $assignedroles= Assignpermission::where('role_id',Input::get('role'))->where('module_id',$link->id)->where('permission_id',$permission->id)->where('active',1)->first();
                        if($assignedroles){
                            $ischeck=1;
                        }
                        $permissionsarray[]=array('name'=>$permission->display_name, 'id'=>$permission->id,'ischeck'=>$ischeck);
                    }
                    $i++;
                   $rights[]=array('module'=>$link->display_name,'module_id'=>$link->id,'module_name'=>$link->name,'permissions'=>$permissionsarray); 
                }
                $roles = Role::get();
                return view(Config::get('config.template') . '.pages.admin.permissions.assign')->withRoles($roles)->withPermissions($rights)->withRightnames($modulesarray)->withRoleid(Input::get('role'));
            }
            
            
            
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- save assigned permission action --------------------- */

    public function attach() {
        if (Permission::hasAccess('create', 'permission')) {
            $user = Auth::user();
            $all = Input::all();
           // echo '<pre>'; print_r($all);die;
            $roles = Role::where('status', 'Active')->get();
            $links = Link::where('status', 'Active')->get();
            $permissions = Permission::where('status', 'Active')->get();
            foreach ($links as $link) {

                if (isset($all[$link->name])) {
                    foreach ($all[$link->name] as $permissionid) {
                        $alreadyassigned = Assignpermission::where('role_id', $all['roles'])->where('module_id', $link->id)->where('permission_id', $permissionid)->first();
                        if(count($alreadyassigned)>0){
                            Assignpermission::where('role_id', $all['roles'])->where('module_id', $link->id)->where('permission_id', $permissionid)->update(
                                        array(
                                            'active' => 1,
                                            'created_by' => $user->id,
                                            'created_at' => date('Y-m-d H:i:s')
                                        )
                                );
                        }else{
                            Assignpermission::insert(
                                array(
                                    'role_id' => $all['roles'],
                                    'module_id' => $link->id,
                                    'permission_id' => $permissionid,
                                    'active' => 1,
                                    'created_by' => $user->id,
                                    'created_at' => date('Y-m-d H:i:s')
                                )
                        );
                        }
                        
                    }
                }
            }
            Session::flash('message', 'Permission successfully assigned');
            return Redirect::to('admin/permission/assign?role='.$all['roles']);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- edit form action --------------------- */

    public function edit($id) {
        if (Permission::hasAccess('edit', 'permission')) {
            $permission = Permission::where('id', $id)->first();
            return view(Config::get('config.template') . '.pages.admin.permissions.create')->withPermission($permission);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- remove permission action --------------------- */

    public function remove($id) {
        if (Permission::hasAccess('delete', 'permission')) {
            $permission = Permission::find($id);

            if ($permission->delete()) {
                Session::flash('message', 'Permission successfully removed');
            } else {
                Session::flash('message', 'Permisssion removing failed! please try again');
            }
            return Redirect::to('admin/permission/list');
        }
        return Redirect::to('admin/error/404');
    }

}
