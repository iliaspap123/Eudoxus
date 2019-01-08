<?php
    $username = $_POST['username'];
    if(isset($_POST['username'])) { ; }

    $password = $_POST['password'];
    $mysqli = new mysqli("localhost", "root", "", "my_database");

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = $mysqli->real_escape_string($username);
    $password = $mysqli->real_escape_string($password);
    $result = $mysqli->query("SELECT * FROM users
                WHERE username='$username' and password='$password'")
                or die('There was a problem connecting to the database.');
    $row = $result->fetch_assoc();
    print $row['password'];

    if($row['username'] == $username && $row['password'] == $password){
        $global_email = $username;
        mysqli_close($mysqli);
        header('Location: index_logged.php?email='.$username);
    }
    else{
        mysqli_close($mysqli);
        header('Location: index.php?login=false');
    }
    mysqli_close($mysqli);
 ?>
