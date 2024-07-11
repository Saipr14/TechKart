<?php

session_start();


$a=$_POST["fname"];
$b=$_POST["email"];
$c=$_POST["pass"];



$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"intern");


$q="SELECT * FROM class WHERE fname='$a' && email='$b' && pass='$c' ";
$result=mysqli_query($con,$q);
$number=mysqli_num_rows($result);
if($number==1)
{
    $_SESSION["fname"]=$a;
    $_SESSION["email"]=$b;
    $_SESSION["pass"]=$c;
    header('Location: profile.php ');
    echo "loggedin success";
   
}else{
    header('Location: profile.html ');
    echo "Not yet Signed Up!!";

}

include("signin.html");
mysqli_close($con);
?>