<?php
require("class.phpmailer.php"); //下载的文件必须放在该文件所在目录
$mail = new PHPMailer(); //建立邮件发送类
$address = $_POST['address']; 
$mail->IsSMTP(); // 使用SMTP方式发送
$mail->Host = "smtp.ym.163.com"; // 您的企业邮局域名
$mail->SMTPAuth = true; // 启用SMTP验证功能
$mail->Username = "admin@madeby.com.cn"; // 邮局用户名(请填写完整的email地址)
$mail->Password = "abcd12345"; // 邮局密码


$mail->From = "admin@madeby.com.cn"; //邮件发送者email地址
$mail->FromName = "MaDeBy官方团队";
$mail->AddAddress("$address", "");//收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
//$mail->AddReplyTo("", "");

//$mail->AddAttachment("/var/tmp/file.tar.gz"); // 添加附件
//$mail->IsHTML(true); // set email format to HTML //是否使用HTML格式
$mail->IsHTML(true);
$mail->Subject = "PHPMailer测试邮件"; //邮件标题
$mail->Body = "<img src='http://www.uestc.edu.cn/public/2014/03/006.png'>解决方法是：减少图片URL的个数，或者增加文字的数量，就可以发送出去。其他的方法还没有测试出来，所以解决QQ邮箱不显示图片的问题最好方式就是在邮件内容中多加一些文字信息。自己可以先测试一下收发的效果。

还有一种方法就是提示会员点击“信任此发件人的图片”，或者添加自己的邮箱为好友，不过很多人都比较懒，所以建议还是自己在结尾多加一些文字信息。当然如果大家谁有更好的方法也可以在本文留言，或者加我QQ：493077351 告诉我一下哦，我会非常感谢大家的。"; //邮件内容
$mail->AltBody = "text/html"; //附加信息，可以省略

if(!$mail->Send())
{
 echo "邮件发送失败. <p>";
 echo "错误原因: " . $mail->ErrorInfo;
 exit;
}

echo "邮件发送成功";
?>