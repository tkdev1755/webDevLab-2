<?php
?><?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <!-- Inclusion de Bootstrap à partir du dossier css existant -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Bienvenue sur la Page d'Accueil</h1>
    <div class="row justify-content-center mt-5">
        <?php if (isset($_SESSION['connected']) && $_SESSION['connected']): ?>
            <div class="col-md-4">
                <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['name']); ?></h2>
                <a href="view/logout.php" class="btn btn-danger btn-block">Se Déconnecter</a>
            </div>
        <?php else: ?>
            <div class="col-md-4">
                <h2>Veuillez vous connecter</h2>
                <a href="view/login.php" class="btn btn-primary btn-block">Se Connecter</a>
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>