<?php

namespace App\Http\Controllers;

use Artisan;
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
//Route::get('user/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//single page test
// Route::get('/all', function () {
//     return view('frontend_theme.default.front_layout.all-notice');
// });
// Route::get('/', function () {
//     return view('frontend_theme.default.test');
// });

Route::get('fetch-portfolios', 'Admin\Portfolio\PortfolioController@fetchportfolios')->name('hemel');

// Route::get('/', function () {
//     return view('frontend_theme.corporate.homepage');
// })->name('home');

Route::get('/', 'Corporate\HomepageController@index')->name('home');
// Route::get('/content/details/{id}', 'HomepageController@contentdetails')->name('content.details');

// Route::get('/team/details/{id}', 'HomepageController@teamdetails')->name('team.details');

// Route::get('/blog/posts/{id}', 'HomepageController@blogposts')->name('blog.posts');
// Route::get('/post/details/{id}', 'HomepageController@postdetails')->name('posts.details');

// Route::get('/general/posts/{id}', 'HomepageController@generalposts')->name('general.posts');
// Route::get('/general/details/{id}', 'HomepageController@generaldetails')->name('general.details');

// Route::get('/notice/details/{id}', 'HomepageController@noticedetails')->name('notice.details');

// Route::get('/hotlinks/details/{id}', 'HomepageController@hhotlinksdetails')->name('hotlinks.details');

// Route::get('/widget/details/{id}', 'Admin\sidebar\WidgetbuilderController@widgetdetails')->name('widget.details');

// Route::get('/single', 'HomepageController@single')->name('single');
// Route::get('/single-page', 'HomepageController@singlepage')->name('single.page');

// Route::get('notices/all','Admin\Notice\NoticeController@noticeList')->name('notice.all');

//Route::get('links/{details}','Admin\Link\LinkController@details')->name('link.details');


//for admin authentication
Route::get('adminlogin', 'Adminlogin\LoginController@showloginform')->name('admin.login');
 Route::post('adminlogin', 'Adminlogin\LoginController@login')->name('admin.loginform');
