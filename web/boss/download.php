<?php
  header("Content-type:application/vnd.ms-excel");
  header("Content-Disposition:filename=test.xls");
  $sql=mysql_connect('localhost','root','root');
  $db=mysql_select_db("report",$sql);
  mysql_query('set names utf8');
  
  echo "时间\t";
  echo "姓名\t";
  echo "4S店名\t";
  echo "金额\t";
  echo "工作报告\t\n";
  
  $sql="select * from report order by report_id desc";
  $result=mysql_query($sql);
  $b_num=mysql_num_rows($result);
  
  for($i=0;($arr=mysql_fetch_array($result));$i++){                           
	  echo $arr['time']."\t";      // 获得 id          
	  echo $arr['name']."\t";              // 获得 成品路径             
	  echo $arr['place']."\t";   
	  echo $arr['money']."\t"; 
	  echo $arr['report']."\t\n"; 
  }
?>