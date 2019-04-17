<?php
require("constants.php");
try{
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die(mysqli_connect_error());
//mysqli_select_db($con, DB_NAME) or die("Нет такой базы данных");
echo "Connection to db is fine";	
}catch(Exception $e){
	echo "Не могу подключиться к базе данных: ".$e->getMessage();
	exit();
}
mysqli_set_charset($con, "utf8");

?>