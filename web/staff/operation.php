<?php
  include_once('../globalpath.php');
  include $common_path.'comm.php';
  
  $action=$_GET['action'];  //操作指令
  
  if($action=='checkname'){   //查看员工
	  $name=$_POST['name'];
	  $sql="select * from staff where name='$name'";
	  $result=mysql_query($sql);
	  $num=mysql_num_rows($result);
	  if($num>0){
		  echo 1;
	  }else{
		  echo 0;
	  }
  }else if($action=='checkid'){
	  $id=$_POST['id'];
	  $sql="select * from staff where staff_id='$id'";
	  $result=mysql_query($sql);
	  $num=mysql_num_rows($result);
	  if($num>0){
		  echo 1;
	  }else{
		  echo 0;
	  }
  }else if($action=='add'){  //添加
	  $staffid=$_POST['staffid'];
	  $name=$_POST['name'];
	  $power=$_POST['power'];
	  
	  $sql="insert into staff values('$staffid','$name','$power')";
	  
	  $result=mysql_query($sql);
	  if($result){
		  echo "<script>alert('信息提交成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	  }else{
		  echo "<script>alert('信息提交失败!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	  }
  }else if($action=='del'){  //删除员工
	  $staffid=$_GET['staffid'];
  
	  $sql="delete from staff where staff_id='$staffid'";
	  $result=mysql_query($sql);
	  if($result){
		  echo "<script>alert('信息删除成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	  }else{
		  echo "<script>alert('信息删除失败!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	  }
  }else if($action=='choose'){  //筛选
	  $term=$_POST['term'];
	  
	  switch($term){
		  case 'staff':
		               $sql="select name from staff";
					   break;
		  case 'place':
		               $sql="select place from report group by place";
					   break;
		  case 'time':
		               $sql="select time from report group by time";
					   break;
	  }
	  $result=mysql_query($sql);
	  for($i=0;$arr=mysql_fetch_array($result);$i++){                           
		  $info[$i]=$arr[0];       // 获得 需要的信息 
	  }
	  $str=implode('@@',$info);
	  echo $str;
  }else if($action=='delreport'){
	  $reportid=$_GET['reportid'];
	  $sql="delete from report where report_id='$reportid'";
	  $result=mysql_query($sql);
	  if($result){
		  echo "<script>alert('信息删除成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	  }else{
		  echo "<script>alert('信息删除失败!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	  }
  }else if($action=='upreport'){
	  $reportid=$_GET['reportid'];
	  $money=$_POST['money'];
	  $place=$_POST['place'];
	  $report=$_POST['report'];
	  $sql="UPDATE report SET money='$money', place = '$place',report='$report' WHERE report_id='$reportid'";
	  $result=mysql_query($sql);
	  if($result){
		  echo "<script>alert('信息修改成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	  }else{
		  echo "<script>alert('信息修改失败!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	  }
  }
  mysql_close();
?>
