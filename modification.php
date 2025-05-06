 
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="cas/login.css">
  <title> update </title>
 </head>
 <body >
<?php
require_once "db.php";
if (isset($_GET['id'])) {
   $id = $_GET['id'];
 $query="SELECT * FROM newUser WHERE id = $id";
 $result= mysqli_query($conn,$query);
 $row=mysqli_fetch_assoc($result);
 $Username=$row['Username'];
 $password=$row['password'];
 $email=$row['email'];
}


?>


   <div class="container ">
    <form method="post" action="modif.php?id=<?php echo $id?>" class="formlogin">
      <h1 class="text-center "> LOGIN </h1>
      <p>
        <input class="form-control" type="text" id="Username" value="<?php echo $Username; ?>" name="Username" placeholder="Username" size="10" maxlength="15" />
      </p>
      <p>
        <input class="form-control" type="email" id="email" value="<?php echo $email; ?>" name="email" placeholder="email" size="10" maxlength="15" />
      </p>
      <p>
        <input class="form-control" type="password" value="<?php echo $password; ?>" id="password" name="password" placeholder="password" size="10" maxlength="15" />
      </p>
       
      <p class="d-grid" >
        <input class=" btn btn-primary"  type="submit" name="update" value=" modifier "> 
      </p>
   </form>
   </div>
   
  <script src="js/bootstrap.bundle.min.js"></script>
 </body>
 </html>

 
