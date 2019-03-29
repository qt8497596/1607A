<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/27
 * Time: 14:06
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AttributeController extends Controller
{
    public function list()
    {
        return view('attribute/attribute_list');
    }
    public function add()
    {
        return view('attribute/attribute_add');
    }
}