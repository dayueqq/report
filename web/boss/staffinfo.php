<?php
  include_once('../globalpath.php');
  include $common_path.'comm.php';
  require_once $common_path.'util/page.class.php';
  
  $gPageSize=20;   //得到每页最大显示数目
  
  $sql="select * from staff order by power";
  $result=mysql_query($sql);
  $b_num=mysql_num_rows($result);
		  
  $fpage=new Page($b_num,$gPageSize, "");  //调用  page.class.php 中的 page 函数  ！！！！！！！！
  mysql_data_seek($result,$fpage->limit);
  for($i=0;$i<$gPageSize&&($arr=mysql_fetch_array($result));$i++){                           
	  $info[$i]['staffid']=$arr['staff_id'];       // 获得 id          
	  $info[$i]['name']=$arr['name'];                // 获得 成品路径             
	  $info[$i]['power']=$arr['power'];     
  }
  $smarty->assign('info',$info);
  $pageshow=$fpage->fpage(array(8,3,4,5,6,7,2));
	           //用于安排显示的顺序，因为page.class.php设置时为8个参数，使用的时候可以随便选择0——8 中的任意一个或多个数，见 1小时23分
  $smarty->assign('pageshow',$pageshow);  
  
  $smarty->display($html_path.'staffinfo.html');
  mysql_close();
?>