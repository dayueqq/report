<?php
  include_once('../globalpath.php');
  include $common_path.'comm.php';
  
  $smarty->assign('name',$_COOKIE['name']);
  
  $smarty->display($html_path.'manage.html');
  mysql_close();
?>