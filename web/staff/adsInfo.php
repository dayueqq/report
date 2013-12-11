<?php
  include_once('../globalpath.php');
  include $common_path.'comm.php';

  $sql="select * from ads";
  $result=mysql_query($sql);
  $b_num=mysql_num_rows($result);

  for($i=0;$arr=mysql_fetch_array($result);$i++){                                   
	  $info[$i]['placeid']=$arr['place_id'];                // 获得 成品路径             
	  $info[$i]['placename']=$arr['place_name'];
	  $info[$i]['staffid']=$arr['staff_id'];                // 获得 成品路径             
	  $info[$i]['staffname']=$arr['staff_name'];
	  $info[$i]['adsTitle']=$arr['adsTitle'];                // 获得 成品路径             
	  $info[$i]['link']=$arr['link'];           
	  $info[$i]['startTime']=$arr['startTime'];
	  $info[$i]['deadTime']=$arr['deadTime'];
  }
  $smarty->assign('info',$info);

  $smarty->display($html_path.'adsInfo.html');
  mysql_close();
?>