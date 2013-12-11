<?php /* Smarty version Smarty-3.0.6, created on 2013-11-22 08:25:24
         compiled from "./applyAds.html" */ ?>
<?php /*%%SmartyHeaderCode:2643528f14f437cd70-14286199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab86924766b4a755e169e8013b24e8d4d2cc569d' => 
    array (
      0 => './applyAds.html',
      1 => 1383638580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2643528f14f437cd70-14286199',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="title" content="员工管理系统">
<meta name="apple-touch-fullscreen" content="YES">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>东莞市悦车广告有限公司员工管理系统</title>
<link rel="stylesheet" href="../../res/css/staff/applyAds.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
  function checkForm(){
	  $('#placename').val($('#name_id').find("option:selected").text());
	  if($('#startTime').val()==''){
		  alert('请输入申请日期');
		  return false;
	  }else{
		  reg=/(\d{3,4}\-\d{2}\-\d{2})/;   
		  if(!reg.test($('#startTime').val())){   
            alert('申请日期请输入正确的格式，如: 2013-01-01'); 
			return false;  
          }
	  }
	  if($('#deadTime').val()==''){
		  alert('请输入截止日期');
		  return false;
	  }else{
		  reg=/(\d{3,4}\-\d{2}\-\d{2})/;   
		  if(!reg.test($('#deadTime').val())){   
            alert('截止日期请输入正确的格式，如: 2013-01-01'); 
			return false;  
          }
	  }
      $('#theForm').submit();
  }
</script>
<body class="bg01">
      <div id="content">
      <div class="header">
        <p>悦车广告 &nbsp;&nbsp;&nbsp;&nbsp;移动办公</p>
        <p>信息录入系统</p>
      </div>
      <div class="section">
	  <p>欢迎您，<span id="user-name"><?php echo $_smarty_tpl->getVariable('name')->value;?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;!</p>
      </div>

      <form method="post" action="upapplyAds.php" id="theForm" enctype="multipart/form-data">
        <div class="section">
        	<div id="section_items">
                <label for="name">广告位：</label>
                <select id="name_id" class="items" name="name_id">
                  <option value="0">-请选择-</option>
                  <option value="1">全屏</option>
                  <option value="2">banner</option>
                  <option value="3">单联广告</option>
                  <option value="4">右侧button</option>
                  <option value="5">中间小通栏</option>
                  <option value="6">顶部通栏1</option>
                  <option value="7">顶部通栏2</option>
                  <option value="8">顶部通栏3</option>
                  <option value="9">顶部通栏4</option>
                  <option value="10">首页通栏1</option>
                  <option value="11">首页通栏2</option>
                  <option value="12">首页通栏3</option>
                  <option value="13">顶部左横幅1</option>
                  <option value="14">顶部左横幅2</option>
                  <option value="15">顶部右横幅1</option>
                  <option value="16">顶部右横幅2</option>
              </select>		
		<br>
        <input type="hidden" id="placename" name="placename">
        <input type="hidden" name="responsor" value="<?php echo $_smarty_tpl->getVariable('name')->value;?>
">
		<label for="responsor">负责人：</label>
		 <select id="responsor" class="items" name="responsorid">
			<option value="<?php echo $_smarty_tpl->getVariable('staffid')->value;?>
"><?php echo $_smarty_tpl->getVariable('name')->value;?>
</option>
		</select>				
		<br>
		<label for="adsTitle">专题：</label>
                <input id="adsTitle" class="items" name="adsTitle" placeholder="专题名" type="text"><br>
		<label for="链接">链接：</label>
                <input id="linkAds" class="items" name="linkAds" placeholder="短链接" type="text"><br>
                <label for="startTime">申请日期：</label>
                <input id="startTime" class="items" name="startTime" placeholder="YYYY-MM-DD" type="text"><br>
                <label for="startTime">截止日期：</label>
                <input id="deadTime" class="items" name="deadTime" placeholder="YYYY-MM-DD" type="text"><br>
		        <label for="startTime">提交文件：</label>
                <input id="fileUpload" class="items1" name="fileUpload"  type="file"><br>
                </div>
        </div>
      </form>
    

         <div id="btn_box">
          <input id="btn" type="button" value="确认修改"  onClick="return checkForm()">
          <input id="btn" type="button" value="返回首页" onClick="window.location.href='./index.php'">
	</div>   
</body>
</html>
