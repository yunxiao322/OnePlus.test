<?php
	header("Content-type:text/html;charset=utf-8");
	$mysqlname=$_POST["mysqlname"];
	$conn=mysql_connect("localhost","root","root");
	$str='';
	mysql_select_db("yijiausercar");
	$result=mysql_query("select*from $mysqlname",$conn);
	if(mysql_num_rows($result)>0){
			//mysql_fetch_assoc将每一行的数据以及集合（josn对象）的方式返回
			//该方法自带游标向后移位的功能
			while($row = mysql_fetch_array($result)){
			// $data =array();
			// $data = array($row["Img"],$row["Id"],$row["Money"],$row["Num"]);
			// $data[0]$row["Img"];
			// $data[1]$row["Id"];
			// $data[2]$row["Money"];
			// $data[3]$row["Num"];
			// $json = '';
			// $json{
			// 	"img"$row["Img"],
			// 	"id":$row["Id"],
			// 	"money":$row["Money"],
			// 	"num":$row["Num"],
			// }
			$str.='{"img":"'.$row["Img"].'","id":"'.$row["Id"].'","money":"'.$row["Money"].'","num":"'.$row["Num"].'"}@';
			}
			echo $str;
			}else{
			echo "查询失败";
			}
		
	// if($result){
	// //echo "查询成功";
	// while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
	// $user = new User();
	// $user->img = $row["Img"];
	// $user->id = $row["Id"];
	// $user->money = $row["Money"];
	// $user->num = $row["Num"];
	// $data[]=$user;
	// }
	// $json = json_encode($data);//把数据转换为JSON数据.
	// echo "{".'"user"'.":".$json."}";
	// }else{
	// echo "查询失败";
	// }
	// 
?>