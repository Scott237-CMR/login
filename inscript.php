
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="inscript.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="register">
      <form method="post" action="inscrip.php" class="formlogin">
        <?php include('errors.php'); ?>
     <h1 class="text-center "> REGISTER </h1>
     <div class="box">
        <input class="form-control" type="name" id="name" name="name" placeholder="name" size="10" />
      <i class='bx bxs-user'></i>
      
     </div>
     <div class="box">
       <input  type="email" id="email" name="email" placeholder="email" size="10"  />
       <i class='bx bxs-envelope' ></i>
     </div>
     <div class="box">
       <input  type="password" id="password" name="password" placeholder="password" size="10" maxlength="15"  />
       <i class='bx bxs-lock' ></i>
     </div>
     <div class="box">
       <input  type="password" id="confpassword" name="confpassword" placeholder="confirm password" size="10" maxlength="15" />
       <i class='bx bxs-lock' ></i>
     </div>
      <div class="box">
        <input class="form-control" type="number" id="number" name="number" placeholder="number" size="13" />
      <i class='bx bxs-phone' ></i>
     </div>

     <div class="btn">
      <button class="btn1" type="submit" name="register">register</button>
     </div>
     </p>
     </form>

    </div>
    <div class="toggle-box">
      <div class="toggle-pannel toggle-right">
        <h1>Hello, Welcome!</h1>
        <p>Already  have  an account ?</p>
        <a href="login.php"><button class="btn loginbtn">login here</button></a>
      </div>
    </div>

    </div>
    
  </div>
  
</body>
</html>
