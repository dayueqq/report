<?php
  include $_SERVER['DOCUMENT_ROOT'].'/report/web/common/sql.inc.php';
  include $_SERVER['DOCUMENT_ROOT'].'/report/web/smarty.inc.php';
  if(!$_COOKIE['isLogin']){
	  echo "<script>alert('您不具备访问权限！');window.location.href='../login/login.php'</script>";  //避免使用 header()函数跳转
  }

?> 