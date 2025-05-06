<?php
 require_once "db.php";
 if(isset($_POST['update'])){
  if (isset($_GET['id'])) {
    $id=$_GET['id'];
  }
  $Username = $_POST['Username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  $query = "UPDATE newUser SET Username = '$Username', email = '$email', password = '$password' WHERE id = $id";
  $result= mysqli_query($conn,$query);  
  header("location:afficher.php?sms='User modifier successfully");
 } 
 ?>