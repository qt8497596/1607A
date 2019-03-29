<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 属性管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="{{ URL::asset('styles/general.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('styles/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('styles/fen.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>
<span class="action-span"><a href="{{ URL('attribute/add') }}">添加属性</a></span>
<span class="action-span1"><a href="{{ URL('index/main') }}">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品属性 </span>
<div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="" name="searchForm">
    <img src="{{ URL('images/icon_search.gif') }}" width="26" height="22" border="0" alt="SEARCH">
    按商品类型显示：<select name="goods_type" onchange="searchAttr(this.value)"><option value="0">所有商品类型</option>
          @foreach($data as $v)
          <option value="{{ $v->cat_id }}" selected="true">{{ $v->cat_name }}</option>
          @endforeach
      </select>
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
			{{--<th>排序</a></th>--}}
			<th>操作</th>
		</tr>

        @foreach($data as $v)
        <tr>
			<td nowrap="true" valign="top"><span><input value="1" name="checkboxes[]" type="checkbox">{{$v->attr_id}}</span></td>
			<td class="first-cell" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_attr_name', 1)">{{ $v->attr_name }}</span></td>
			<td nowrap="true" valign="top"><span>{{ $v->cat_name }}</span></td>
			<td nowrap="true" valign="top"><span>
                    {{--手工录入--}}
                    @if($v->attr_input_type == 0)
                        手工录入
                    @elseif($v->attr_input_type == 1)
                        从下面的列表中选择
                    @elseif($v->attr_input_type == 2)
                        多行文本框
                    @endif
                </span></td>
			<td valign="top"><span>
                    {{$v->attr_values}}
                </span></td>
			{{--<td align="right" nowrap="true" valign="top"><span onclick="listTable.edit(this, 'edit_sort_order', 1)">0</span></td>--}}
			<td align="center" nowrap="true" valign="top">
				<a href="{{url('attribute/edit')}}?attr_id={{$v->attr_id}}" title="编辑"><img src="{{ URL('images/icon_edit.gif') }}" border="0" height="16" width="16"></a>
				<a href="delete?attr_id={{ $v->attr_id }}" title="移除"><img src="{{ URL('images/icon_drop.gif') }}" border="0" height="16" width="16"></a>
			</td>
		</tr>
        @endforeach

      </tbody></table>

  <table cellpadding="4" cellspacing="0">
    <tbody><tr>
      <td style="background-color: rgb(255, 255, 255);"><input type="submit" id="btnSubmit" value="删除" class="button" disabled="true"></td>
      <td align="right" style="background-color: rgb(255, 255, 255);">      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
                <div id="pull_right">
                    <div class="pull-right">
                        {{$data->links()}}
                    </div>
                </div>
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