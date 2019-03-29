<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 属性管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<link href="styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="attribute.php?act=add">添加属性</a></span>
<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品属性 </span>
<div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="" name="searchForm">
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
    按商品类型显示：<select name="goods_type" onchange="searchAttr(this.value)"><option value="0">所有商品类型</option><option value="1" selected="true">书</option><option value="2">音乐</option><option value="3">电影</option><option value="4">手机</option><option value="5">笔记本电脑</option><option value="6">数码相机</option><option value="7">数码摄像机</option><option value="8">化妆品</option><option value="9">精品手机</option><option value="10">我的商品</option></select>
  </form>
</div>

<form method="post" action="attribute.php?act=batch" name="listForm">
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">
    <tbody>
		<tr>
			<th><input onclick="listTable.selectAll(this, &quot;checkboxes[]&quot;)" type="checkbox">编号 </th>
			<th>属性名称</th>
			<th>商品类型</th>
			<th>属性值的录入方式</th>
			<th>可选值列表</th>
			<th>排序</a></th>
			<th>操作</th>
		</tr>

        <tr>
			<td nowrap="true" valign="top"><span><input value="1" name="checkboxes[]" type="checkbox">1</span></td>
			<td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 1)">作者</span></td>
			<td nowrap="true" valign="top"><span>书</span></td>
			<td nowrap="true" valign="top"><span>手工录入</span></td>
			<td valign="top"><span></span></td>
			<td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 1)">0</span></td>
			<td align="center" nowrap="true" valign="top">
				<a href="?act=edit&amp;attr_id=1" title="编辑"><img src="images/icon_edit.gif" border="0" height="16" width="16"></a>
				<a href="javascript:;" onclick="removeRow(1)" title="移除"><img src="images/icon_drop.gif" border="0" height="16" width="16"></a>
			</td>
		</tr>


        <tr>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span><input value="2" name="checkboxes[]" type="checkbox">2</span></td>
      <td class="first-cell" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_attr_name', 2)">出版社</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>书</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>手工录入</span></td>
      <td valign="top" style="background-color: rgb(255, 255, 255);"><span></span></td>
      <td align="right" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_sort_order', 2)">0</span></td>
      <td align="center" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);">
        <a href="?act=edit&amp;attr_id=2" title="编辑"><img src="images/icon_edit.gif" border="0" height="16" width="16"></a>
        <a href="javascript:;" onclick="removeRow(2)" title="移除"><img src="images/icon_drop.gif" border="0" height="16" width="16"></a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span><input value="3" name="checkboxes[]" type="checkbox">3</span></td>
      <td class="first-cell" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_attr_name', 3)">图书书号/ISBN</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>书</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>手工录入</span></td>
      <td valign="top" style="background-color: rgb(255, 255, 255);"><span></span></td>
      <td align="right" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_sort_order', 3)">0</span></td>
      <td align="center" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);">
        <a href="?act=edit&amp;attr_id=3" title="编辑"><img src="images/icon_edit.gif" border="0" height="16" width="16"></a>
        <a href="javascript:;" onclick="removeRow(3)" title="移除"><img src="images/icon_drop.gif" border="0" height="16" width="16"></a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span><input value="4" name="checkboxes[]" type="checkbox">4</span></td>
      <td class="first-cell" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_attr_name', 4)">出版日期</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>书</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>手工录入</span></td>
      <td valign="top" style="background-color: rgb(255, 255, 255);"><span></span></td>
      <td align="right" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_sort_order', 4)">0</span></td>
      <td align="center" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);">
        <a href="?act=edit&amp;attr_id=4" title="编辑"><img src="images/icon_edit.gif" border="0" height="16" width="16"></a>
        <a href="javascript:;" onclick="removeRow(4)" title="移除"><img src="images/icon_drop.gif" border="0" height="16" width="16"></a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span><input value="5" name="checkboxes[]" type="checkbox">5</span></td>
      <td class="first-cell" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_attr_name', 5)">开本</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>书</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>手工录入</span></td>
      <td valign="top" style="background-color: rgb(255, 255, 255);"><span></span></td>
      <td align="right" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_sort_order', 5)">0</span></td>
      <td align="center" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);">
        <a href="?act=edit&amp;attr_id=5" title="编辑"><img src="images/icon_edit.gif" border="0" height="16" width="16"></a>
        <a href="javascript:;" onclick="removeRow(5)" title="移除"><img src="images/icon_drop.gif" border="0" height="16" width="16"></a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span><input value="6" name="checkboxes[]" type="checkbox">6</span></td>
      <td class="first-cell" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_attr_name', 6)">图书页数</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>书</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>手工录入</span></td>
      <td valign="top" style="background-color: rgb(255, 255, 255);"><span></span></td>
      <td align="right" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_sort_order', 6)">0</span></td>
      <td align="center" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);">
        <a href="?act=edit&amp;attr_id=6" title="编辑"><img src="images/icon_edit.gif" border="0" height="16" width="16"></a>
        <a href="javascript:;" onclick="removeRow(6)" title="移除"><img src="images/icon_drop.gif" border="0" height="16" width="16"></a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span><input value="7" name="checkboxes[]" type="checkbox">7</span></td>
      <td class="first-cell" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_attr_name', 7)">图书装订</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>书</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>从列表中选择</span></td>
      <td valign="top" style="background-color: rgb(255, 255, 255);"><span>平装
