<?php
   $conn = new mysqli("localhost", "root", "", "database");
   if ($conn->connect_error) die($conn->connect_error);
   mysqli_set_charset($conn, "utf8");
   $oldusername=$_GET['login'];
   $query = "SELECT * FROM users WHERE username='$oldusername'";
   $result = $conn->query($query);
   if (!$result) die($conn->error);
   $row = $result->fetch_assoc();

   $username = $_POST['username'];
   $password = $_POST['password'];
   $idruma=$_POST['idruma'];
   $sxolh = $_POST['sxolh'];
   $email = $_POST['email'];
   $thlefwno = $_POST['thlefwno'];
   if($row['type'] == 'f'){
     if ( strlen($password) ){
       $query = "UPDATE foithtes SET password='$password' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
       $query = "UPDATE users SET password='$password' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
     }
     if ( strlen($idruma) ){
       $query = "UPDATE foithtes SET idruma='$idruma' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
     }
     if ( strlen($sxolh) ){
       $query = "UPDATE foithtes SET sxolh='$sxolh' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
     }
     if ( strlen($email) ){
       $query = "UPDATE foithtes SET email='$email' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
     }
     if ( strlen($thlefwno) ){
       $query = "UPDATE foithtes SET thlefwno='$thlefwno' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
     }
     if ( strlen($username) ){
       $query = "UPDATE foithtes SET username='$username' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
       $query = "UPDATE users SET username='$username' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
       $conn->close();
       mysqli_close($conn);
       header('Location: profil.php?login='.$_POST['username']);
     }
     else{
       $conn->close();
       mysqli_close($conn);
       header('Location: profil.php?login='.$oldusername);
     }
   }
   else{
     if ( strlen($password) ){
       $query = "UPDATE gramatteies SET password='$password' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
       $query = "UPDATE users SET password='$password' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
     }
     if ( strlen($idruma) ){
       $query = "UPDATE gramatteies SET idruma='$idruma' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
     }
     if ( strlen($sxolh) ){
       $query = "UPDATE gramatteies SET sxolh='$sxolh' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
     }
     if ( strlen($email) ){
       $query = "UPDATE gramatteies SET email='$email' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
     }
     if ( strlen($thlefwno) ){
       $query = "UPDATE gramatteies SET thlefwno='$thlefwno' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
     }

     if ( strlen($thlefwno) ){
       $query = "UPDATE gramatteies SET thlefwno='$thlefwno' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
     }
     $proedros_tmhmatos = $_POST['proedros_tmhmatos'];
     if ( strlen($proedros_tmhmatos) ){
       $query = "UPDATE gramatteies SET proedros_tmhmatos='$proedros_tmhmatos' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
     }
     if ( strlen($username) ){
       $query = "UPDATE gramatteies SET username='$username' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
       $query = "UPDATE users SET username='$username' WHERE username='$oldusername'";
       $result = $conn->query($query);
       if (!$result) die($conn->error);
       $conn->close();
       mysqli_close($conn);
       header('Location: profil.php?login='.$username);
     }
     else{
       $conn->close();
       mysqli_close($conn);
       header('Location: profil.php?login='.$oldusername);
     }
   }
   // if ( !isset($_POST['username']) or !isset($_POST['password']) or !isset($_POST['sxolh']) or
    // !isset($_POST['idruma']) or !isset($_POST['email']) or !isset($_POST['thlefwno']) ){
   //   header('Location: signup.php?');
?>
