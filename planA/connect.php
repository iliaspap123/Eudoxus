<?php
  $username=$_POST['username'];
  $password = $_POST['password'];
  $conn = new mysqli("localhost", "root", "", "my_database");
  if ($conn->connect_error) die($conn->connect_error);

  $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
  $result = $conn->query($query);
  if (!$result) die($conn->error);
  // $rows = $result->num_rows;
  $row = $result->fetch_assoc();

  // print $row;

  // for($i = 0 ; $i < $rows ; ++$i)
  // {
  //   $result->data_seek($i);
  //   $row = $result->fetch_array(MYSQLI_ASSOC);
  //
  //   //echo $row['password'];
  //   echo "$username ";
  //   $e = strcmp($row['username'],$username);
  //   echo "ok $e";
  //   if(strcmp($row['username'],$username)==0) {
  //     echo "okdwdwq";
  //   }
  //
  // }
  //
  if($row['username'] == $username && $row['password'] == $password){
      // $global_email = $username;
      mysqli_close($conn);
      header('Location: index.php?login='.$username);
  }
  else{
      mysqli_close($conn);
      header('Location: login.php?login=false');
  }
  mysqli_close($conn);


?>
