<?php /* Smarty version Smarty-3.0.6, created on 2013-11-22 03:50:45
         compiled from "./addstaff.html" */ ?>
<?php /*%%SmartyHeaderCode:9218528ed495eb2956-43428909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c9497e818d7c9a6d26eda6799de497f1edd1802' => 
    array (
      0 => './addstaff.html',
      1 => 1383558922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9218528ed495eb2956-43428909',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js "></script>
<script type="text/javascript">
  function checkForm(){
	  if($('#name').val()==''){
		  alert('请输入姓名');
		  return false;
	  }
	  if($('#staffid').val()==''){
		  alert('请输入编号');
		  return false;
	  }
	  return true;
  }
  function check(obj,type){
	  if(type=='name'){
		  $.post("operation.php?action=checkname",{name:$(obj).val()},function(data){
			  if(data==1){
				  alert('员工姓名已经存在');
				  $(obj).val('');
			  }
		  });
	  }else{
		  $.post("operation.php?action=checkid",{id:$(obj).val()},function(data){
			  if(data==1){
				  alert('员工编号已经存在');
				  $(obj).val('');
			  }
		  });
	  }
  }
</script>
</head>

<body>
  
  <div style="width:900px; margin:0 auto">
    <div align="right"><a href="index.php">返回首页</a></div>
    <form action="operation.php?action=add" method="post" enctype="multipart/form-data" onsubmit="checkForm()">
      <table width="90%" border="1">
        <tr>
          <td width="100px">姓名</td>
          <td><input id="name" type="text" name="name" onblur="check(this,name)"/></td>
        </tr>
        <tr>
          <td>员工编号</td>
          <td>
             <input id="staffid" type="text" name="staffid" onblur="check(this,id)"/>
          </td>
        </tr>
        <tr>
          <td>权限</td>
          <td>
             <input type="radio" name="power" value="2" checked="checked" />员工
             <input type="radio" name="power" value="1" />管理员
          </td>
        </tr>
        <tr>
           <td colspan="2" align="right"><input type="submit" value="添加信息" /></td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>
