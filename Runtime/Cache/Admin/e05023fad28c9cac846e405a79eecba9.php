<?php if (!defined('THINK_PATH')) exit();?><script language="javascript">
if(!isset(que)){
	var que = new Array();
}
var idd = '';
function onSearch(idd){
	$.messager.progress();
	$("#searchFormUser"+idd).form('submit',{
		url:'__URL__/advsearch/act/1',
		success:function(data){
			$.messager.progress('close');
			$("#Users").datagrid('reload');
			var sa = '<?php echo (C("SEARCH_ADV_ACTION")); ?>';
			if(sa==1){
				$("#searchUser").dialog('close',true);
			}
		}
	});
}

var acon = $("#dd<?php echo ($uniqid); ?>").html();

//插行
que['add_<?php echo ($uniqid); ?>'] = new actRow();
que['add_<?php echo ($uniqid); ?>'].boxid = 'toadd<?php echo ($uniqid); ?>';
que['add_<?php echo ($uniqid); ?>'].content = '<TR>'+acon+'</TR>';
</script>
<div class="con-tb">
<form id="searchFormUser<?php echo ($uniqid); ?>" method="post">
 <table class="infobox" width="100%" border="0" cellspacing="0" cellpadding="0" >
  <tbody id="toadd<?php echo ($uniqid); ?>">
  <tr>
    <td width="3%" height="32" align="center"><img onclick="que['add_<?php echo ($uniqid); ?>'].a()" style="cursor:pointer" src="__ITEM__/__ADMIN.IMG__/add_tr.gif" class="addtr" title="插入行" /></td>
    <td width="9%" align="center"><select name="field[]" data-options="editable:false">
      <option  value="group_name">角色</option>
      <option  value="username">账号</option>
      <option  value="comy_name">所属公司</option>
      <option  value="part_name">所属部门</option>
      <option  value="email">邮箱</option>
      <option  value="login_count">登录次数</option>
      <option  value="last_visit">最后登录时间</option>
      <option  value="t1_old_status">状态</option>
    </select></td>
    <td width="9%" align="center"><select name="mod[]" data-options="editable:false">
      <option  value="like">包含</option>
        <option value="=">等于</option> 
        <option  value=">">大于</option>
        <option  value="<">小于</option>
        <option  value=">=">大于等于</option>
        <option  value="<=">小于等于</option> 
        <option  value="<>">不等于</option>  
        <option  value="not like">不包含</option>
    </select></td>
    <td width="70%" align="center"><input name="keys[]" id="keyword" class="easyui-validatebox" style="width:98%" data-options="" /></td>
    <td width="9%" align="center"><select name="type[]" data-options="editable:false">
      <option value="AND" selected="selected">并且</option>
      <option  value="OR">或者</option>
    </select></td>
  </tr>
  </tbody>
  <tr id="dd<?php echo ($uniqid); ?>" style="display:none">
    <td width="3%" height="32" align="center"><img onclick="que['add_<?php echo ($uniqid); ?>'].d()" style="cursor:pointer" src="__ITEM__/__ADMIN.IMG__/del_tr.gif" class="deltr" title="删除行" /></td>
    <td width="9%" align="center"><select  name="field[]" data-options="editable:false">
      <option  value="group_name">角色</option>
      <option  value="username">账号</option>
      <option  value="comy_name">所属公司</option>
      <option  value="part_name">所属部门</option>
      <option  value="email">邮箱</option>
      <option  value="login_count">登录次数</option>
      <option  value="last_visit">最后登录时间</option>
      <option  value="t1_old_status">状态</option>
    </select></td>
    <td width="9%" align="center"><select name="mod[]" data-options="editable:false">
     <option  value="like">包含</option>
        <option value="=">等于</option> 
        <option  value=">">大于</option>
        <option  value="<">小于</option>
        <option  value=">=">大于等于</option>
        <option  value="<=">小于等于</option> 
        <option  value="<>">不等于</option>  
        <option  value="not like">不包含</option>
    </select></td>
    <td width="70%" align="center"><input name="keys[]" id="keyword" class="easyui-validatebox" style="width:98%" data-options="" /></td>
    <td width="9%" align="center"><select name="type[]" data-options="editable:false">
      <option value="AND" selected="selected">并且</option>
      <option  value="OR">或者</option>
    </select></td>
  </tr>
  <tr>
    <td height="35" colspan="5" align="center"><a href="#" onclick="javascript:onSearch('<?php echo ($uniqid); ?>')" id="su" class="easyui-linkbutton">立即查询</a></td>
    </tr>
 </table>
</form>
</div>