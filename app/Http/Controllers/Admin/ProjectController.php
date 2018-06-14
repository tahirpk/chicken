<?php

namespace App\Http\Controllers\Admin;
use Auth;
use Project;
use Config;
use Input;
use Session;
use Redirect;
use Permission;
use Portfolio;
use Portalbranch;
use Projectcategory;
use Portalimage;
use File;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
     /* ----------------------------- view category list action --------------------- */
    public function index() {
        if (Permission::hasAccess('view', 'category')) {
            $portal = new Project;
            if (Input::get('key')) {
                $portal->where('name', 'like', '%' . Input::get('key') . '%');
                $portal->where('description', 'like', '%' . Input::get('key') . '%');
            }
            $portals = $portal->paginate(20);
            return view(Config::get('config.template') . '.pages.admin.projects.list')->withPortals($portals);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- create category action --------------------- */
    public function create() {
        if (Permission::hasAccess('create', 'category')) {
            $categories = Portalbranch::get();
            
            return view(Config::get('config.template') . '.pages.admin.projects.create')->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- save category action --------------------- */
    public function store() {
        if (Permission::hasAccess('create', 'category')) {
            $user = Auth::user();
            $all = Input::all();
           
            $data=array();
            
            $projectid="";
            
            if (isset($all['name']) && !empty($all['name']))
                $data['title'] = $all['name'];
            if (isset($all['description']) && !empty($all['description']))
                $data['description']= $all['description'];
            
             $data['created_by']= $user->id;
             $data['updated_by']= $user->id;
             $data['slug']= str_slug($all['name'], '-');
             
             if (isset($all['id']) && !empty($all['id'])) {
                 Project::where('id',$all['id'])->update($data);
                $projectid = $all['id'];
                
            }else{
               // echo '<pre>'; print_r($data);die;
                 $projectid=Project::insertGetId($data);
                
            }
            
            //$category->updatedsfsfsdf_by = $user->id;
            if (!empty($projectid)) {
                //$cat[] = Input::get('parent_id');
                foreach(Input::get('parent_id') as $categoryid){
                   
                    $existcategory = Projectcategory::where('project_id',$projectid)->where('category_id',$categoryid)->first();
                    if(count($existcategory)<1){
                        Projectcategory::insert(array('category_id'=>$categoryid,'project_id'=>$projectid,'created_by'=>$user->id));
                    }
                }
                if($file = Input::file('image')){
                    
                    foreach(Input::file('image') as $file){
                        
                        $fileName        = $file->getClientOriginalName();
                        $extension       = $file->getClientOriginalExtension() ?: 'png';
                        $folderName      = '/uploads/project/';
                        $destinationPath = public_path() . $folderName;
                        $safeName        = str_random(10).'.'.$extension;
                        $file->move($destinationPath, $safeName);

                        //delete old pic if exists
                        if(File::exists(public_path() . $folderName.$safeName))
                        {
                            File::delete(public_path() . $folderName.$safeName);
                        }
                        Portalimage::insert(array('image'=>$safeName, 'portaldetail_id'=>$projectid));
                        
                        
                        
                    }
                
                
            }
                
                
                Session::flash('message', 'project successfully saved');
                return Redirect::to('admin/project/list/');
            } else {
                Session::flash('message', 'Saving project failed! please try again');
                return Redirect::to('admin/create/project');
            }
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- edit category action --------------------- */
    public function edit($id) {
        if (Permission::hasAccess('edit', 'category')) {
            $categories = Portalbranch::get();
            $portal = Project::where('id', $id)->first();
            return view(Config::get('config.template') . '.pages.admin.projects.create')->withPortal($portal)->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    public function remove($id) {
        if (Permission::hasAccess('delete', 'category')) {
            $portal = Project::find($id);

            if ($portal->delete()) {
                Session::flash('message', 'Portal successfully removed');
            } else {
                Session::flash('message', 'Portal removing failed! please try again');
            }
            return Redirect::to('admin/project/list');
        }
        return Redirect::to('admin/error/404');
    }
}
