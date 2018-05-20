<?php

/*
|--------------------------------------------------------------------------
| Web Routesss
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('signup');
});

Route::get('/ladb', function () {
    return view('ladb');
});

Route::get('/our_customer', function () {
    return view('our_customer');
});

Route::get('/our_product', function () {
    return view('our_product');
});


Route::get('/our_process', function () {
    return view('our-process');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/our_team', function () {
    return view('our_team');
});

Route::get('/about_us', function () {
    return view('about_us');
});


Route::get('/contact_us', function () {
    return view('contact');
});



Route::get('/check','adminController@check');


/*     
            ADMIN       CONTROLLERS
*/

Route::get('/admin','adminController@login_view');
Route::post('/admin/login','adminController@login');
Route::get('/admin/home','adminController@home');
Route::get('/admin/create/product','adminController@create_product_view');
Route::post('/admin/create/product','adminController@create_product');
Route::get('/admin/view/product','adminController@list_product_view');
Route::get('/admin/logout','adminController@logout');

Route::get('/admin/view/product/{id}','adminController@specific_product_view');
Route::get('/admin/delete/product/{id}','adminController@delete_product');


Route::get('/admin/view/order/active','adminController@list_order_active_view');
Route::get('/admin/view/order/new','adminController@list_order_new_view');
Route::get('/admin/view/order/new/{id}','adminController@order_new_view');
Route::get('/admin/view/order/confirm/new/{id}','adminController@confirm_order_new');
Route::get('/admin/view/order/completed','adminController@list_order_completed_view');
Route::get('/admin/view/order/cancelled','adminController@list_order_cancelled_view');
Route::get('/admin/view/order/refunded','adminController@list_order_refunded_view');

/*

CLIENT CONTROLLER

*/

Route::post('/register','clientController@register');
Route::post('/login','clientController@login');
Route::get('/logout','clientController@logout');
Route::get('/test','clientController@test');

Route::get('/order/process/{ladb}/step/1','clientController@order_process_1');
Route::post('/order/process/step/2','clientController@order_process_2');
Route::get('/order/process/step/2','clientController@order_process_2_view');


Route::post('/order/process/step/3','clientController@order_process_3');
Route::get('/order/process/step/3','clientController@order_process_3_view');

Route::get('/order/process/step/3','clientController@order_process_3_view');


Route::get('/order/process/step/3/edit/base/requirement','clientController@edit_base_requirement_view');

Route::post('/order/process/step/3/edit/base/requirement','clientController@edit_base_requirement');

Route::get('/flush',function()
{
    session()->flush();
});



Route::get('/order/process/step/3/add/additional/requirement','clientController@add_additional_requirement_view');

Route::post('/order/process/step/3/add/additional/requirement','clientController@add_additional_requirement');

Route::get('/order/process/confirm','clientController@confirm_order');


Route::get('/order/process/register','clientController@order_register_view');

Route::post('order/process/login','clientController@order_login');
