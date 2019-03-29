<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/26
 * Time: 19:44
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }
    public function top()
    {
        return view('admin/top');
    }
    public function main()
    {
        return view('admin/main');
    }
    public function menu()
    {
        return view('admin/menu');
    }
}