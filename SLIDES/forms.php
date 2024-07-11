<?php
$name=$_POST['fname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];

if(!empty($fname) || !empty($email) || !empty($pass) || !empty($repass))
{
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="techkart";

//creating connection
$conn=new mysqli( $host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
    die('Connection error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
    $SELECT="SELECT email FROM signup where email=? limit 1";
    $INSERT="INSERT into signup(fname,email,pass,repass)values(?,?,?,?)";

    $stmt=$conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;

    if($rnum==0)
    {
      $stmt->close();
      $stmt=$conn->prepare($INSERT);
      $stmt->bind_param("ssss",$fname,$email,$pass,$repass);
      $stmt->execute();
      echo"Record inserted successfully";
    }
    else{
        echo"Already registered";
    }
    $stmt->close();
    $conn->close();

 }
}else{
    echo"All field are required";
    die();
}
?>









