<?php
$servername="localhost";
$username="root";
$password="";
$dbname="basic-banking-system-main";


$conn= mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("connection failed: ".mysqli_connect_error().'<hr>');
}

?>