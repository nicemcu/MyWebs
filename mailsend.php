<?php 
//header("content-type:text/html; charset=utf-8"); 
//引入发送邮件类
require("smtp.php"); 
//使用163邮箱服务器
$smtpserver = "cp-hk-2.webhostbox.net";
//163邮箱服务器端口 
$smtpserverport = 465;
//你的163服务器邮箱账号
$smtpusermail = "sblpp@126.com";
//收件人邮箱
$smtpemailto = "sblpp@163.com";
//你的邮箱账号(去掉@163.com)
$smtpuser = "sblpp";//SMTP服务器的用户帐号 
//你的邮箱密码
$smtppass = "bblpp521"; //SMTP服务器的用户密码 

//邮件主题 
$mailsubject = "MCUFly WebSend Message";
//邮件内容 

$name = "name : ". $_POST["fullname"] . "\r\n";
$mailaddr ="mail : ". $_POST["email"] . "\r\n";
$content ="message : ". $_POST["message"] . "\n";

$mailbody = $name . $mailaddr . $content;
//邮件格式（HTML/TXT）,TXT为文本邮件 
$mailtype = "TXT";
//这里面的一个true是表示使用身份验证,否则不使用身份验证. 
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
//是否显示发送的调试信息 
$smtp->debug = FALSE;
//发送邮件
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 

?>