<?php

namespace App;
use Auth;
//use Permission;
use DB;
//use Link;
use Assignpermission;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    static function hasAccess($right,$link){
       
        if (Auth::check()){
            $user = Auth::user();
            $permission=DB::table('permissions')->where('name',$right)->where('status','Active')->first();
            
            if(isset($permission->id)){

                    $link=Link::where('name',$link)->where('status','Active')->first();
                    if(isset($link->id)){
                        $assignpermission=Assignpermission::where('role_id',$user->role_id)->where('module_id',$link->id)->where('permission_id',$permission->id)->where('active',1)->first();
                        if(isset($assignpermission->id))
                            return true;
                    }

            }
        }
        
        return false;
    }
}
