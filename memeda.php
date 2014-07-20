<?php
	//获得数据

	
	$conn=mysql_connect("localhost","root","");

		echo "连接数据库成功！";
		mysql_select_db("report",$conn);
		mysql_query("set names 'utf8'");
		//用于判断当前邮箱是否注册过
		$sql = "select * from answer where EMAIL = '179656046@qq.com'";
		$result=mysql_query($sql,$conn);
		if(mysql_num_rows($result))
			echo "存在";  
		//用于插入数据
		//$sql="update answer set 3E='重启娃娃12345' where EMAIL='179656046@qq.com'";
		

		
?>