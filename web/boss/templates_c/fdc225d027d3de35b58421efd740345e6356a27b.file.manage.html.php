<?php /* Smarty version Smarty-3.0.6, created on 2013-11-22 03:49:01
         compiled from "./manage.html" */ ?>
<?php /*%%SmartyHeaderCode:16388528ed42d711df8-13504707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdc225d027d3de35b58421efd740345e6356a27b' => 
    array (
      0 => './manage.html',
      1 => 1383638780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16388528ed42d711df8-13504707',
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
<title>东莞市悦车广告有限公司信息管理系统</title>
<link rel="stylesheet" href="../../res/css/boss/manage.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>

<body class="bg01">


      <div class="header">
        <p>悦车广告&nbsp;&nbsp;&nbsp;&nbsp;移动办公</p>
        <p>信息管理系统</p>
      </div>


      <div class="section">
	  <p>欢迎您，<span id="user-name"><?php echo $_smarty_tpl->getVariable('name')->value;?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;!</p>
      </div>


      <div class="section1">
	<div class="workerReport">
		<a href="report.php">员工报表</a>
	</div>
	<div class="adsRoport">
		<a href="adsInfo.php">广告排期</a>
	</div>
	<div class="addWorker">
		<a href="addstaff.php">增加员工</a>
	</div>
	<div class="workerManage">
		<a href="staffinfo.php">查看员工</a>
	</div>
	
     </div>
</body>
</html>