, 黑白</span></td>
      <td align="right" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_sort_order', 7)">0</span></td>
      <td align="center" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);">
        <a href="?act=edit&amp;attr_id=7" title="编辑"><img src="images/icon_edit.gif" border="0" height="16" width="16"></a>
        <a href="javascript:;" onclick="removeRow(7)" title="移除"><img src="images/icon_drop.gif" border="0" height="16" width="16"></a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span><input value="8" name="checkboxes[]" type="checkbox">8</span></td>
      <td class="first-cell" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_attr_name', 8)">图书规格</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>书</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>手工录入</span></td>
      <td valign="top" style="background-color: rgb(255, 255, 255);"><span></span></td>
      <td align="right" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_sort_order', 8)">0</span></td>
      <td align="center" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);">
        <a href="?act=edit&amp;attr_id=8" title="编辑"><img src="images/icon_edit.gif" border="0" height="16" width="16"></a>
        <a href="javascript:;" onclick="removeRow(8)" title="移除"><img src="images/icon_drop.gif" border="0" height="16" width="16"></a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span><input value="9" name="checkboxes[]" type="checkbox">9</span></td>
      <td class="first-cell" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_attr_name', 9)">版次</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>书</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>手工录入</span></td>
      <td valign="top" style="background-color: rgb(255, 255, 255);"><span></span></td>
      <td align="right" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_sort_order', 9)">0</span></td>
      <td align="center" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);">
        <a href="?act=edit&amp;attr_id=9" title="编辑"><img src="images/icon_edit.gif" border="0" height="16" width="16"></a>
        <a href="javascript:;" onclick="removeRow(9)" title="移除"><img src="images/icon_drop.gif" border="0" height="16" width="16"></a>
      </td>
    </tr>
        <tr>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span><input value="10" name="checkboxes[]" type="checkbox">10</span></td>
      <td class="first-cell" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_attr_name', 10)">印张</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>书</span></td>
      <td nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span>手工录入</span></td>
      <td valign="top" style="background-color: rgb(255, 255, 255);"><span></span></td>
      <td align="right" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, 'edit_sort_order', 10)">0</span></td>
      <td align="center" nowrap="true" valign="top" style="background-color: rgb(255, 255, 255);">
        <a href="?act=edit&amp;attr_id=10" title="编辑"><img src="images/icon_edit.gif" border="0" height="16" width="16"></a>
        <a href="javascript:;" onclick="removeRow(10)" title="移除"><img src="images/icon_drop.gif" border="0" height="16" width="16"></a>
      </td>
    </tr>
      </tbody></table>

  <table cellpadding="4" cellspacing="0">
    <tbody><tr>
      <td style="background-color: rgb(255, 255, 255);"><input type="submit" id="btnSubmit" value="删除" class="button" disabled="true"></td>
      <td align="right" style="background-color: rgb(255, 255, 255);">      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        总计  <span id="totalRecords">12</span>
        个记录分为 <span id="totalPages">2</span>
        页当前第 <span id="pageCurrent">1</span>
        页，每页 <input type="text" size="3" id="pageSize" value="10" onkeypress="return listTable.changePageSize(event)">
        <span id="page-link">
          <a href="javascript:listTable.gotoPageFirst()">第一页</a>
          <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">最末页</a>
          <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
            <option value="1">1</option><option value="2">2</option>          </select>
        </span>
      </div>
</td>
    </tr>
  </tbody></table>
</div>

</form>

<div id="footer">
	版权所有 &copy; 2006-2013 软工教育 - 高级PHP - </div>
</div>

</body>
</html>