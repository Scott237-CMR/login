<?php
// Connexion à MySQL
$conn = new mysqli("localhost", "root", "", "inscription_db");

// Vérifier connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Initialiser tableau d'erreurs
$errors = [];

// Vérifier si formulaire soumis
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['register'])) {

    // Récupération sécurisée des champs
    $username     = trim($_POST['username'] ?? '');
    $email        = trim($_POST['email'] ?? '');
    $password     = $_POST['password'] ?? '';
    $confpassword = $_POST['confpassword'] ?? '';
    $number       = trim($_POST['number'] ?? '');

    // Vérifications
    if (empty($username)) {
        $errors[] = "Le nom est requis";
    }
    if (empty($email)) {
        $errors[] = "L'email est requis";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format d'email invalide";
    }
    if (empty($password)) {
        $errors[] = "Le mot de passe est requis";
    }
    if ($password !== $confpassword) {
        $errors[] = "Les deux mots de passe ne correspondent pas";
    }
    if (empty($number)) {
        $errors[] = "Le numéro est requis";
    }

    // Vérifier unicité de l'email
    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT id FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $errors[] = "Cet email est déjà utilisé";
        }
        $stmt->close();
    }

    // Si pas d'erreurs -> insertion
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $conn->prepare("INSERT INTO user (username, email, password, number) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $email, $hashed_password, $number);

        if ($stmt->execute()) {
            echo "✅ Inscription réussie !";
        } else {
            echo "❌ Erreur : " . $stmt->error;
        }
        $stmt->close();
    } else {
        // Afficher les erreurs
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
$conn->close();
?>
