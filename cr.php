<?php 
include("connect.php");
$u=$_REQUEST["usn"];
$ps=$_REQUEST["pwd"];
$ps=md5($ps);
$e_m=$_REQUEST["mail"];
$p=$_REQUEST["ph"];
$database=new DatabaseManager();
$query ="INSERT INTO users (name,password,email,phone) VALUES ('$u','$ps','$e_m','$p')"; 
//echo $query;
$status=$database->fireSafeQuery($query,NUll);
if ($status) {
	header("location: login.php");
};
 ?>     	

