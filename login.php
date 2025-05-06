
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="cas/login.css">
  <title> login </title>
 </head>
 <body >
   <div class="container  ">
    <form method="post" action="eng.php" class="formlogin">
      <h1 class="text-center "> LOGIN </h1>
      <p>
        <input class="form-control" type="text" id="Username" name="Username" placeholder="Username" size="10" maxlength="15" />
      </p>
      <p>
        <input class="form-control" type="email" id="email" name="email" placeholder="email" size="10" maxlength="15" />
      </p>
      <p>
        <input class="form-control" type="password" id="password" name="password" placeholder="password" size="10" maxlength="15" />
      </p>
       <p>
        <input class="me-2" type="checkbox" name="remember me">
        <label> remember me </label>
      </p>
      <p class="d-grid" >
        <input class=" btn btn-primary"  type="submit" name="ok" value="sign in "> 
      </p>
   </form>
   </div>
   
  <script src="js/bootstrap.bundle.min.js"></script>
 </body>
 </html>

 