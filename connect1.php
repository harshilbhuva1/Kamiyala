<?php

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];


  //database conection
  $conn = new mysqli('localhost','root','','user');
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into registration(username, mobile, pass, cpass)
    values(?,?,?,?)");
    $stmt->bind_param("ssss",$username,$mobile ,$pass,$cpass);
    $stmt->execute();
    echo "registration successfully..";
    $stmt->close();
    $conn->close();

  }
  

 
?>