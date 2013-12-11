<?php
  header("Content-type:application/vnd.ms-excel");
  header("Content-Disposition:filename=test.xls");
  $sql=mysql_connect('localhost','hyc','hyc');
  $db=mysql_select_db("report",$sql);
  mysql_query('set names utf8');
  
  echo "网站\t";
  echo "定向\t";
  echo "位置\t";
  echo "形式\t";
  echo "尺寸\t";
  echo "天数\t";
  for($k=1;$k<32;$k++){
	  echo $k."\t";
  }
  echo "\n";
  
  $sql="select * from ads";
  $result=mysql_query($sql);
  
  for($i=0;$i<16;$i++){            
      $arr=mysql_fetch_array($result);               
	  echo "大粤网\t";      // 获得 id          
	  echo "汽车频道东莞站\t";              // 获得 成品路径             
	  echo $arr['place_name']."\t";   
	  echo $arr['format']."\t"; 
	  echo $arr['size']."\t"; 

	  $day=(strtotime($arr['deadTime'])-strtotime($arr['startTime']))/86400;
	  echo $day."\t"; 
	  
	  $startDay=((int)substr($arr['startTime'],8,2));//取得几号
      $endDay=((int)substr($arr['deadTime'],8,2));//取得几号
	  
	  $startMon=((int)substr($arr['startTime'],5,2));//取得几号
      $endMon=((int)substr($arr['deadTime'],5,2));//取得几号
	  
	  for($k=1;$k<32;$k++){
		  if($k<=$endDay&&$k>=$startDay){
			  echo "1\t";
		  }else if($k>=$startDay&&$endMon>$startMon){
			  echo "1\t";
		  }else{
			  echo "\t";
		  }
	  }
	  echo "\n";
  }
?>