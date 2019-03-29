<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/27
 * Time: 10:44
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function list()
    {
        return view('category/cat_list');
    }
    public function add()
    {
        return view('category/cat_add');
    }
}