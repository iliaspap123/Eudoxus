<?php


   $conn = new mysqli("localhost", "root", "", "my_database");
   if ($conn->connect_error) die($conn->connect_error);

   $username=$_POST['username'];
   $password = $_POST['password'];
   $idruma=$_POST['idruma'];
   $sxolh = $_POST['sxolh'];
   $email = $_POST['email'];
   $thlefwno = $_POST['thlefwno'];

   $type = "f";


   // if ( !isset($_POST['username']) or !isset($_POST['password']) or !isset($_POST['sxolh']) or
    // !isset($_POST['idruma']) or !isset($_POST['email']) or !isset($_POST['thlefwno']) ){
   //   header('Location: signup.php?');

   if(!strlen($username) or !strlen($password) or !strlen($idruma) or !strlen($sxolh) or !strlen($email) or !strlen($thlefwno)) {
     header('Location: signup.php?signup=false');
   }

   $stmt = $conn->prepare("INSERT INTO users (username,password,type) VALUES(?,?,?)");

   $stmt->bind_param("sss",$username,$password,$type);



   $stmt->execute();


   $stmt = $conn->prepare("INSERT INTO foithtes (username,password,idruma,sxolh,email,thlefwno) VALUES(?,?,?,?,?,?)");
   $stmt->bind_param("ssssss",$username,$password,$idruma,$sxolh,$email,$thlefwno);
   $stmt->execute();


   $stmt->close();
   $conn->close();

   // header('Location: index.php?login='.$username);

//   $username=$_POST['username'];
//   $password = $_POST['password'];
//   $idruma = $_POST['idruma'];
//   $sxolh = $_POST['sxolh'];
//   $email = $_POST['email'];
//   $thlefwno = $_POST['thlefwno'];
//   $conn = new mysqli("localhost", "root", "", "my_database");
//   if ($conn->connect_error) die($conn->connect_error);
//
//   $query = "INSERT INTO foithtes (username, password,idruma,sxolh,email,thlefwno) VALUES
//             ('$username','$password','$idruma','$sxolh','$email','$thlefwno')";
// // $query = "INSERT INTO foithtes ('$username','$password','$idruma','$sxolh','$email','$thlefwno');
// // VALUES (?,?,?,?,?,?)";
// // if($stmt = $mysqli->prepare($query)) {
// //     $stmt->bind_param($username,$password,$idruma,$sxolh,$email,$thlefwno);
// //     $stmt->execute();
// // }
//   $result = $conn->query($query);
//   if (!$result) die($conn->error);
//   // $rows = $result->num_rows;
//   mysqli_close($conn);

?>

<!-- $query = "INSERT INTO foithtes VALUES" .
          "('$username','$password','$idruma','$sxolh','$email','$thlefwno')"; -->
