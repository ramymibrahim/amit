<?php
$server='localhost';
$username='root';
$password='';
$db_name='blog';
$con=mysqli_connect($server,$username,$password,$db_name);
$user=$_POST['username'];
$pass=$_POST['password'];

$q="select * from users where email='$user' and password='$pass'";
var_dump($q);
$query=mysqli_query($con,$q);
$row=mysqli_fetch_row($query);
var_dump($row);
mysqli_close($con);
?>