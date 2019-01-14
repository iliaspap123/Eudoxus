<?php
   $conn = new mysqli("localhost", "root", "", "sdi1500057");
   if ($conn->connect_error) die($conn->connect_error);
   mysqli_set_charset($conn, "utf8");
   $username=$_POST['username'];
   $password = $_POST['password'];
   $idruma=$_POST['idruma'];
   $sxolh = $_POST['sxolh'];
   $email = $_POST['email'];
   $thlefwno = $_POST['thlefwno'];
   $proedros_tmhmatos = $_POST['proedros_tmhmatos'];
   $type = "g";

   if(!strlen($username) or !strlen($password) or !strlen($idruma) or !strlen($sxolh) or !strlen($email) or !strlen($thlefwno) or !strlen($proedros_tmhmatos)) {
     mysqli_close($conn);
     header('Location: signupgram.php');
   }
   $stmt = $conn->prepare("INSERT INTO users (username,password,type) VALUES(?,?,?)");
   $stmt->bind_param("sss",$username,$password,$type);
   $stmt->execute();
   $stmt = $conn->prepare("INSERT INTO gramatteies (username,password,idruma,sxolh,email,thlefwno,proedros_tmhmatos) VALUES(?,?,?,?,?,?,?)");
   $stmt->bind_param("sssssss",$username,$password,$idruma,$sxolh,$email,$thlefwno,$proedros_tmhmatos);
   $stmt->execute();
   $stmt->close();
   $conn->close();
   header('Location: index.php?login='.$username);
?>
