<?php
  include_once('../globalpath.php');
  include $common_path.'comm.php';
  
  $smarty->assign('name',$_COOKIE['name']);
  $smarty->display($html_path.'addreport.html');
  mysql_close();
?>