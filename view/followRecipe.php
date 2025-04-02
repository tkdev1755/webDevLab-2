<?php




?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une recette</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
<header class="hero-section text-lg-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4">Suivre la recette de <?php echo $recipe['titre'] ?></h1>
        <h2 class="lead mb-5"><?php echo $recipe['description'] ?></h2>

    </div>
</header>
    <div class="container mt-5">
        <h3 >Vous aurez besoin de</h3>
        <p><?php echo $recipe['ingredients'] ?></p>
    </div>
    <div class="container mt-5">
        <h3 >Vous devrez faire</h3>
        <p><?php echo $recipe['ingredients'] ?></p>
    </div>
    <div class="container mt-5">
        <a href="../index.php" class="btn btn-primary mt-3">Revenir à l'accueil</a>
    </div>

</body>
</html>