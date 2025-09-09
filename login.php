
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="login.css">
  <title>Document</title>
</head>
<body>
  <div class="container  ">
    
    <div class="login">
      <form method="post" action="verif.php" class="formlogin">
        <?php include('errors.php'); ?>
     <h1 class="text-center "> LOGIN </h1>
     <div class="box">
       <input  type="email" id="email" name="email" placeholder="email" size="10" />
       <i class='bx bxs-envelope' ></i>
     </div>
     <div class="box">
       <input  type="password" id="password" name="password" placeholder="password" size="10" maxlength="15"  />
       <i class='bx bxs-lock' ></i>
     </div>
     <div class="forget">
      <a href="#">forgot password</a>
     </div>
     <div class="btn">
      <button class="btn1" type="submit" name="login">Login</button>
     </div>
     </p>
     </form>
    </div>

    
    <div class="toggle-box">
      <div class="toggle-pannel toggle-left">
        
        <h1>Hello, Welcome!</h1>
        <p>Don't have  an account ?</p>
        <a href="inscript.php"><button class="btn registerbtn">Register here</button></a> 
        
      </div>
  </div>
  
</body>
</html>
