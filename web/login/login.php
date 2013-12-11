<?php
    include_once('../globalpath.php');
    include $_SERVER['DOCUMENT_ROOT'].'/report/web/common/sql.inc.php';
	if(isset($_POST['sub'])){
		$sql="select * from staff where name='{$_POST["user"]}' and staff_id='".($_POST["password"])."'";
	
		$result=mysql_query($sql);

        $num=mysql_num_rows($result);
		
		if($num> 0){
			$row=mysql_fetch_array($result); 
			$time=time()+60*60*8;
			setCookie('staffid',$row['staff_id'],$time,'/');	
			setCookie('name',$row['name'],$time,'/');	
			setCookie('power',$row['power'],$time,'/');
			setCookie('isLogin','true',$time,'/');
			if($row['name']=='初英杰'){
				echo "<script>window.location.href='../ads/'</script>"; 
			}else if($row['power']==2){
				echo "<script>window.location.href='../staff/'</script>"; 
			}else if($row['power']==1){
				echo "<script>window.location.href='../boss/'</script>"; 
			}
		}
		mysql_close();
		echo "<script>alert('用户名密码有误')</script>";
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="title" content="员工管理系统">
<meta name="apple-touch-fullscreen" content="YES">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>东莞市悦车广告有限公司员工管理系统</title>
<link rel="stylesheet" href="../../res/css/login/login.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body class="bg01">
      <div id="content">
      <div class="header">
        <p>悦车广告 移动办公</p>
      </div>
      <form action="login.php" method="post" enctype="multipart/form-data">
        <div class="section" align="center">
        	<div id="section_items">
              <label for="name">姓名：</label>
                <input id="name" class="items" name="user"><br>
                <label for="password">密码：</label>
                <input id="password" class="items" name="password" type="password"><br>
          </div>
        </div>
        <div id="btn_box">
        	<input id="sub" type="submit" name="sub" value="登 录">
        </div>
      </form>
	</div>  
    <script type="text/javascript">
		document.getElementById("sub").onclick = function() {
			var name = document.getElementById("name").value;
			var password = document.getElementById("password").value;
			if(name == "") {
				alert("姓名不能为空！");
				return false;
			}
			if(password == "") {
				alert("手机不能为空！");
				return false;
			}
		}
	</script>
</body>
</html>
