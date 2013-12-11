<?php
  include_once('../globalpath.php');
  include $common_path.'comm.php';
  include $common_path.'mail.php';
  
  $time=uniqid();
  $placeid=$_POST['name_id'];  //广告位置id
  $place=$_POST['placename'];  //广告位置
  $staffid=$_POST['responsorid'];  //员工id
  $staffname=$_POST['responsor'];  //员工姓名
  $adsTitle=$_POST['adsTitle'];
  $link=$_POST['linkAds'];
  $startTime=$_POST['startTime'];
  $deadTime=$_POST['deadTime'];
  
  if($_FILES["fileUpload"]["size"]>0){
	  $file_name = $_FILES["fileUpload"]["name"];
	  $filepath = $time.'.'.f_post($file_name) ;
	  $path='../ads/file/'.$filepath;
	  $docpath='./file/'.$filepath;
	  if (!move_uploaded_file($_FILES["fileUpload"]["tmp_name"],$path )) {
		  echo "<script>alert('文件无法保存!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
		  exit(0);
	  }
  }else{
	  $docpath='';
  }

  $sql="insert into requestads values ('$time','$placeid','$place','$staffid','$staffname','$adsTitle','$link','$docpath','$startTime','$deadTime')";
  //echo $sql;
  $result=mysql_query($sql);
  if($result){
	  $to="1994560646@qq.com";
      $content="你好，刚刚收到一份广告排期的请求";
      $email=new AutoMail($to,$content);
	  echo "<script>alert('申请提交成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
  }else{
	  echo "<script>alert('申请提交失败!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
  }
  mysql_close();
  
  function f_post($f_upfiles){            //获得图片的格式
	   $tmp_upfiles=explode('.',$f_upfiles);  // 因为文件一般为 xx\music.flv ,所以以 点号 做分割
	   $tmp_num=count($tmp_upfiles);
	   $format=$tmp_upfiles[$tmp_num-1];
	   return $format;
    }
?>
