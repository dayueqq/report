<?php
  include_once('../globalpath.php');
  include $common_path.'comm.php';
  
  $smarty->assign('name',$_COOKIE['name']);
  $smarty->assign('staffid',$_COOKIE['staffid']);
  $smarty->display($html_path.'applyAds.html');
  mysql_close();
?>