<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/27
 * Time: 14:06
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;

class AttributeController extends Controller
{
    //属性展示,
    public function list()
    {
        $data = DB::table('attribute')->leftJoin('cat','cat.cat_id','attribute.cat_id')->orderBy('attr_id')->paginate(5);
        return view('attribute/attribute_list',['data'=>$data]);
    }
    //跳转到属性添加
    public function add()
    {
        $data = DB::table('cat')->get();
        return view('attribute/attribute_add',['data'=>$data]);
    }
    //属性添加
    public function attr_add()
    {
        $data = $_POST;
        $cat_id = $data['cat_id'];
        $list = DB::select("select * from cat where cat_id=".$cat_id);
        $li = json_encode($list);
        $lis = json_decode($li,true);
        $cat_num = $lis[0]['cat_num'];
        unset($data['_token']);
        DB::table('attribute')->insert($data);
        $res = DB::table('cat')->where('cat_id',$cat_id)->update(['cat_num'=>$cat_num+1]);
        if($res){
            return redirect('attribute/list');
        }
    }
    //跳转属性修改页面
    public function edit()
    {
        $attr_id = $_GET['attr_id'];
        $data = DB::table('attribute')->leftJoin('cat','cat.cat_id','attribute.cat_id')->where('attr_id',$attr_id)->first();
        $list = DB::table('cat')->get();
        return view("attribute/attribute_edit",['data'=>$data,'list'=>$list]);
    }
    //修改
    public function attr_edit()
    {
        $data = $_POST;
        $attr_id = $data['attr_id'];
        unset($data['_token']);
        $res = DB::table('attribute')->where('attr_id', '=' ,$attr_id)->update($data);
        if($res){
            return redirect('goods_type/list');
        }
    }
    //移除属性
    public function delete()
    {
        $attr_id = $_GET['attr_id'];
        $res = DB::table('attribute')->where('attr_id',$attr_id)->delete();
        if($res){
            return redirect('goods_type/list');
        }
    }
}