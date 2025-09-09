 <?php
    session_start();
    require_once 'bd.php';
    // initializing variables
    $name = "";
    $email    = "";
     $errors = [] ;
     //$hashpass =[];
    
    // connect to the database
   // $db = mysqli_connect('localhost', 'root', '', 'registration');
    
    // REGISTER USER
    if (isset($_POST['register'])) {
      // receive all input values from the form
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string( $conn,$_POST['password']);
      $confpassword = mysqli_real_escape_string( $conn,$_POST['confpassword']);
      $number = mysqli_real_escape_string( $conn,$_POST['number']);
    
      // form validation: ensure that the form is correctly filled ...
      // by adding (array_push()) corresponding error unto $errors array
      if ( empty($name) || empty($email) || empty($password) || empty($number) ) {
         array_push( $errors, " viellir ramplir tout les champ");
         require_once 'inscript.php';
      }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Le format de l'email est invalide";
    require_once 'inscript.php';
} elseif (strlen($email) > 150) {
    $errors[] = "L'email ne doit pas dépasser 150 caractères";
    require_once 'inscript.php';
}
    elseif (!preg_match('/^[0-9]{8,15}$/', $number)) {
    $errors[] = "Invalid number ";
    require_once 'inscript.php';
}
    


      // if (empty($name)) { array_push($errors, "name is required");
      // require_once 'inscript.php'; } example

      if ($password != $confpassword) {
    	array_push($errors, "The two passwords do not match");
      require_once 'inscript.php';
      }
      // if (empty($number)) { array_push($errors, "number is required"); 
      //   require_once 'inscript.php';}
    
      // first check the database to make sure 
      // a user does not already exist with the same username and/or email
      $user_check_query = "SELECT * FROM user WHERE  email='$email' LIMIT 1";
      $result = mysqli_query($conn, $user_check_query);
      $user = mysqli_fetch_assoc($result);
      
      if ($user) { // if user exists
        if ($user['email'] === $email) {
          array_push($errors, "email already exists");
        }
        require_once 'inscript.php';
      }
      // pour crypt le password
      function ok ($word) {
         $pass=password_hash($word, PASSWORD_DEFAULT, ['cost' => 12 ]);
          return $pass  ;  
       }
       $hashpass= ok($password);
        
    
      // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {
      	//$password = md5($password);//encrypt the password before saving in the database
    
      	$query = "INSERT INTO user (name, email, password,number) 
      			  VALUES('$name', '$email', '$hashpass','$number')";
      	 mysqli_query($conn, $query);
      	$_SESSION['name'] = $name;
      	$_SESSION['success'] = "You are now logged in";
      	header('location: login.php');
      }
    }
     

 ?>
 