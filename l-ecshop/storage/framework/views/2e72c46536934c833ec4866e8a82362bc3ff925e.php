<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 类型管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="<?php echo e(URL::asset('styles/general.css')); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo e(URL::asset('styles/main.css')); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo e(URL::asset('styles/fen.css')); ?>" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo e(URL('goods_type/add')); ?>">新建商品类型</a></span>
<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品类型 </span>
<div style="clear:both"></div>
</h1>

<form method="post" action="" name="listForm">
<!-- start goods type list -->
<div class="list-div" id="listDiv">

	<table width="100%" cellpadding="3" cellspacing="1" id="listTable">
		<tbody>
			<tr>
				<th>商品类型名称</th>
				<th>属性分组</th>
				<th>属性数</th>
				<th>状态</th>
				<th>操作</th>
			</tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td class="first-cell"><span onclick="javascript:listTable.edit(this, 'edit_type_name', 1)"><?php echo e($v->cat_name); ?></span></td>
				<td></td>
				<td align="right"><?php echo e($v->cat_num); ?></td>
                <?php if($v->cat_state == '1'): ?>
				    <td align="center"><img src="<?php echo e(URL('images/yes.gif')); ?>"></td>
                <?php else: ?>
                    <td align="center"><img src="<?php echo e(URL('images/no.gif')); ?>"></td>
                <?php endif; ?>
				<td align="center">
				  <a href="/attribute/list?cat_id=<?php echo e($v->cat_id); ?>" title="属性列表">属性列表</a> |
				  <a href="/goods_type/edit?cat_id=<?php echo e($v->cat_id); ?>" title="编辑">编辑</a> |
				  <a href="delete?cat_id=<?php echo e($v->cat_id); ?>" onclick="listTable.remove(1, '删除商品类型将会清除该类型下的所有属性。\n您确定要删除选定的商品类型吗？')" title="移除">移除</a>
				</td>
			</tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <tr>
      <td align="right" nowrap="true" colspan="6" style="background-color: rgb(255, 255, 255);">
            <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
				<div id="pull_right">
					<div class="pull-right">
						<?php echo e($data->links()); ?>

					</div>
				</div>
      </div>
      </td>
    </tr>
  </tbody></table>

</div>
<!-- end goods type list -->
</form>

<div id="footer">
	版权所有 &copy; 2006-2013 软工教育 - 高级PHP - </div>
</div>

</body>
</html>
<?php /* D:\php2\PHPTutorial\WWW\xiao3\l-ecshop\resources\views/goods_type/goods_type_list.blade.php */ ?>