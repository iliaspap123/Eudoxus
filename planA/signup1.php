<?php
    $username=$_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    if(isset($_POST['password'])) { ; }
    $mysqli = new mysqli("localhost", "root", "", "my_database");
    $result = $mysqli->query("SELECT * FROM users
        WHERE password='$password'")
        or die('There was a problem connecting to the database.');

    if($username==0){
        if(mysqli_fetch_array($result)!=0){
            header('Location:
            login.html?login=false');
        }
        else{
            $sql = "INSERT INTO users (username, password,type)
            VALUES (?,?,?)";
            if($stmt = $mysqli->prepare($sql)) {
                // $stmt->bind_param('sss',$_POST['username'], $_POST['password'],$_POST['type']);
                $stmt->execute();
            }
            else{
                $error = $mysqli->errno . ' ' . $mysqli->error;
                echo $error; // 1054 Unknown column 'foo' in 'field list'
            }
            $sql = "INSERT INTO foithtes (onoma, epitheto, university, section, password, password, phone, address)
            VALUES (?,?,?,?,?,?,?,?)";
            if($stmt = $mysqli->prepare($sql)) {
                $stmt->bind_param('ssssssss', $_POST['onoma'], $_POST['epitheto'], $_POST['university'],
                        $_POST['section'], $_POST['password'], $_POST['password'], $_POST['phone'], $_POST['address']);
                        $stmt->execute();
                        mysqli_close($mysqli);
                        header('Location: ../index.php');
            }
            else{
                $error = $mysqli->errno . ' ' . $mysqli->error;
                echo $error; // 1054 Unknown column 'foo' in 'field list'
            }
        }

    }
    else{
        if(mysqli_fetch_array($result)!=0){
            header('Location: glogin.html?login=false');
        }
        // else{
        //     $sql = "INSERT INTO users (type, password, password)
        //     VALUES (?,?,?)";
        //     if($stmt = $mysqli->prepare($sql)) {
        //         $stmt->bind_param('sss', $_POST['username'], $_POST['password'], $_POST['password']);
        //         $stmt->execute();
        //     }
        //     else{
        //         $error = $mysqli->errno . ' ' . $mysqli->error;
        //         echo $error; // 1054 Unknown column 'foo' in 'field list'
        //     }
        //     $sql = "INSERT INTO grammateia (university, section, password, password, phone, address, onoma, epitheto, password2, phone2)
        //     VALUES (?,?,?,?,?,?,?,?,?,?)";
        //     if($stmt = $mysqli->prepare($sql)) {
        //         $stmt->bind_param('ssssssssss', $_POST['university'],$_POST['section'], $_POST['password'], $_POST['password'], $_POST['phone'],
        //                 $_POST['address'], $_POST['onoma'], $_POST['epitheto'], $_POST['password2'], $_POST['phone2']);
        //         $stmt->execute();
        //         mysqli_close($mysqli);
        //         header('Location: ../index.php');
        //     }
        //     else{
        //         $error = $mysqli->errno . ' ' . $mysqli->error;
        //         echo $error; // 1054 Unknown column 'foo' in 'field list'
        //     }
        // }
    }

    mysqli_close($mysqli);
?>
