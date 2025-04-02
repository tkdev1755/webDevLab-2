<?php
session_start();

if (!isset($_SESSION['connected']) || !$_SESSION['connected']) {
    // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de <?php echo htmlspecialchars($_SESSION['name']); ?></title>
    <!-- Inclusion de Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Profil de <?php echo htmlspecialchars($_SESSION['name']); ?></h1>
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td><?php echo htmlspecialchars($_SESSION['id']); ?></td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td><?php echo htmlspecialchars($_SESSION['name']); ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo htmlspecialchars($_SESSION['email']); ?></td>
                </tr>
            </table>
            <a href="logout.php" class="btn btn-danger btn-block">Se Déconnecter</a>
        </div>
    </div>
</div>
</body>
</html>