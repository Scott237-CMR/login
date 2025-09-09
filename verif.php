<?php
require_once 'bd.php';


$errors = [] ;


 if (isset($_POST['login'])) {
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
    
       if ( empty($email) || empty($password) ) {
         array_push( $errors, " viellir ramplir tout les champ");
         require_once 'login.php';
      }
    
      if (count($errors) == 0) {
   // $password = md5($password);
     

    $query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
    $results = mysqli_query($conn, $query);

    if (mysqli_num_rows($results) == 1) {
        $user = mysqli_fetch_assoc($results);
// password_verify verifie le mot de pass crypte dans le database avec se que tu as entre pour login 
        if (password_verify( $password ,$user['password']) ) {
            $_SESSION['email']   = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: b.php');
            exit();
        } else {
            array_push($errors, "Le mot de passe est erroné");
            require_once 'login.php';
        }
    } else {
        array_push($errors, "Mauvais email/mot de passe");
        require_once 'login.php';
    }
 }
/*
// autre plus securiser est tres bien 
  if (count($errors) == 0) {
    // Vérifier si l'email existe
    $query = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $results = $stmt->get_result();

    if ($results->num_rows == 1) {
        $user = $results->fetch_assoc();

        // Vérification du mot de passe (si tu avais stocké avec password_hash)
        if (password_verify($password, $user['password'])) {
            $_SESSION['email']   = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: b.php');
            exit();
        } else {
            array_push($errors, "Le mot de passe est erroné");
            require_once 'login.php';
        }
    } else {
        array_push($errors, "Email introuvable ou mauvais couple email/mot de passe");
        require_once 'login.php';
    }
} */
  }

?>