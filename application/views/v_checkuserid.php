<?php

$server = "localhost";
$user = "root"; // sesuaikan dengan username database kalian
$pass = ""; // sesuaikan dengan password database kalian
$dbname = "ukpbj_ukpbjtala"; // sesuaikan dengan nama database kalian
 
$conn = mysqli_connect($server, $user, $pass, $dbname);
 
if(!$conn){
	die ("Connection failed: ".mysqli_connect_error());
}

$user_id = "";
if(isset($_GET['user_id'])){
$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
$sql = "SELECT * FROM tb_user WHERE user_email = '$user_id'";
$process = mysqli_query($conn, $sql);
$num = mysqli_num_rows($process);
}

if($num == 0){
  echo "0"; 
}else{
  echo "1";
}

?>