<?php
require_once __DIR__ . '/../model/Recipe.php'; // Inclusion du modèle User


class RecipeController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Recipe($pdo);
    }

    public function listRecipes()
    {
        $recipes = $this->model->getAllRecipes();
        require_once __DIR__ . '/../view/list_recipes.php'; // Inclusion du modèle User
    }

    public function addRecipe()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'ingredients' => $_POST['ingredients'],
                'etapes' => $_POST['etapes'],
                'categorie' => $_POST['categorie']
            ];
            $this->model->addRecipe($data);
            header('Location: index.php?action=list');
        } else {
            include __DIR__ . '/../view/add_recipe.php'; // Inclusion du modèle User
        }
    }

    public function updateRecipe($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'ingredients' => $_POST['ingredients'],
                'etapes' => $_POST['etapes'],
                'categorie' => $_POST['categorie']
            ];
            $this->model->updateRecipe($id, $data);
            header('Location: index.php?action=list');
        } else {
            $recipe = $this->model->getRecipeById($id);
            include  __DIR__ . '/../view/update_recipes.php'; // Inclusion du modèle User

        }
    }

    public function deleteRecipe($id)
    {
        $this->model->deleteRecipe($id);
        header('Location: index.php?action=list');
    }
}
