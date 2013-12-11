<?php /* Smarty version Smarty-3.0.6, created on 2013-11-22 08:47:17
         compiled from "./report.html" */ ?>
<?php /*%%SmartyHeaderCode:23488528f1a1568c7b6-50498077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8548a467b239cd06dd0fe27f875a2a4981c56ec0' => 
    array (
      0 => './report.html',
      1 => 1383620156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23488528f1a1568c7b6-50498077',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>业务信息</title>
<link href="../../res/css/staff/report.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
  window.onload=function(){
	  var tiaoJian='';  //筛选条件
	  
	  $('#table tr').each(function(i){
		   if(i%2==1){
			   $(this).css('backgroundColor','#FCC');
		   }
	  });
  }
  
  function show(obj){
	  window.location.href='report.php?order='+$(obj).val();
  }
  
  function saiXuan(obj,place){
	  if(place=='first'){
		  tiaoJian=$(obj).val();
		  $.post("operation.php?action=choose",{term:$(obj).val()},function(data){
			  var res=data.split('@@');
			  var str='';
			  for(var i=0;i<res.length;i++){
				  str+="<option value='"+res[i]+"'>"+res[i]+"</option>";
			  }
			  $('#choice').html(str);
		  });
	  }else{
		  window.location.href="report.php?detail="+tiaoJian+"&term="+$(obj).val();
		
	  }
  }
  
  //添加备注
  function update(obj,id){
	  $('.info').css('opacity',0.2);
	  $('#info').show();
	  $(obj).parent().parent().find('td').each(function(i){
		  switch(i){
			  case 0:$('#infoTable tr:eq(0) td:eq(1)').html($(this).html());break;
			  case 1:$('#place').val($(this).html());break;
			  case 3:$('#money').val($(this).html().replace('元',''));break;
			  case 4:$('#report').val($(this).html());break;
			  case 5:$('#infoTable tr:eq(3) td:eq(1)').html($(this).html());break;
		  }
      });
	  $('#theForm').attr('action','operation.php?action=upreport&reportid='+id);
  }
  
  //表单提交
  function checkForm(){
	  if($('#comment').val()==''){
		  alert('请输入批注');
		  return false;
	  }else{
		  return true;
	  }
  }
  
  //关闭表单
  function closeInfo(){
	  $('.info').css('opacity',1);
	  $('#info').hide();
  }
</script>

<body>
  <div class="info">
      排序方式&nbsp;&nbsp;<select onchange="show(this)">
          <option value="default">默认</option>
          <option value="place">按4S店名</option>
          <option value="time">按时间</option>   
      </select>&nbsp;&nbsp;
      
      <a href="index.php" style="float:right">返回首页</a>
      <br /><br />
      <table id="table" width="100%" border="1">
        <tr>
          <td width="8%">员工</td>
          <td width="15%">4S店名</td>
          <td width="10%">时间</td>
          <td width="8%">金额</td>
          <td width="30%">报告</td>
          <td>批注</td>
          <td width="5%">操作</td>
        </tr>
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['name'] = 'info_id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('info')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['info_id']['total']);
?>
            <tr>
              <td><?php echo $_smarty_tpl->getVariable('info')->value[$_smarty_tpl->getVariable('smarty')->value['section']['info_id']['index']]['name'];?>
</td>
              <td><?php echo $_smarty_tpl->getVariable('info')->value[$_smarty_tpl->getVariable('smarty')->value['section']['info_id']['index']]['place'];?>
</td>
              <td><?php echo $_smarty_tpl->getVariable('info')->value[$_smarty_tpl->getVariable('smarty')->value['section']['info_id']['index']]['time'];?>
</td>
              <td><?php echo $_smarty_tpl->getVariable('info')->value[$_smarty_tpl->getVariable('smarty')->value['section']['info_id']['index']]['money'];?>
元</td>
              <td><?php echo $_smarty_tpl->getVariable('info')->value[$_smarty_tpl->getVariable('smarty')->value['section']['info_id']['index']]['report'];?>
</td>
              <td><?php echo $_smarty_tpl->getVariable('info')->value[$_smarty_tpl->getVariable('smarty')->value['section']['info_id']['index']]['comment'];?>
</td>
              <td><a onclick="return confirm('是否删除此报表?')" href="operation.php?action=delreport&reportid=<?php echo $_smarty_tpl->getVariable('info')->value[$_smarty_tpl->getVariable('smarty')->value['section']['info_id']['index']]['reportid'];?>
"><img src="../../res/img/b_drop.png" title="删除" /></a>
                  <a href="javascript:void(0)" onclick="update(this,'<?php echo $_smarty_tpl->getVariable('info')->value[$_smarty_tpl->getVariable('smarty')->value['section']['info_id']['index']]['reportid'];?>
')"><img src="../../res/img/b_edit.png" title="批注" /></a>
              </td>
            </tr>
        <?php endfor; endif; ?>
        <tr>
           <td colspan="7" align="right"><a href="./download.php">生成excel</a></td>
        </tr>
      </table>
      <div style="clear:both; font-size:14px; padding-top:15px;"> 
         <p class="page" align="center"><?php echo $_smarty_tpl->getVariable('pageshow')->value;?>
</p>   <!-- 显示页码-->
      </div>
  </div>
  
  <div id="info">
      <form id="theForm" action="operation.php" method="post" enctype="multipart/form-data" onsubmit="return checkForm()">
          <div style="width:100%; clear:both; cursor:pointer" align="right" onclick="closeInfo()">关闭</div>
          <table id="infoTable" width="80%" border="1" style="margin:10px auto">
            <tr>
              <td width="20%" align="right">员工</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td align="right">4S店名</td>
              <td><input type="text" id="place" name="place" /></td>
            </tr>
            <tr>
              <td align="right">金额</td>
              <td><input type="text" id="money" name="money" />元</td>
            </tr>
            <tr>
              <td align="right" valign="top">报告</td>
              <td><input type="text" id="report" name="report" /></td>
            </tr>
            <tr>
              <td align="right" valign="top">批注</td>
              <td></td>
            </tr>
            <tr>
              <td colspan="2" align="right"><input type="submit" value="提交" /></td>
            </tr>
          </table>

      </form>
  </div>
</body>
</html>
