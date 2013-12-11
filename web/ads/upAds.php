<?php
  include_once('../globalpath.php');
  include $common_path.'comm.php';
  
  $name=$_POST['name'];  //广告位置
  $responsor=$_POST['responsor'];  //员工id
  $staffname=$_POST['staffname'];  //员工姓名
  
  $adsTitle=$_POST['adsTitle'];
  $link=$_POST['linkAds'];
  $startTime=$_POST['startTime'];
  $deadTime=$_POST['deadTime'];
  
  $sql="UPDATE ads SET staff_id = '$responsor', staff_name='$staffname', adsTitle='$adsTitle', link='$link',startTime='$startTime',deadTime='$deadTime' WHERE place_id = '$name' ";
  echo $sql;
  $result=mysql_query($sql);
  if($result){
	  echo "<script>alert('经销商添加成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
  }else{
	  echo "<script>alert('添加失败!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
  }
  mysql_close();
?>
