 <?php
$host = "localhost";
 $username ="root";
 $pwd ="";
 $db ="travelling";

  $conn = new mysqli($host,$username,$pwd,$db);

  if($conn) {
    echo" ok ";
  }else{
    echo"failed";
  }


?>