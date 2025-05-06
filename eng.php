<?php
require_once 'db.php';

if (isset($_POST['ok'])) {
  $Username=$_POST['Username'];
  if(empty($Username)){
     echo " veuiller ramplir Username ";
  }else {
     echo " votre Username est " .$Username;
  }
  $email=$_POST['email'];
  if(empty($email)){
    echo " veuiller ramplir ";
 }else {
     echo " votre addresse mail est " .$email;
 }
 $password=$_POST['password'];
  if(empty($password)){
    echo " veuiller ramplir password ";
 }else {
    echo " votre password est " .$password;
 }
 
 $query = " INSERT INTO newUser ( Username , email, password ) VALUES ('$Username', '$email','$password')";
 $result=mysqli_query($conn,$query);

 if(!$result){
   echo " vous dnner on etait envoyer ";
 }
 else{
   echo" echec de l'envoie des donnes ";
   header("location:afficher.php?message='new user created successfully'");
 }



}




/*
if ($conn -> query($query) === TRUE) {
    echo" vous dnner on etait envoyer ";
 } else {
    echo" echec de l'envoie des donnes ";
 }
*/
?>
