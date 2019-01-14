<?php
   $conn = new mysqli("localhost", "root", "", "database");
   if ($conn->connect_error) die($conn->connect_error);
   mysqli_set_charset($conn, "utf8");
   $title=$_POST['title'];
   $isbn = $_POST['isbn'];
   $author=$_POST['author'];
   $publisher = $_POST['publisher'];
   $bookstore = $_POST['bookstore'];
   $year = $_POST['year'];
   $info = $_POST['info'];
   $img = $_POST['img'];
   $class = $_POST['class'];
   if(!strlen($title) or !strlen($isbn) or !strlen($author) or !strlen($publisher) or !strlen($bookstore) or !strlen($year) or !strlen($info) or !strlen($class)) {
     mysqli_close($conn);
     header('Location: insertbook.php?login='.$_GET['login']);
   }
   $stmt = $conn->prepare("INSERT INTO book (title,isbn,author,publisher,bookstore,year,info,img,class) VALUES(?,?,?,?,?,?,?,?,?)");
   $stmt->bind_param("sssssssss",$title,$isbn,$author,$publisher,$bookstore,$year,$info,$img,$class);
   $stmt->execute();
   $stmt->close();
   $conn->close();
   header('Location: index.php?login='.$_GET['login']);
?>
