<?php
//require_once 'bd.php';

 $errors = [];
 if (isset($_POST['register'])) {

//  extract($_POST); // ici ca recuper un truc post name ca convertir ca en $name, mm chose pour email ...
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$confpassword=$_POST['confpassword'];
$number=$_POST['number'];
var_dump($_POST);
if ($password!==$confpassword) {
     $errors[' mot '] = ' mot de pass incorrect';
     require_once 'inscript.php';
   } 
if (empty($name) || empty($email) || empty($password)|| empty($confpassword) || empty($number)) {
   $errors['global'] = 'Ramplir ';
   require_once 'inscript.php';
  
}else{
   // header("location:login.php?message='new user created successfully'");

}







//  $query = " INSERT INTO user ( name , email, password, number ) VALUES ('$name', '$email','$password','$number')";
//  $result=mysqli_query($conn,$query);

//  if(!$result){
//    echo " vous dnner on etait envoyer ";
//  }
//  else{
//    echo" echec de l'envoie des donnes ";
//   header("location:login.php?message='new user created successfully'");
//  }
 }
?>