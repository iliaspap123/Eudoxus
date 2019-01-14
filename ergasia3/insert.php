<?php
   $conn = new mysqli("localhost", "root", "", "database");
   if ($conn->connect_error) die($conn->connect_error);
   mysqli_set_charset($conn, "utf8");
   $username=$_POST['username'];
   $password = $_POST['password'];
   $idruma=$_POST['idruma'];
   $sxolh = $_POST['sxolh'];
   $email = $_POST['email'];
   $thlefwno = $_POST['thlefwno'];
   $type = "f";

   if(!strlen($username) or !strlen($password) or !strlen($idruma) or !strlen($sxolh) or !strlen($email) or !strlen($thlefwno)) {
     mysqli_close($conn);
     header('Location: signup.php');
   }
   $stmt = $conn->prepare("INSERT INTO users (username,password,type) VALUES(?,?,?)");
   $stmt->bind_param("sss",$username,$password,$type);
   $stmt->execute();
   $stmt = $conn->prepare("INSERT INTO foithtes (username,password,idruma,sxolh,email,thlefwno) VALUES(?,?,?,?,?,?)");
   $stmt->bind_param("ssssss",$username,$password,$idruma,$sxolh,$email,$thlefwno);
   $stmt->execute();
   $stmt->close();
   $conn->close();
   header('Location: index.php?login='.$username);
?>
