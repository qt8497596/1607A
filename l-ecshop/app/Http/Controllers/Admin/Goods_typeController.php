<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/27
 * Time: 11:02
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;

class Goods_typeController extends Controller
{
    //跳转类型添加页面
    public function add()
    {
        return view('goods_type/goods_type_add');
    }
    //类型添加
    public function type_add()
    {
        $data = $_POST;
        $cat_name = $data['cat_name'];
        $res = DB::table('cat')->insert(['cat_name'=>$cat_name]);
        if($res){
            return redirect('goods_type/list');
        }
    }
    //跳转展示页面
    public function list()
    {
        $data = DB::table('cat')->paginate(5);
        return view('goods_type/goods_type_list',['data'=>$data]);
    }
    //跳转修改
    public function edit()
    {
        $cat_id = $_GET['cat_id'];
        $data = DB::table('cat')->where('cat_id',$cat_id)->first();
        return view('goods_type/goods_type_edit',['data'=>$data]);
    }
    //修改
    public function update()
    {
        $data = $_POST;
        $cat_name = $data['cat_name'];
        $cat_id = $data['cat_id'];
        $res = DB::table('cat')->where('cat_id', '=' ,$cat_id)->update(['cat_name'=>$cat_name]);
        if($res){
            return redirect('goods_type/list');
        }
    }
    //删除
    public function delete()
    {
        $cat_id = $_GET['cat_id'];
        DB::table('cat')->where('cat_id',$cat_id)->delete();
        if(DB::table('attribute')->where('cat_id',$cat_id)->first()){
            $res = DB::table('attribute')->where('cat_id',$cat_id)->delete();
            if($res){
                return redirect('goods_type/list');
            }
        }else{
            return redirect('goods_type/list');
        }
    }
}