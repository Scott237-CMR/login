 <?php

 $host = "localhost";
 $username ="root";
 $pwd ="";
 $db ="connexion formulaire";

  $conn = new mysqli($host,$username,$pwd,$db);

  if($conn) {
    echo"";
  }else{
    echo"failed";
  }
  


 ?>