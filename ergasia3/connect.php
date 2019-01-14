<?php
  $username=$_POST['username'];
  $password = $_POST['password'];
  $conn = new mysqli("localhost", "root", "", "database");
  if ($conn->connect_error) die($conn->connect_error);

  if( !strlen($username) or !strlen($password)) {
    mysqli_close($conn);
    header('Location: login.php');
  }
  $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
  $result = $conn->query($query);
  if (!$result) die($conn->error);

  $row = $result->fetch_assoc();
  if($row['username'] == $username && $row['password'] == $password){
      mysqli_close($conn);
      header('Location: index.php?login='.$username);
  }
  else{
      mysqli_close($conn);
      header('Location: login.php');
  }
  mysqli_close($conn);


?>
