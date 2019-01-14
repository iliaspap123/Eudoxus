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
   $proedros_tmhmatos = $_POST['proedros_tmhmatos'];
   $type = "g";
   // if ( !isset($_POST['username']) or !isset($_POST['password']) or !isset($_POST['sxolh']) or
    // !isset($_POST['idruma']) or !isset($_POST['email']) or !isset($_POST['thlefwno']) ){
   //   header('Location: signup.php?');
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

<!-- $query = "INSERT INTO foithtes VALUES" .
          "('$username','$password','$idruma','$sxolh','$email','$thlefwno')"; -->
