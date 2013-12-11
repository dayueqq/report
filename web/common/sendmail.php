<?php
  include "mail.php";
  
  $to="372271602@qq.com";
  $content="你好，刚刚收到一份广告排期的请求";
  $email=new AutoMail($to,$content);
?>