<?php
	header("Content-type:text/html;charset=utf-8");
	$id=$_GET["iD"];
	$paw=$_GET["pAW"];
	$conn=mysql_connect("localhost","root","root");
	mysql_select_db("yijiauser");
	$result=mysql_query("select*from User where ID='$id'",$conn);
	if(mysql_num_rows($result)==1){
		echo "1";
	}else{
		mysql_query("insert into User(ID,PAW)values('$id','$paw')",$conn);
		echo "0";
	}
	$name="a".$id;
	mysql_select_db("yijiausercar",$conn);
	$sql="CREATE TABLE $name
	(
	Img varchar(100),
	Id varchar(16),
	Money varchar(20),
	Num int
	)";
	mysql_query($sql,$conn);
?>