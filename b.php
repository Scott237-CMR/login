<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 40px; }
    .form-container { max-width: 400px; margin: auto; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    h2 { text-align: center; margin-bottom: 20px; color: #333; }
    input[type=text], input[type=email], input[type=password] {
      width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px;
    }
    button {
      width: 100%; padding: 10px; background: #28a745; border: none; border-radius: 5px;
      color: white; font-size: 16px; cursor: pointer;
    }
    button:hover { background: #218838; }
    .error-messages {
      background: #f8d7da; color: #721c24; padding: 10px;
      border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 15px;
    }
    .error-messages ul { margin: 0; padding-left: 20px; }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Register</h2>

    <!-- Affichage des erreurs -->
    <?php if (!empty($errors)): ?>
      <div class="error-messages">
        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?php echo htmlspecialchars($error); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php require_once 'b.php'; endif; ?>

    <!-- Formulaire -->
    <form method="post" action="A.php">
      <input type="text" name="username" placeholder="Enter your name" >
      <input type="email" name="email" placeholder="Enter your email" >
      <input type="password" name="password" placeholder="Enter your password">
      <input type="password" name="confpassword" placeholder="Confirm your password">
      <input type="text" name="number" placeholder="Enter your phone number" >
      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>