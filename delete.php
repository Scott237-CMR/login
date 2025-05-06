 <?php
  require_once "db.php";
  if(isset($_GET["id"])){
    $id=$_GET["id"];
    $query=" DELETE FROM newUser WHERE id=$id";
    $delete=mysqli_query ($conn,$query);
    header("location:afficher.php?sms='User deleted successfully");
  } 
 ?>