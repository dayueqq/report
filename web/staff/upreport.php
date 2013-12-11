<?php
  include_once('../globalpath.php');
  include $common_path.'comm.php';
  
  
  $staffid=$_COOKIE['staffid'];
  $name=$_COOKIE['name'];
  $num=$_POST['num'];
  
  for($i=0;$i<$num;$i++){
      $place[$i]=$_POST['name'.$i];
      $money[$i]=$_POST['money'.$i];
      $report[$i]=$_POST['detail'.$i];
  }
  $time=date('Y-m-d');

  $sql="insert into report values";
  for($i=0;$i<$num;$i++){
	  $id=uniqid();
	  if($i==$num-1){
		  $sql=$sql."('$id','$staffid','$name','$place[$i]','$money[$i]','$report[$i]','$time','')";
	  }else{
		  $sql=$sql."('$id','$staffid','$name','$place[$i]','$money[$i]','$report[$i]','$time',''),";
	  }
  }
  
  $result=mysql_query($sql);
  if($result){
	  echo "<script>alert('报告提交成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
  }else{
	  echo "<script>alert('报告提交失败!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
  }
  mysql_close();
?>
