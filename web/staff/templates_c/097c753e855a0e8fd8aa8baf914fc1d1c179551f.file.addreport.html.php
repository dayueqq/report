<?php /* Smarty version Smarty-3.0.6, created on 2013-11-22 08:47:42
         compiled from "./addreport.html" */ ?>
<?php /*%%SmartyHeaderCode:16633528f1a2ed00710-37749322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '097c753e855a0e8fd8aa8baf914fc1d1c179551f' => 
    array (
      0 => './addreport.html',
      1 => 1383559822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16633528f1a2ed00710-37749322',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="title" content="员工管理系统">
<meta name="apple-touch-fullscreen" content="YES">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>悦车广告 移动办公</title>
<link rel="stylesheet" href="../../res/css/staff/addreport.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script language="javascript">   
    var divCount=0;
    var addnum=1;
	
    function AddTextarea(){   
      var otr1=document.getElementById("section-items"+divCount);
	  var label1 = document.createElement("label");
	  label1.innerHTML="店名：";	
	  var innerDiv= document.createElement("div");
	  innerDiv.innerHTML= "<input type='text' class='items' name='name"+addnum+"' value='4S店名' id='name"+addnum+"' onClick='clickClear(this)' onBlur='show(this,1)'>";
	  otr1.appendChild(label1);
	  otr1.appendChild(innerDiv);
	  
      var newline1=document.createElement("br");
	 otr1.appendChild(newline1);
       
    var otr2=document.getElementById("section-items"+divCount);
	var label2 = document.createElement("label");	
	label2.innerHTML="目标："
	var innerDiv2 = document.createElement("div");
	innerDiv2.innerHTML= "<input type='text' class='items' name='money"+addnum+"' value='销售目标金额' id='money"+addnum+"' onClick='clickClear(this)' onBlur='show(this,2)'>";
	otr2.appendChild(label2);
	otr2.appendChild(innerDiv2);
       var newline2=document.createElement("br");
	otr2.appendChild(newline2);
       
        var otr3=document.getElementById("section-items"+divCount);
	var label3 = document.createElement("label");
	var innerDiv3 = document.createElement("div");
	label3.innerHTML="拜访情况：";	
	innerDiv3.innerHTML= "<textarea id='detail"+addnum+"'  name='detail"+addnum+"'></textarea>";
	otr3.appendChild(label3);
	otr3.appendChild(innerDiv3);
       var newline3=document.createElement("br");
	otr3.appendChild(newline3);
    }  
    function AddDiv(){
        var TemO=document.getElementById("form01");
        var newDiv = document.createElement("div");
        divCount = divCount + 1;      
        newDiv.id="Div" + (divCount);
        TemO.appendChild(newDiv);
        document.getElementById("Div"+ divCount).className="section";
        
	var Tem1=document.getElementById("Div" + divCount);
        var newDiv1 = document.createElement("div");
        newDiv1.id="section-items"+divCount;
        Tem1.appendChild(newDiv1);
         
    }
    function delDiv(){
         var divArea=document.getElementById("Div" + divCount);
         divArea.parentNode.removeChild(divArea);
	     divCount--;
         addnum--;
    }

    function AddForm(){
         AddDiv();
	     AddTextarea();
	     addnum++;
    }  
	
	function upForm(){
		for(var i=0;i<addnum;i++){
			if(document.getElementById('name'+i).value=='4S店名'||document.getElementById('name'+i).value==''){
				alert("请填店名");
				return false;
			}
			if(document.getElementById('money'+i).value=='销售目标金额'||document.getElementById('money'+i).value==''){
				alert("请填销售目标金额");
				return false;
			}
			if(document.getElementById('detail'+i).value==''){
				alert("请填订单详情");
				return false;
			}
		}
		document.getElementById('num').value=addnum;
		document.getElementById('form01').submit();
	}
	
	function clickClear(obj){
		if(obj.value=='4S店名'){
			obj.value='';
		}else if(obj.value=='销售目标金额'){
			obj.value='';
		}
	}
	function show(obj,type){
		if(type==1&&obj.value==''){
			obj.value='4S店名';
		}
		if(type==2&&obj.value==''){
			obj.value='销售目标金额';
		}
	}
    </script>
</head>

<body class="bg01">
      <div id="content">
      <div class="header">
        <p>悦车广告 移动办公</p>
        <p>信息录入系统</p>
      </div>
      <div class="section">
	  <p>欢迎您，<span id="user-name"><?php echo $_smarty_tpl->getVariable('name')->value;?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;!</p>
      </div>
      <form action="upreport.php" method="post" enctype="multipart/form-data" id="form01">
        <div class="section">
        	<div id="section_items">
                <label for="name">店名：</label>
                <input id="name0" class="items" name="name0" value="4S店名" type="text" onClick="clickClear(this)" onBlur="show(this,1)"><br>
                <label for="password">目标：</label>
                <input id="money0" class="items" name="money0" value="销售目标金额" type="text" onClick="clickClear(this)" onBlur="show(this,2)"><br>
				<label for="detail">拜访情况：</label>
                <textarea id="detail0"  name="detail0" ></textarea><br>
            </div>
        </div>
        <input type="hidden" id="num" name="num" >
      </form>
    

         <div id="btn_box">
	  <input id="btn"  type="button" value="增加条项" onClick="AddForm()" />
		<br>
	  <input id="btn"  type="button" value="删除条项" onClick="delDiv()" />
                <br>
          <input id="btn" type="button" value="确认提交" onClick="upForm()">
           <br>
          <input id="btn" type="button" value="返回首页" onClick="window.location.href='./index.php'">
	</div>   
    <!--	
    <script type="text/javascript">
		document.getElementById("btn").onclick = function() {
			var name = document.getElementById("name").value;
			var password = document.getElementById("password").value;
			var items = document.getElementById("items_select").value;
			if(name == "") {
				alert("姓名不能为空！");
				return false;
			}
			if(password == "") {
				alert("手机不能为空！");
				return false;
			}
			if(items == "") {
				alert("车系不能为空！");
				return false;
			}
		}
	</script>
-->
</body>
</html>
