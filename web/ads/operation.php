<?php
  include_once('../globalpath.php');
  include $common_path.'comm.php';
  
  $action=$_GET['action'];  //操作指令
  
  if($action=='delads'){
	  $adsid=$_GET['adsid'];
	  $sql="delete from requestads where request_id='$adsid'";
	  $result=mysql_query($sql);
	  if($result){
		  echo "<script>alert('排期删除成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	  }else{
		  echo "<script>alert('排期删除失败!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	  }
  }else if($action=='resetads'){
	  $placeid=$_GET['placeid'];
	  $sql="UPDATE ads SET staff_id = '',staff_name='',adsTitle='',link='',startTime='',deadTime='' WHERE place_id = '$placeid' ";
	  $result=mysql_query($sql);
	  if($result){
		  echo "<script>alert('排期清空成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	  }else{
		  echo "<script>alert('排期清空失败!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	  }
  }
  mysql_close();
?>
