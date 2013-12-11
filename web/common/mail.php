<?
 require_once ('email.class.php');
 class AutoMail{
   //##########################################
	var $smtpserver = "smtp.126.com";//SMTP服务器
	var $smtpserverport =25;//SMTP服务器端口
	var $smtpusermail = "";//SMTP服务器的用户邮箱
	var $smtpemailto = "";//发送给谁
	var $smtpuser = "fshyhyc@126.com";//SMTP服务器的用户帐号
	var $smtppass = "83354158";//SMTP服务器的用户密码
	var $mailsubject = "广告排期请求";//邮件主题
	var $mailbody = "<h1> 这是一个测试程序 通过使用php进行定时邮件发送，你可能会觉得有点sb，</h1><hr>谢谢，2012-22:00";//邮件内容
	var $mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	##########################################
	
	function __construct($to ,$content){
		$this->smtpemailto=$to;
		$this->mailbody=$content;
		$this->send();
	}
	
	function send(){
		$smtp = new smtp($this->smtpserver,$this->smtpserverport,true,$this->smtpuser,$this->smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
		$smtp->debug = true;//是否显示发送的调试信息
		//sendmail($to, $from, $subject = "", $body = "", $mailtype, $cc = "", $bcc = "", $additional_headers = "");
		$smtp->sendmail($this->smtpemailto, $this->smtpuser, $this->mailsubject, $this->mailbody, $this->mailtype);
	}
 }