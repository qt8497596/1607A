<?php 
namespace App\Http\Controllers\Admin;

use DB;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
	//添加品牌
	public function add(){
		if($_POST){
             $data = $_POST;
             //print_r($data);die;
             //图片信息
             $file = $_FILES['dfile'];
             //print_r($file);die;
             if($file['error']==0){
                 //图片名称
                 $name = $file['name'];
                 $tmp_name = $file['tmp_name'];
                 $path = 'uploads/'.time().$name;
                 //echo $path;die;
                 $res = move_uploaded_file($tmp_name,$path); 
                 $brand_name = $data['brand_name'];
                 $site_url = $data['site_url'];
                 $brand_desc = $data['brand_desc'];
                 $sort_order = $data['sort_order'];
                 $is_show = $data['is_show'];
                 $arr = [
                 'brand_name' => $brand_name,
                 'site_url'   => $site_url,
                 'brand_desc' => $brand_desc,
                 'brand_logo' => $path,
                 'sort_order' => $sort_order,
                 'is_show'    => $is_show
                 ];
                 $res = DB::table('brand')->insert($arr);
                 if($res){
                 	return redirect('brand/list');
                 	//echo "<script>alert('添加成功');location.href='{{url('brand/brand_list')}}'</script>";
                 }else{
                 	return redirect('brand/add');
                 }
             }else{
             	echo "上传失败";
             }
		}else{
			return view('brand/add');
		}
		
	}

	//展示品牌
	public function list(){
        $page = $_GET['page'] ?? 1;
		//获取数据
		$data = DB::table('brand')->where('status',1)->get();
        //每页显示条数
        $size = 4;
        //偏移量
        $offset = ($page-1)*$size;
        //总条数
        $count = count($data);
        //总页数
        $num = ceil($count/$size);
        //上一页
        $prev = ($page-1) >0 ? $page-1 : 1;
        //下一页
        $next = ($page+1) <$count ? $page+1 : $num;
        $info = DB::select("select * from brand where status = 1 limit $offset,$size");
		//print_r($info);die;
		return view('brand/list',['info'=>$info,'count'=>$count,'num'=>$num,'prev'=>$prev,'next'=>$next,'page'=>$page,'size'=>$size]);
	}

	//删除
	public function delete(){
      $brand_id = $_GET['id'];
      //echo $brand_id;
       $res = DB::table('brand')->where('brand_id',$brand_id)->update(['status'=>0]);
      //$res = DB::table('brand')->where('brand_id',$brand_id)->delete();
      if($res){
			echo "<script>alert('删除成功');location.href='list'</script>";
		}else{
			echo "<script>alert('删除失败');location.href='list'</script>";
		}
	}

	//查询一条
	public function edit(){
       $brand_id = $_GET['id'];
       //print_r($brand_id);die;
       $data = DB::table('brand')->where('brand_id',$brand_id)->first();
       //print_r($data);die;
       return view('brand/edit',['data'=>$data]);		
	}

	//修改
	public function edit_do(){
		$data = $_POST;
		unset($data['_token']);
		$brand_id = $data['brand_id'];
	    //print_r($data);die;
	    
	    $arr = [
                 'brand_name' => $data['brand_name'],
                 'site_url'   => $data['site_url'],
                 'brand_desc' => $data['brand_desc'],
                 'sort_order' => $data['sort_order'],
                 'is_show'    => $data['is_show']
                 ];
	    //print_r($arr);die;
	    $res = DB::table('brand')->where('brand_id',$brand_id)->update($arr);
	    //echo $res;die;
	    if($res){
			echo "<script>alert('修改成功');location.href='list'</script>";
		}else{
			echo "<script>alert('修改失败');location.href='list'</script>";
		}
	}
}




 ?>