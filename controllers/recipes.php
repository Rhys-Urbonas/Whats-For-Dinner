<?php

declare(strict_types=1);
$page = 'recipes';

include BASE_DIR . '/views/recipes_view.php';

include BASE_DIR . '/models/RecipeModel.php';


$model = new RecipeModel($conn);
$controller = new RecipeController();

class RecipeController {

    public function handleFormSubmission($model) {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userRecipeFormData = $model->getUserRecipeFormData();
            $model->insertRecipeFormDataToTable($userRecipeFormData);
        }
    }
}

$controller->handleFormSubmission($model);
