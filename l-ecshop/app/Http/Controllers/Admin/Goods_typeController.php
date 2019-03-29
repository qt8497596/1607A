<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/27
 * Time: 11:02
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class Goods_typeController extends Controller
{
    public function add()
    {
        return view('goods_type/goods_type_add');
    }
    public function list()
    {
        return view('goods_type/goods_type_list');
    }
}