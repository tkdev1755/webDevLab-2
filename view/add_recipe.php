<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une recette</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header-section {
            padding: 3rem 0;
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            margin-bottom: 2rem;
        }
        .commande-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 5px solid #007bff;
            margin-bottom: 1.5rem;
        }
        .commande-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .commande-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
        }
        .commande-id {
            font-size: 1.25rem;
            font-weight: bold;
            color: #007bff;
        }
        .commande-date {
            color: #6c757d;
        }
        .client-info {
            display: flex;
            align-items: center;
        }
        .client-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e9ecef;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 1rem;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .btn-action {
            margin-left: 0.5rem;
        }
        .search-container {
            margin-bottom: 2rem;
        }
        .status-badge {
            padding: 0.35rem 0.65rem;
            font-size: 0.85rem;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }
    </style>
</head>
<body>
    <h1>Ajouter une recette</h1>
    <form action="../index.php?action=add" method="POST">
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" required><br>

        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea><br>

        <label for="ingredients">Ingrédients :</label>
        <textarea id="ingredients" name="ingredients" required></textarea><br>

        <label for="etapes">Étapes :</label>
        <textarea id="etapes" name="etapes" required></textarea><br>

        <label for="categorie">Catégorie :</label>
        <select id="categorie" name="categorie">
            <option value="Entrée">Entrée</option>
            <option value="Plat">Plat</option>
            <option value="Dessert">Dessert</option>
        </select><br>

        <button type="submit">Ajouter la recette</button>
    </form>
</body>
</html>
