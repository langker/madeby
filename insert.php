<?php
	require("class.phpmailer.php"); //包含邮件
	//set_time_limit(0);
	$conn=mysql_connect("SAE_MYSQL_HOST_M","SAE_MYSQL_USER","SAE_MYSQL_PASS");	//连接数据库
	mysql_select_db("report",$conn);
	mysql_query("set names 'utf8'");
	

	if(!empty($_POST[mail]))	
	{
		$sql="select * from answer where EMAIL = '$_POST[mail]'";
		$result=mysql_query($sql,$conn);
		if(mysql_num_rows($result))		//该邮箱存在
		{	
			echo json_encode(FALSE);			
			exit;	
		}
		$mail = new PHPMailer(); //建立邮件发送类 
		$mail->IsSMTP(); // 使用SMTP方式发送
		$mail->Host = "smtp.ym.163.com"; // 您的企业邮局域名
		$mail->SMTPAuth = true; // 启用SMTP验证功能
		$mail->Username = "admin@madeby.com.cn"; // 邮局用户名(请填写完整的email地址)
		$mail->Password = "abcd12345"; // 邮局密码


		$mail->From = "admin@madeby.com.cn"; //邮件发送者email地址
		$mail->FromName = "MaDeBy官方团队";
		$mail->AddAddress($_POST[mail], "亲爱的用户~");//	收件人地址，可以替换成任何想要接收邮件的email信箱,

		$mail->IsHTML(true);
		$mail->Subject = "PHPMailer测试邮件"; //邮件标题
		$mail->Body = "<img src='http://www.uestc.edu.cn/public/2014/03/006.png'>"; //邮件内容
		$mail->AltBody = "text/html"; //附加信息，可以省略

		$mail->Send();
	}
	
	//mysql_query("LOCK TABLES answer WRITE");		//锁定表
	//mysql_query("LOCK TABLES answer READ");
	if(!empty($_POST[mail]))
	{
		$sql="insert into answer(EMAIL) VALUES('$_POST[mail]')";	//插入邮件
		mysql_query($sql);

		//开始插入数据
		$sql="update answer set 1X='$_POST[n1]' where EMAIL='$_POST[mail]'";
		mysql_query($sql,$conn);

		$sql="update answer set 4A='$_POST[n4a]' where EMAIL='$_POST[mail]'";
		mysql_query($sql,$conn);

		$sql="update answer set 4B='$_POST[n4b]' where EMAIL='$_POST[mail]'";
		mysql_query($sql,$conn);

		$sql="update answer set 4C='$_POST[n4c]' where EMAIL='$_POST[mail]'";
		mysql_query($sql,$conn);

		$sql="update answer set 4D='$_POST[n4d]' where EMAIL='$_POST[mail]'";
		mysql_query($sql,$conn);

		$sql="update answer set 4F='$_POST[n4f]' where EMAIL='$_POST[mail]'";
		mysql_query($sql,$conn);

		$sql="update answer set 5X='$_POST[n5]' where EMAIL='$_POST[mail]'";
		mysql_query($sql,$conn);

		$sql="update answer set 7X='$_POST[n7]' where EMAIL='$_POST[mail]'";
		mysql_query($sql,$conn);

		$sql="update answer set 8X='$_POST[n8]' where EMAIL='$_POST[mail]'";
		mysql_query($sql,$conn);

		$sql="update answer set 9X='$_POST[n9]' where EMAIL='$_POST[mail]'";
		mysql_query($sql,$conn);

		$sql="update answer set 11X='$_POST[n11]' where EMAIL='$_POST[mail]'";
		mysql_query($sql,$conn);

		for($i=0;$i<count($_POST[v2]);$i++)
		{
			if(strcmp($_POST[v2][$i],"2A")==0||strcmp($_POST[v2][$i],"2B")==0||strcmp($_POST[v2][$i],"2C")==0||strcmp($_POST[v2][$i],"2D")==0)
			{
				$sql="update answer set ".$_POST[v2][$i]."='1' where EMAIL='$_POST[mail]'";
				mysql_query($sql,$conn);
			}
			else
			{
				$sql="update answer set 2E='".$_POST[v2][$i]."' where EMAIL='$_POST[mail]'";
				mysql_query($sql,$conn);
			}
		}
		
		for($i=0;$i<count($_POST[v3]);$i++)
		{
			if(strcmp($_POST[v3][$i],"3A")==0||strcmp($_POST[v3][$i],"3B")==0||strcmp($_POST[v3][$i],"3C")==0||strcmp($_POST[v3][$i],"3D")==0||strcmp($_POST[v3][$i],"3E")==0)
			{
				$sql="update answer set ".$_POST[v3][$i]."='1' where EMAIL='$_POST[mail]'";
				mysql_query($sql,$conn);
			}
			else
			{
				$sql="update answer set 3F='".$_POST[v3][$i]."' where EMAIL='$_POST[mail]'";
				mysql_query($sql,$conn);
			}
		}
		
		for($i=0;$i<count($_POST[v6]);$i++)
		{
			if(strcmp($_POST[v6][$i],"5A")==0||strcmp($_POST[v6][$i],"5B")==0||strcmp($_POST[v6][$i],"5C")==0||strcmp($_POST[v6][$i],"5D")==0)
			{
				$sql="update answer set ".$_POST[v6][$i]."='1' where EMAIL='$_POST[mail]'";
				mysql_query($sql,$conn);
			}
			else
			{
				$sql="update answer set 6E='".$_POST[v6][$i]."' where EMAIL='$_POST[mail]'";
				mysql_query($sql,$conn);
			}
		}

		for($i=0;$i<count($_POST[v10]);$i++)
		{
			$sql="update answer set ".$_POST[v10][$i]."='1' where EMAIL='$_POST[mail]'";
			mysql_query($sql,$conn);
		}
	}
	else
	{

		//开始插入数据
		$sql="insert into answer(1x) values('$_POST[n1]')";
		mysql_query($sql,$conn);
		echo json_encode($sql);
		$id=mysql_insert_id();

		$sql="update answer set 4A='$_POST[n4a]' where id=$id";
		mysql_query($sql,$conn);

		$sql="update answer set 4B='$_POST[n4b]' where id=$id";
		mysql_query($sql,$conn);

		$sql="update answer set 4C='$_POST[n4c]' where id=$id";
		mysql_query($sql,$conn);

		$sql="update answer set 4D='$_POST[n4d]' where id=$id";
		mysql_query($sql,$conn);

		$sql="update answer set 4F='$_POST[n4f]' where id=$id";
		mysql_query($sql,$conn);

		$sql="update answer set 5X='$_POST[n5]' where id=$id";
		mysql_query($sql,$conn);

		$sql="update answer set 7X='$_POST[n7]' where id=$id";
		mysql_query($sql,$conn);

		$sql="update answer set 8X='$_POST[n8]' where id=$id";
		mysql_query($sql,$conn);

		$sql="update answer set 9X='$_POST[n9]' where id=$id";
		mysql_query($sql,$conn);

		$sql="update answer set 11X='$_POST[n11]' where id=$id";
		mysql_query($sql,$conn);

		for($i=0;$i<count($_POST[v2]);$i++)
		{
			if(strcmp($_POST[v2][$i],"2A")==0||strcmp($_POST[v2][$i],"2B")==0||strcmp($_POST[v2][$i],"2C")==0||strcmp($_POST[v2][$i],"2D")==0)
			{
				$sql="update answer set ".$_POST[v2][$i]."='1' where id=$id";
				mysql_query($sql,$conn);
			}
			else
			{
				$sql="update answer set 2E='".$_POST[v2][$i]."' where id=$id";
				mysql_query($sql,$conn);
			}
		}
		
		for($i=0;$i<count($_POST[v3]);$i++)
		{
			if(strcmp($_POST[v3][$i],"3A")==0||strcmp($_POST[v3][$i],"3B")==0||strcmp($_POST[v3][$i],"3C")==0||strcmp($_POST[v3][$i],"3D")==0||strcmp($_POST[v3][$i],"3E")==0)
			{
				$sql="update answer set ".$_POST[v3][$i]."='1' where id=$id";
				mysql_query($sql,$conn);
			}
			else
			{
				$sql="update answer set 3F='".$_POST[v3][$i]."' where id=$id";
				mysql_query($sql,$conn);
			}
		}
		
		for($i=0;$i<count($_POST[v6]);$i++)
		{
			if(strcmp($_POST[v6][$i],"5A")==0||strcmp($_POST[v6][$i],"5B")==0||strcmp($_POST[v6][$i],"5C")==0||strcmp($_POST[v6][$i],"5D")==0)
			{
				$sql="update answer set ".$_POST[v6][$i]."='1' where id=$id";
				mysql_query($sql,$conn);
			}
			else
			{
				$sql="update answer set 6E='".$_POST[v6][$i]."' where id=$id";
				mysql_query($sql,$conn);
			}
		}

		for($i=0;$i<count($_POST[v10]);$i++)
		{
			$sql="update answer set ".$_POST[v10][$i]."='1' where id=$id";
			mysql_query($sql,$conn);
		}
	}
	//mysql_query("UNLOCK TABLES");	//解锁
	mysql_close();
	echo json_encode(TRUE);

?>