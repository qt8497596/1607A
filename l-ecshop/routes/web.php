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

Route::get('/', function () {
    return view('welcome');
});

//首页路由
Route::any('admin/index','Admin\AdminController@index');
Route::any('admin/top','Admin\AdminController@top');
Route::any('admin/menu','Admin\AdminController@menu');
Route::any('admin/main','Admin\AdminController@main');

//商品方面路由
Route::any('goods/list','Admin\GoodsController@list');
Route::any('goods/add','Admin\GoodsController@add');

//商品类型
Route::any('goods_type/add','Admin\Goods_typeController@add');
Route::any('goods_type/list','Admin\Goods_typeController@list');

//商品分类
Route::any('category/list','Admin\CategoryController@list');
Route::any('category/add','Admin\CategoryController@add');

//商品品牌
Route::any('brand/list','Admin\BrandController@list');
Route::any('brand/add','Admin\BrandController@add');
Route::any('brand/delete','Admin\BrandController@delete');
Route::any('brand/edit','Admin\BrandController@edit');
Route::any('brand/edit_do','Admin\BrandController@edit_do');

//商品属性
Route::any('attribute/list','Admin\AttributeController@list');
Route::any('attribute/add','Admin\AttributeController@add');