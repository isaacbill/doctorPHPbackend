<?php
	$host='127.0.0.1';
	$uname='root';
	$pwd='password';
	$db="doctorappointment";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	 
	$id=$_REQUEST['area'];
	$name=$_REQUEST['doctor'];

	$flag['code']=0;

	if($r=mysql_query("insert into sample values('$area','$doctor') ",$con))
	{
		$flag['code']=1;
		echo"hi";
	}

	print(json_encode($flag));
	mysql_close($con);
?>
