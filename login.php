<?php

mysql_connect("localhost", "root", "");
mysql_select_db("register");
if(isset($_REQUEST["login"]))
{
	$uname1=$_REQUEST["uname1"];
	$upswd1=$_REQUEST["upswd1"];
	$query=mysql_query("SELECT * from reg where uname1='$uname1' && upswd1='$upswd1' ");
	$rowcount=mysql_num_rows($query);
	if($rowcount==true)
	{
		echo "Login Successfull";

	}
	else
	{
		echo "Login Failed";
	}
}

?>