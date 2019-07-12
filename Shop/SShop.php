<?php
header("Content-type:text/html;charset=utf-8");
	$img=$_POST["img"];
	$id=$_POST["id"];
	$money=$_POST["money"];
	$num=$_POST["num"];
	$mysqlname=$_POST["mysqlname"];
	echo $img;
	$conn=mysql_connect("localhost","root","root");
	mysql_select_db("yijiausercar");
	$result=mysql_query("select*from $mysqlname where Img='$img'",$conn);
	$row = mysql_fetch_array($result);
	if(mysql_num_rows($result)>0){
		$aaaa=$row["Num"]+1;
			mysql_query("update $mysqlname set Num =$aaaa where Img = '$img';",$conn);
			echo "1";
			}else{
			echo "0";
			mysql_query("insert into $mysqlname(Img,Id,Money,Num)values('$img','$id','$money','$num')",$conn);
			}
?>