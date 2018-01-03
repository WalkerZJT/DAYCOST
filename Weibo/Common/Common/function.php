<?php
	function sendMail($address,$title,$message){
	//导入mail类文件
		vendor('PHPMailer.class#phpmailer'); //Thinkphp的导入方式，放在/ThinkPHP/Extend/Vendor/
		//创建mail对象
		$mail = new PHPMailer();

		$mail->IsSMTP(); //设置使用SMTP服务器发送
		$mail->Host = "smtp.163.com";  //设置163邮箱服务 
		$mail->SMTPAuth = true;     // 设置需要验证
		$mail->Username = "15769395589@163.com";  // 发件人使用邮箱
		$mail->Password = "9657481811aBcDeF"; // 设置发件人密码
		$mail->From = "15769395589@163.com";// 发件人邮箱
		$mail->FromName = "曾俊涛"; //发送者名称
		$mail->AddAddress($address); // 添加发送地址
		$mail->IsHTML(true); //指定支持html格式
		$mail->CharSet="UTF-8";
		$mail->Subject = $title;
		$mail->Body = $message;
		if($mail->Send()){
		  return true;
		}else{
		  return false;
		}
	}
?>