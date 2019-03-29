<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/27
 * Time: 11:36
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function list()
    {
        return view('brand/brand_list');
    }
    public function add()
    {
        return view('brand/brand_add');
    }
}