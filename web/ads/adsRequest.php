<?php
  include_once('../globalpath.php');
  include $common_path.'comm.php';
  require_once $common_path.'util/page.class.php';
  
  $gPageSize=17;   //得到每页最大显示数目
  
  $sql="select * from requestads order by place_id ,request_id asc";
  $result=mysql_query($sql);
  $b_num=mysql_num_rows($result);
		  
  $fpage=new Page($b_num,$gPageSize, "");  //调用  page.class.php 中的 page 函数  ！！！！！！！！
  mysql_data_seek($result,$fpage->limit);
  for($i=0;$i<$gPageSize&&($arr=mysql_fetch_array($result));$i++){                           
	  $info[$i]['id']=$arr['request_id'];       // 获得 id          
	  $info[$i]['placeid']=$arr['place_id'];                // 获得 成品路径             
	  $info[$i]['placename']=$arr['place_name'];
	  $info[$i]['staffid']=$arr['staff_id'];                // 获得 成品路径             
	  $info[$i]['staffname']=$arr['staff_name'];
	  $info[$i]['adsTitle']=$arr['adsTitle'];                // 获得 成品路径             
	  $info[$i]['link']=$arr['link'];
	  $info[$i]['docpath']=$arr['docpath'];                // 获得 成品路径             
	  $info[$i]['startTime']=$arr['startTime'];
	  $info[$i]['deadTime']=$arr['deadTime'];
  }
  $smarty->assign('info',$info);
  $pageshow=$fpage->fpage(array(8,3,4,5,6,7,2));
	           //用于安排显示的顺序，因为page.class.php设置时为8个参数，使用的时候可以随便选择0——8 中的任意一个或多个数，见 1小时23分
  $smarty->assign('pageshow',$pageshow);  
  $smarty->display($html_path.'adsRequest.html');
  mysql_close();
?>