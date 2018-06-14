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
use Product;
use Image;
use File;
use App\Models\Admin\Productimage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /* ----------------------------- view product list action --------------------- */
    public function index() {
        if (Permission::hasAccess('view', 'product')) {
            $product = new Product;
            if (Input::get('key')) {
                $product->where('name', 'like', '%' . Input::get('key') . '%');
                $product->where('description', 'like', '%' . Input::get('key') . '%');
            }
            $products = $product->paginate(20);
            return view(Config::get('config.template') . '.pages.admin.products.list')->withProducts($products);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- create product action --------------------- */
    public function create() {
        if (Permission::hasAccess('create', 'product')) {
            $categories = Category::get();
            return view(Config::get('config.template') . '.pages.admin.products.create')->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- save product action --------------------- */
    public function store() {
        if (Permission::hasAccess('create', 'product')) {
            $user = Auth::user();
            $all = Input::all();
            $id="";
            $category = new Product;

            if (isset($all['id']) && !empty($all['id'])) {
                $id=$all['id'];
                $category = Product::find($all['id']);
            } 
            if (isset($all['matatags']) && !empty($all['matatags']))
                $category->matatags = $all['matatags'];
            if (isset($all['name']) && !empty($all['name'])){
                $category->name = $all['name'];
                $category->slug = str_slug($all['name'], '-');
            }            
            if (isset($all['price']) && !empty($all['price']))
                $category->price = $all['price'];
            if (isset($all['quantity']) && !empty($all['quantity']))
                $category->quantity = $all['quantity'];
            if (isset($all['short_discription']) && !empty($all['short_discription']))
                $category->short_description = $all['short_discription'];
            if (isset($all['description']) && !empty($all['description']))
                $category->description = $all['description'];
            if (isset($all['parent_id']) && !empty($all['parent_id']))
                $category->category_id = $all['parent_id'];
            $category->created_by = $user->id;
            $category->updated_by = $user->id;
            $prod_images=array();
            

            //$category->updatedsfsfsdf_by = $user->id;
            if ($category->save()) {
                $id=$category->id;
                if($file = Input::file('image')){
                
                foreach(Input::file('image') as $file){
                    $pimage = new Productimage;
                    $fileName        = $file->getClientOriginalName();
                    $extension       = $file->getClientOriginalExtension() ?: 'png';
                    $folderName      = '/uploads/products/';
                    $destinationPath = public_path() . $folderName;
                    $safeName        = str_random(10).'.'.$extension;
                    $file->move($destinationPath, $safeName);

                    //delete old pic if exists
                    if(File::exists(public_path() . $folderName.$pimage->picture))
                    {
                        File::delete(public_path() . $folderName.$pimage->picture);
                    }
                    $pimage->image=$safeName;
                    $pimage->product_id=$id;
                    $pimage->created_by=$user->id;
                    $pimage->created_at=date('Y-m-d H:i:s');
                    $pimage->save();
                   
                }
                
                
            }
                
                Session::flash('message', 'Category successfully saved');
                return Redirect::to('admin/product/list');
            } else {
                Session::flash('message', 'Saving category failed! please try again');
                return Redirect::to('admin/create/product');
            }
            
        }
        return Redirect::to('admin/error/404');
    }

    /* ----------------------------- edit product action --------------------- */
    public function edit($id) {
        if (Permission::hasAccess('edit', 'product')) {
            $categories = Category::get();
            $category = Product::where('id', $id)->first();
            return view(Config::get('config.template') . '.pages.admin.products.create')->withCategory($category)->withCategories($categories);
        }
        return Redirect::to('admin/error/404');
    }

    public function remove($id) {
        if (Permission::hasAccess('delete', 'product')) {
            $category = Product::find($id);

            if ($category->delete()) {
                Session::flash('message', 'Category successfully removed');
            } else {
                Session::flash('message', 'Category removing failed! please try again');
            }
            return Redirect::to('admin/product/list');
        }
        return Redirect::to('admin/error/404');
    }
}
