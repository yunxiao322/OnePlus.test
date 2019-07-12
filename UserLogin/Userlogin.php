<?php
	header("Content-type:text/html;charset=utf-8");
	$id=$_GET["iD"];
	$paw=$_GET["pAW"];
	$conn=mysql_connect("localhost","root","root");
	mysql_select_db("yijiauser");
	$result=mysql_query("select*from User where ID='$id'And PAW='$paw'",$conn);
	if(mysql_num_rows($result)==1){
		echo "1";
	}else{
		echo "0";
	}
?>