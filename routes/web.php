<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'Admin'], function() {
    
    
    // Error Display Page
    Route::get('admin/error/404', ['as' => 'error', 'uses' => 'ErrorController@index']);
    
    Route::get('admin/', 'HomeController@index');
    
    // Login Routes...
    Route::get('admin/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('admin/login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::get('admin/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
    

// Registration Routes...
    Route::get('admin/register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('admin/register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

// Password Reset Routes...
    Route::get('admin/password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('admin/password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('admin/password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('admin/password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
    
// Category Routes
    Route::get('admin/create/category', ['as' => 'category', 'uses' => 'CategoryController@create']);
    Route::get('admin/create/category/{id}', ['as' => 'category', 'uses' => 'CategoryController@edit']);
    Route::get('admin/delete/category/{id}', ['as' => 'category', 'uses' => 'CategoryController@remove']);
    Route::post('admin/create/category', ['as' => 'category', 'uses' => 'CategoryController@store']);
    Route::get('admin/category/list', ['as' => 'category', 'uses' => 'CategoryController@index']);
    
    // Category Routes
    Route::get('admin/create/blogcategory', ['as' => 'category', 'uses' => 'BlogcategoryController@create']);
    Route::get('admin/create/blogcategory/{id}', ['as' => 'category', 'uses' => 'BlogcategoryController@edit']);
    Route::get('admin/create/blogcategory/{id}', ['as' => 'category', 'uses' => 'BlogcategoryController@remove']);
    Route::post('admin/create/blogcategory', ['as' => 'category', 'uses' => 'BlogcategoryController@store']);
    Route::get('admin/blogcategory/list', ['as' => 'category', 'uses' => 'BlogcategoryController@index']);
    
    // Category Routes
    Route::get('admin/create/blog', ['as' => 'category', 'uses' => 'BlogController@create']);
    Route::get('admin/create/blog/{id}', ['as' => 'category', 'uses' => 'BlogController@edit']);
    Route::get('admin/delete/blog/{id}', ['as' => 'category', 'uses' => 'BlogController@remove']);
    Route::post('admin/create/blog', ['as' => 'category', 'uses' => 'BlogController@store']);
    Route::get('admin/blog/list', ['as' => 'category', 'uses' => 'BlogController@index']);
    
// Content pages
    Route::get('admin/create/page', ['as' => 'category', 'uses' => 'PageController@create']);
    Route::get('admin/create/page/{id}', ['as' => 'category', 'uses' => 'PageController@edit']);
    Route::get('admin/delete/page/{id}', ['as' => 'category', 'uses' => 'PageController@remove']);
    Route::post('admin/create/page', ['as' => 'category', 'uses' => 'PageController@store']);
    Route::get('admin/page/list', ['as' => 'category', 'uses' => 'PageController@index']);
    
// News Routes
    Route::get('admin/create/news', ['as' => 'category', 'uses' => 'NewsController@create']);
    Route::get('admin/create/news/{id}', ['as' => 'category', 'uses' => 'NewsController@edit']);
    Route::get('admin/delete/news/{id}', ['as' => 'category', 'uses' => 'NewsController@remove']);
    Route::post('admin/create/news', ['as' => 'category', 'uses' => 'NewsController@store']);
    Route::get('admin/news/list', ['as' => 'category', 'uses' => 'NewsController@index']);
    
// News Routes
    Route::get('admin/create/slider', ['as' => 'category', 'uses' => 'SliderController@create']);
    Route::get('admin/create/slider/{id}', ['as' => 'category', 'uses' => 'SliderController@edit']);
    Route::get('admin/delete/slider/{id}', ['as' => 'category', 'uses' => 'SliderController@remove']);
    Route::post('admin/create/slider', ['as' => 'category', 'uses' => 'SliderController@store']);
    Route::get('admin/slider/list', ['as' => 'category', 'uses' => 'SliderController@index']);
    Route::get('admin/create/slider/images/{id}', ['as' => 'category', 'uses' => 'SliderController@createimages']);
    
    Route::get('admin/delete/slider/image/{id}', ['as' => 'category', 'uses' => 'SliderController@removeimage']);
    Route::post('admin/create/slider/images', ['as' => 'category', 'uses' => 'SliderController@storeimages']);
    Route::get('admin/slider/image/list/{id}', ['as' => 'category', 'uses' => 'SliderController@indeximage']);
    
// News Category Routes
    Route::get('admin/create/newscategory', ['as' => 'category', 'uses' => 'NewscategoryController@create']);
    Route::get('admin/create/newscategory/{id}', ['as' => 'category', 'uses' => 'NewscategoryController@edit']);
    Route::get('admin/delete/newscategory/{id}', ['as' => 'category', 'uses' => 'NewscategoryController@remove']);
    Route::post('admin/create/newscategory', ['as' => 'category', 'uses' => 'NewscategoryController@store']);
    Route::get('admin/newscategory/list', ['as' => 'category', 'uses' => 'NewscategoryController@index']);
    
    // News Category Routes
    Route::get('admin/create/portalcategory', ['as' => 'category', 'uses' => 'PortalbranchController@create']);
    Route::get('admin/create/portalcategory/{id}', ['as' => 'category', 'uses' => 'PortalbranchController@edit']);
    Route::get('admin/delete/portalcategory/{id}', ['as' => 'category', 'uses' => 'PortalbranchController@remove']);
    Route::post('admin/create/portalcategory', ['as' => 'category', 'uses' => 'PortalbranchController@store']);
    Route::get('admin/portalcategory/list', ['as' => 'category', 'uses' => 'PortalbranchController@index']);
    
    // Projects Routes
    Route::get('admin/create/project', ['as' => 'category', 'uses' => 'ProjectController@create']);
    Route::get('admin/create/project/{id}', ['as' => 'category', 'uses' => 'ProjectController@edit']);
    Route::get('admin/delete/project/{id}', ['as' => 'category', 'uses' => 'ProjectController@remove']);
    Route::post('admin/create/project', ['as' => 'category', 'uses' => 'ProjectController@store']);
    
    Route::get('admin/project/list', ['as' => 'category', 'uses' => 'ProjectController@index']);
    

    
// Blogs Routes
    Route::get('admin/create/blog', ['as' => 'category', 'uses' => 'BlogController@create']);
    Route::get('admin/create/blog/{id}', ['as' => 'category', 'uses' => 'BlogController@edit']);
    Route::get('admin/delete/blog/{id}', ['as' => 'category', 'uses' => 'BlogController@remove']);
    Route::post('admin/create/blog', ['as' => 'category', 'uses' => 'BlogController@store']);
    Route::get('admin/blog/list', ['as' => 'category', 'uses' => 'BlogController@index']);
    
// Portal Routes
    Route::get('admin/create/portal', ['as' => 'category', 'uses' => 'PortfolioController@create']);
    Route::get('admin/create/portal/{id}', ['as' => 'category', 'uses' => 'PortfolioController@edit']);
    Route::get('admin/delete/portal/{id}', ['as' => 'category', 'uses' => 'PortfolioController@remove']);
    Route::post('admin/create/portal', ['as' => 'category', 'uses' => 'PortfolioController@store']);
    Route::get('admin/portal/list', ['as' => 'category', 'uses' => 'PortfolioController@index']);
    
// Products Routes
    Route::get('admin/create/product', ['as' => 'category', 'uses' => 'ProductController@create']);
    Route::get('admin/create/product/{id}', ['as' => 'category', 'uses' => 'ProductController@edit']);
    Route::get('admin/delete/product/{id}', ['as' => 'category', 'uses' => 'ProductController@remove']);
    Route::post('admin/create/product', ['as' => 'category', 'uses' => 'ProductController@store']);
    Route::get('admin/product/list', ['as' => 'category', 'uses' => 'ProductController@index']);
    
// Role Routes
    Route::get('admin/create/role', ['as' => 'role', 'uses' => 'RoleController@create']);
    Route::get('admin/create/role/{id}', ['as' => 'role', 'uses' => 'RoleController@edit']);
    Route::get('admin/delete/role/{id}', ['as' => 'role', 'uses' => 'RoleController@remove']);
    Route::post('admin/create/role', ['as' => 'role', 'uses' => 'RoleController@store']);
    Route::get('admin/role/list', ['as' => 'role', 'uses' => 'RoleController@index']);
    
    // Permission Routes
    Route::get('admin/create/permission', ['as' => 'permission', 'uses' => 'PermissionController@create']);
    Route::get('admin/create/permission/{id}', ['as' => 'permission', 'uses' => 'PermissionController@edit']);
    Route::get('admin/delete/permission/{id}', ['as' => 'permission', 'uses' => 'PermissionController@remove']);
    Route::post('admin/create/permission', ['as' => 'permission', 'uses' => 'PermissionController@store']);
    Route::get('admin/permission/list', ['as' => 'permission', 'uses' => 'PermissionController@index']);
    Route::get('admin/permission/assign', ['as' => 'permission', 'uses' => 'PermissionController@assign']);
    Route::post('admin/permission/assign', ['as' => 'permission', 'uses' => 'PermissionController@attach']);
    
    // Custom Settings
    Route::get('admin/homepage/settings', ['as' => 'permission', 'uses' => 'ConfigurationController@homepage']);
    Route::get('admin/smtp/settings', ['as' => 'permission', 'uses' => 'ConfigurationController@smtp']);
    Route::get('admin/general/settings', ['as' => 'permission', 'uses' => 'ConfigurationController@general']);
    Route::get('admin/socialmedia/settings', ['as' => 'permission', 'uses' => 'ConfigurationController@social']);
    Route::post('admin/save/settings', ['as' => 'permission', 'uses' => 'ConfigurationController@store']);
});
//Route::get('products', ['as' => 'home', 'uses' => 'Frontend/ProductController@index']);

Route::group(['namespace' => 'Frontend'], function() {
    
    Route::get('/', ['as' => 'home', 'uses' => 'FrontendController@index']);    
    Route::get('products', ['as' => 'home', 'uses' => 'ProductController@index']);
    Route::get('product/{slug}', ['as' => 'home', 'uses' => 'ProductController@detail']);
    Route::get('contact-us', ['as' => 'home', 'uses' => 'PageController@contact']);
    Route::get('contents/{slug}', ['as' => 'home', 'uses' => 'PageController@pages']);
    Route::get('blog', ['as' => 'home', 'uses' => 'BlogController@index']);
    Route::get('blog/{slug}', ['as' => 'home', 'uses' => 'BlogController@detail']);
    Route::get('news', ['as' => 'home', 'uses' => 'NewsController@index']);
    Route::get('news/{slug}', ['as' => 'home', 'uses' => 'NewsController@detail']);
});

