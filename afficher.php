<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
  <h1>afficher les info</h1>

  <?php if(isset($_GET["message"])){
    echo "<h1>".$_GET["message"]."</h1>";
  }
  ?>
  <table class="table">
  <thead class="table-dark">
  <tr>
        <th scpe="col">id</th>
        <th scope="col">username</th>
        <th scope="col">email</th>
        <th scope="col">password</th>
        <th scope="col">delete</th>
        <th scope="col">modifier</th>
      </tr>
  </thead>
    <tbody>
<?php
include_once "db.php";

$query="SELECT * FROM newUser";
$result=mysqli_query($conn,$query);
if($result){
  while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $username=$row['Username'];
      $email=$row['email'];
      $pwd=$row['password'];
      ?>
      <tr>
     <td><?php echo $id; ?></td>
     <td><?php echo $username; ?></td>
     <td><?php echo $email; ?></td>
     <td><?php echo $pwd; ?></td>
     <td><a href="delete.php?id=<?php echo $id=$row['id']?>" class="btn btn-danger">Delete</a></td>
     <td><a href="modification.php?id=<?php echo $id=$row['id']?>" class="btn btn-primary">Modifier</a></td>
     </tr>
     <?php
  }
}
?>
 <?php if(isset($_GET["sms"])){
    echo "<h1>".$_GET["sms"]."</h1>";
  }
  ?>
     <!--
      echo "<tr>
        <td>".$row["id"] ."</td>
        <td>" .$row["Username"]."</td>
        <td>".$row["email"]."</td>
         <td>".$row["password"]. "</td>
         <td><a href="delete.php">delete</a> </td>
      </tr>"
     -->
   </tbody>
  </table>
  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>