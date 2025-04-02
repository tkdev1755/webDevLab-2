<?php
session_start();
require_once __DIR__ . '/../model/User.php'; // Inclusion du modèle User
use model\User;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Inclure la classe User et les fichiers nécessaires

    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Essayer de se connecter
    $user = User::login($email, $password);

    if ($user) {
        error_log("User found, and connected successfully");
        // Rediriger vers la page d'accueil après une connexion réussie
        header('Location: ../index.php');
        exit();
    } else {
        error_log("User not found");
        $error = "Email ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <!-- Inclusion de Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Se Connecter</h1>
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <?php if (isset($error)): ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Se Connecter</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>