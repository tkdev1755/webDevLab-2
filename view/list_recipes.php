<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des recettes</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .hero-section {
            padding: 5rem 0;
            background: linear-gradient(135deg, #A6D1AC 0%, #9CD1C9 100%);
            color: white;
        }
        .feature-card {
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .card-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #A6D1AC;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 2rem 0;
        }
    </style>
</head>

<body>
    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Liste de recettes</h1>
            <a href="../index.php?action=add" class="lead mb-5">Ajoutez une nouvelle recette </a>
        </div>
    </header>
    <ul>
        <?php foreach ($recipes as $recipe): ?>
            <div class="card feature-card shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="card-icon">
                        <i class="bi bi-people"></i>
                        🧑🏻‍🍳
                    </div>
                    <h3 class="card-title"><?php echo $recipe['titre']; ?></h3>
                    <p class="card-text"><?php echo $recipe['description']; ?></p>
                    <a href="../index.php?action=update&id=<?php echo $recipe['id']; ?>" class="btn btn-primary mt-3">Modifier</a>
                    <a href="../index.php?action=delete&id=<?php echo $recipe['id']; ?>" class="btn btn-primary mt-3">Supprimer</a>
                    <a href="../index.php?action=follow&id=<?php echo $recipe['id']; ?>" class="btn btn-primary mt-3">Suivre la recette</a>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>
</body>

</html>


