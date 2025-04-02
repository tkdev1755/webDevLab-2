<?php
require_once('controller/RecipeController.php');
require_once  'config/db.php';

$db = Database::getConnection();
$pdo = $db; // Connexion DB


$controller = new RecipeController($pdo);

$action = isset($_GET['action']) ? $_GET['action'] : 'list';

switch ($action) {
    case 'list':
        $controller->listRecipes();
        break;
    case 'add':
        $controller->addRecipe();
        break;
    case 'update':
        $id = $_GET['id'] ?? null;
        $controller->updateRecipe($id);
        break;
    case 'delete':
        $id = $_GET['id'] ?? null;
        $controller->deleteRecipe($id);
        break;
    case 'follow':
        $id = $_GET['id'] ?? null;
        $controller->followRecipe($id);
        break;
    default:
        echo json_encode(['status' => 'error', 'message' => 'Action inconnue']);
        break;
}
