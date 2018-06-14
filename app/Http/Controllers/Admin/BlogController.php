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
use Blog;
use Image;
use File;
use Blogcategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /* ----------------------------- view category list action --------------------- */
    public function index() {
        if (Permission::hasAccess('view', 'blog')) {
            $blog = new Blog;
            if (Input::get('key')) {
                $blog->where('title', 'like', '%' . Input::get('key') . '%');
                $blog->where('description', 'like', '%' . Input::get('key') . '%');
            }
            $blogs = $blog->paginate(20);
            return view(Config::get('config.template') . '.pages.admin.posts.list')->withBlogs($blogs);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- create category action --------------------- */
    public function create() {
        if (Permission::hasAccess('create', 'blog')) {
            $categories = Blogcategory::get();
            return view(Config::get('config.template') . '.pages.admin.blog.create')->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- save category action --------------------- */
    public function store() {
        if (Permission::hasAccess('create', 'blog')) {
            $user = Auth::user();
            $all = Input::all();
            $category = new Blog;

            if (isset($all['id']) && !empty($all['id'])) {
                $category = Blog::find($all['id']);
            }
            if (isset($all['name']) && !empty($all['name'])){
                $category->title = $all['name'];
                $category->slug = str_slug($all['name'], '-');
            }
             if($file = Input::file('image')){
                $fileName        = $file->getClientOriginalName();
                $extension       = $file->getClientOriginalExtension() ?: 'png';
                $folderName      = '/uploads/blog/';
                $destinationPath = public_path() . $folderName;
                $safeName        = str_random(10).'.'.$extension;
                $file->move($destinationPath, $safeName);

                //delete old pic if exists
                if(File::exists(public_path() . $folderName.$category->picture))
                {
                    File::delete(public_path() . $folderName.$category->picture);
                }

                //save new file path into db
                 $category->picture   = $safeName;
                
            }
            if (isset($all['description']) && !empty($all['description']))
                $category->description = $all['description'];
            if (isset($all['matatags']) && !empty($all['matatags']))
                $category->matatags = $all['matatags'];
            if (isset($all['parent_id']) && !empty($all['parent_id']))
                $category->category_id = $all['parent_id'];
            $category->created_by = $user->id;
            $category->updated_by = $user->id;
            //$category->updatedsfsfsdf_by = $user->id;
            if ($category->save()) {
                Session::flash('message', 'Category successfully saved');
                return Redirect::to('admin/blog/list');
            } else {
                Session::flash('message', 'Saving category failed! please try again');
                return Redirect::to('admin/create/blog');
            }
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- edit category action --------------------- */
    public function edit($id) {
        if (Permission::hasAccess('edit', 'blog')) {
            $categories = Blogcategory::get();
            $category = Blog::where('id', $id)->first();
            return view(Config::get('config.template') . '.pages.admin.blog.create')->withCategory($category)->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    public function remove($id) {
        if (Permission::hasAccess('delete', 'blog')) {
            $category = Blog::find($id);

            if ($category->delete()) {
                Session::flash('message', 'Category successfully removed');
            } else {
                Session::flash('message', 'Category removing failed! please try again');
            }
            return Redirect::to('admin/blog/list');
        }
        return Redirect::to('admin/error/404');
    }
}
