<?php /* Smarty version Smarty-3.0.6, created on 2013-11-22 08:47:16
         compiled from "./manage.html" */ ?>
<?php /*%%SmartyHeaderCode:6467528f1a14014677-65472222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdc225d027d3de35b58421efd740345e6356a27b' => 
    array (
      0 => './manage.html',
      1 => 1383638788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6467528f1a14014677-65472222',
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
<link rel="stylesheet" href="../../res/css/staff/manage.css">
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
	<div class="addReport">
		<a href="addreport.php">添加报告</a>
	</div>
	<div class="checkReport">
		<a href="report.php">查看报告</a>
	</div>
	<div class="checkAds">
		<a href="adsInfo.php">广告排期</a>
	</div>
	<div class="checkAdsApply">
		<a href="../ads/adsRequest.php">查看申请</a>
	</div>
    	<div class="applyAds">
		<a href="applyAds.php">申请排期</a>
	</div>
    	<div class="wait"> 
		<a href="#">敬请期待</a>
	</div>
     </div>
</body>
</html>
