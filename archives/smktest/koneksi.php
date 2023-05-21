<?php
$host="localhost";
$user_name="root";
$pass="";
$database_name="data_test";
$db_link=mysqli_connect($host,$user_name,$pass,$database_name);
if(!$db_link)
{
	echo "cannot connect to server";
}
?>