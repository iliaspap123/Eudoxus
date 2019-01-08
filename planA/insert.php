<?php
  $username=$_POST['username'];
  $password = $_POST['password'];
  $idruma = $_POST['idruma'];
  $sxolh = $_POST['sxolh'];
  $email = $_POST['email'];
  $thlefwno = $_POST['thlefwno'];
  $conn = new mysqli("localhost", "root", "", "my_database");
  if ($conn->connect_error) die($conn->connect_error);

  $query = "INSERT INTO foithtes VALUES" .
            "('$username','$password','$idruma','$sxolh','$email','$thlefwno')";
  $result = $conn->query($query);
  if (!$result) die($conn->error);
  // $rows = $result->num_rows;
  mysqli_close($conn);

?>
