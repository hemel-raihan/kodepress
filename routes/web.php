<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Route::get('/', function () {
//     return view('homepage');
// });


Auth::routes();
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('user/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//single page test
// Route::get('/all', function () {
//     return view('frontend_theme.default.front_layout.all-notice');
// });
// Route::get('/', function () {
//     return view('frontend_theme.default.test');
// });

Route::get('/', 'HomepageController@index')->name('home');
Route::get('/single', 'HomepageController@single')->name('single');
Route::get('/single-page', 'HomepageController@singlepage')->name('single.page');

Route::get('notices/all','Admin\Notice\NoticeController@noticeList')->name('notice.all');

//Route::get('links/{details}','Admin\Link\LinkController@details')->name('link.details');


//for admin authentication
Route::get('adminlogin', 'Adminlogin\LoginController@showloginform')->name('admin.login');
Route::post('adminlogin', 'AdminLogin\LoginController@login');
Route::post('admin-password/email', 'Adminlogin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset', 'Adminlogin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset', 'Adminlogin\ResetPasswordController@reset')->name('admin.password.reset');
Route::get('admin-password/reset/{token}', 'Adminlogin\ResetPasswordController@showResetForm')->name('admin.password.reset');


//Admin
Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth:admin']], function(){

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('blog/categories','blog\CategoryController');
    Route::get('blog/category/{id}/approve', 'blog\CategoryController@approval')->name('blog.category.approve');
    Route::resource('blog/posts','blog\PostController');
    Route::get('blog/post/{id}/status', 'blog\PostController@status_approval')->name('blog.post.status');
    Route::resource('general/contentcategories','general_content\ContentCategoryController');
    Route::get('general/contentcategory/{id}/approve', 'general_content\ContentCategoryController@approval')->name('general.contentcategory.approve');
    Route::resource('general/contentposts','general_content\ContentPostController');
    Route::get('general/contentposts/{id}/status', 'general_content\ContentPostController@status_approval')->name('general.contentpost.status');
    Route::resource('pages','page\PageController');
    Route::get('pages/{id}/status', 'page\PageController@status_approval')->name('page.status');

    //for sidebar & widget
    Route::resource('sidebars','sidebar\SidebarController');
    Route::get('sidebars/{id}/status', 'sidebar\SidebarController@status_approval')->name('sidebar.status');
    Route::get('widget/{id}/builder', 'sidebar\WidgetbuilderController@index')->name('widget.builder');
    Route::get('widget/{id}/create', 'sidebar\WidgetbuilderController@create')->name('widget.create');
    Route::post('widget/{id}/store', 'sidebar\WidgetbuilderController@store')->name('widget.store');
    Route::get('widget/{id}/edit/{widgetId}', 'sidebar\WidgetbuilderController@edit')->name('widget.edit');
    Route::put('widget/{id}/update/{widgetId}', 'sidebar\WidgetbuilderController@update')->name('widget.update');
    Route::delete('widget/{id}/destroy/{widgetId}', 'sidebar\WidgetbuilderController@destroy')->name('widget.destroy');
    Route::post('widget/{id}/order', 'sidebar\WidgetbuilderController@order')->name('widget.order');
    //end sidebar & widget

    //for Front end Menu Builder
    Route::resource('frontmenus','frontmenu\MenuController');
    Route::get('frontmenus/{id}/status', 'frontmenu\MenuController@status_approval')->name('frontmenu.status');
    Route::get('menuitem/{id}/builder', 'frontmenu\MenuitemController@index')->name('menuitem.builder');
    Route::get('menuitem/{id}/create', 'frontmenu\MenuitemController@create')->name('menuitem.create');
    Route::post('menuitem/{id}/store', 'frontmenu\MenuitemController@store')->name('menuitem.store');
    Route::get('menuitem/{id}/edit/{menuId}', 'frontmenu\MenuitemController@edit')->name('menuitem.edit');
    Route::put('menuitem/{id}/update/{menuId}', 'frontmenu\MenuitemController@update')->name('menuitem.update');
    Route::get('menuitem/{id}/destroy/{menuId}', 'frontmenu\MenuitemController@destroy')->name('menuitem.destroy');
    Route::post('menuitem/{id}/order', 'frontmenu\MenuitemController@order')->name('menuitem.order');

    //Slider
    Route::resource('sliders', 'Slide\SliderController');
    //Slide
    Route::resource('slides', 'Slide\SlideController');
    Route::get('slide/{id}/status','Slide\SlideController@status')->name('slide.status');
    //Notice Board
    Route::resource('notices', 'Notice\NoticeController');
    Route::get('notice/{id}/status','Notice\NoticeController@status')->name('notice.status');

    //Hot news/ links
    Route::resource('links', 'Link\LinkController');
    Route::get('link/{id}/status','Link\LinkController@status')->name('link.status');


    Route::resource('videos', 'Video\VideoController');
    Route::get('video/{id}/status', 'Video\VideoController@status_approval')->name('video.status');

});




Route::group(['as'=>'author.','prefix'=>'author', 'namespace'=>'Admin', 'middleware'=>['auth:admin']], function(){
    Route::get('dashboard', 'DashboardController@author')->name('dashboard');
});

Route::get('{slug}', 'PageController@index')->name('page');
Route::get('{slug}', 'PageController@category')->name('category.page');