//Route::post('adminlogin',[\App\Http\Controllers\AdminLogin\LoginController::class, 'login'])->name('admin.loginform');
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
    Route::get('blog/post/{id}/scroll', 'blog\PostController@scroll_approval')->name('blog.post.scroll');
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
    Route::get('menuitem/show', 'frontmenu\MenuitemController@show')->name('menuitem.show');
    Route::get('menuitem/{id}/create', 'frontmenu\MenuitemController@create')->name('menuitem.create');
    Route::post('menuitem/{id}/store', 'frontmenu\MenuitemController@store')->name('menuitem.store');
    Route::post('menuitem/{id}/menustore', 'frontmenu\MenuitemController@menustore')->name('menuitem.menustore');
    Route::get('menuitem/{id}/edit/{menuId}', 'frontmenu\MenuitemController@edit')->name('menuitem.edit');
    Route::put('menuitem/update/{menuId}', 'frontmenu\MenuitemController@update')->name('menuitem.update');
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


    Route::resource('videos', 'video\VideoController');
    Route::get('video/{id}/status', 'video\VideoController@status_approval')->name('video.status');

    Route::get('settings','SettingController@index')->name('settings');
    Route::put('settings/update/{setting}', 'SettingController@update')->name('settings.update');

    Route::resource('teams/teamcategories','Teams\CategoryController');
    Route::get('teams/teamcategories/{id}/approve', 'Teams\CategoryController@approval')->name('team.category.approve');

    Route::resource('teams/teamposts','Teams\PostController');
    Route::get('teams/teamposts/{id}/status', 'Teams\PostController@status_approval')->name('team.post.status');

    Route::resource('products/productcategories','Product\CategoryController');
    Route::get('products/productcategories/{id}/approve', 'Product\CategoryController@approval')->name('product.category.approve');

    Route::resource('products','Product\ProductController');
    Route::get('products/{id}/status', 'Product\ProductController@status')->name('product.status');

    Route::resource('services/servicecategories','Service\CategoryController');
    Route::get('services/servicecategories/{id}/approve', 'Service\CategoryController@approval')->name('service.category.approve');

    Route::resource('services','Service\ServiceController');
    Route::get('products/{id}/status', 'Service\ServiceController@status')->name('service.status');

    Route::resource('portfolios/portfoliocategories','Portfolio\CategoryController');
    Route::get('portfolios/portfoliocategories/{id}/approve', 'Portfolio\CategoryController@approval')->name('portfolio.category.approve');

    Route::resource('portfolios','Portfolio\PortfolioController');
    Route::get('portfolios/{id}/status', 'Portfolio\PortfolioController@status')->name('portfolio.status');

    Route::resource('prices/pricecategories','Pricing_Table\CategoryController');
    Route::get('prices/pricecategories/{id}/approve', 'Pricing_Table\CategoryController@approval')->name('price.category.approve');

    Route::resource('prices','Pricing_Table\PriceController');
    Route::get('prices/{id}/status', 'Pricing_Table\PriceController@status')->name('price.status');

    Route::resource('custompages','Pagebuilder\CustompageController');
    Route::get('custompages/{id}/status', 'Pagebuilder\CustompageController@status_approval')->name('custompage.status');
    Route::get('custompage/{id}/builder', 'Pagebuilder\PagebuilderController@index')->name('custompage.builder');

    //for Page Builder
    Route::get('pagebuilder/{id}/create', 'Pagebuilder\PagebuilderController@create')->name('pagebuilder.create');
    Route::post('pagebuilder/{id}/store', 'Pagebuilder\PagebuilderController@store')->name('pagebuilder.store');
    Route::get('pagebuilder/{id}/edit/{pageId}', 'Pagebuilder\PagebuilderController@edit')->name('pagebuilder.edit');
    Route::put('pagebuilder/{id}/update/{pageId}', 'Pagebuilder\PagebuilderController@update')->name('pagebuilder.update');
    Route::delete('pagebuilder/{id}/destroy/{pageId}', 'Pagebuilder\PagebuilderController@destroy')->name('pagebuilder.destroy');
    Route::post('pagebuilder/{id}/order', 'Pagebuilder\PagebuilderController@order')->name('pagebuilder.order');
    //end Page Builder

    //for Section Element
    Route::get('element/{id}/index', 'Pagebuilder\ElementController@index')->name('element.index');
    Route::get('element/{id}/create', 'Pagebuilder\ElementController@create')->name('element.create');
    Route::post('element/{id}/store', 'Pagebuilder\ElementController@store')->name('element.store');
    Route::get('element/{id}/edit/{elementId}', 'Pagebuilder\ElementController@edit')->name('element.edit');
    Route::put('element/{id}/update/{elementId}', 'Pagebuilder\ElementController@update')->name('element.update');
    Route::delete('element/{id}/destroy/{elementId}', 'Pagebuilder\ElementController@destroy')->name('element.destroy');
    Route::get('element/{id}/status/{elementId}', 'Pagebuilder\ElementController@status')->name('element.status');
    //end Section Element

    Route::get('navbar/settings','Appearance_settings\AppearanceController@index')->name('navbar.settings');
    Route::put('navbar/settings/update/{setting}', 'Appearance_settings\AppearanceController@update')->name('navbar.settings.update');

});




Route::group(['as'=>'author.','prefix'=>'author', 'namespace'=>'Admin', 'middleware'=>['auth:admin']], function(){
    Route::get('dashboard', 'DashboardController@author')->name('dashboard');
});

Route::get('{slug}', 'PageController@index')->name('page');
// Route::get('{categoryslug}', 'PageController@category')->name('category.page');
//Route::get('{contentcategoryslug}', 'PageController@contentcategory')->name('contentcategory');
