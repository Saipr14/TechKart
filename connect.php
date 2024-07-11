<?php

session_start();


$a=$_POST["fname"];
$b=$_POST["email"];
$c=$_POST["pass"];
$d=$_POST["repass"];


$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"intern");


$q="SELECT * FROM class WHERE fname='$a' ";
$result=mysqli_query($con,$q);
$number=mysqli_num_rows($result);
if($number==1)
{echo "User Already Exits";
}else{

$sql="insert into class(fname,email,pass,repass) values('$a','$b','$c','$d')";
mysqli_query($con,$sql);
echo("Registered !!!");
header('Location: sign in.html');
}

include("Register.html");
mysqli_close($con);
?>