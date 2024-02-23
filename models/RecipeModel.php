<?php 

include BASE_DIR . '/config/database.php';

class RecipeModel {

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getUserRecipeFormData()
    {
        $userRecipeFormData = [];
        
        $postKeysMapping = [
            "meal-name" => "mealName",
            "meal-servings" => "servings",
            "hours" => "cookingTimeHours",
            "minutes" => "cookingTimeMinutes",
            "meal-ingredients" => "ingredients",
            "meal-ingredients-quantity" => "ingredientsQuantity",
            "meal-instructions" => "cookingInstructions"
        ];
        
        foreach ($postKeysMapping as $postKey => $formDataKey) {
            if (isset($_POST[$postKey])) {
                $userRecipeFormData[$formDataKey] = $_POST[$postKey];
            }
        }
    
        // Calculate total cooking time in minutes
        if (isset($userRecipeFormData['cookingTimeHours'], $userRecipeFormData['cookingTimeMinutes'])) {
            
            $totalCookingTime = ($userRecipeFormData['cookingTimeHours'] ?? 0)
            * 60 
            + ($userRecipeFormData['cookingTimeMinutes'] ?? 0);
            
            $userRecipeFormData['totalCookingTime'] = $totalCookingTime;
        }
        
        return $userRecipeFormData;
    }
    
    public function insertRecipeFormDataToTable($userRecipeFormData)
    {
        $mealName = $userRecipeFormData['mealName'] ?? null;
        $servings = $userRecipeFormData['servings'] ?? null;
        $totalCookingTime = $userRecipeFormData['totalCookingTime'] ?? null;
        $ingredients = json_encode($userRecipeFormData['ingredients']) ?? null;
        $ingredientQuantity = json_encode($userRecipeFormData['ingredientsQuantity'])?? null;
        $cookingInstructions = $userRecipeFormData['cookingInstructions'] ?? null;
    
        if (!$mealName || !$servings || !$totalCookingTime || !$ingredients || !$ingredientQuantity || !$cookingInstructions) {
            echo "Error: Missing required fields.";
            return;
        }
    
        $sql = "INSERT INTO user_recipes (meal_name, serves, total_cooking_time, ingredients, ingredients_quantity, instructions) VALUES (?, ?, ?, ?, ?, ?)";
        $params = array(&$mealName, &$servings, &$totalCookingTime, &$ingredients, &$ingredientQuantity, &$cookingInstructions);
    
        $stmt = sqlsrv_prepare($this->conn, $sql, $params);
        if ($stmt && sqlsrv_execute($stmt)) {
            echo "Recipe inserted successfully!";
        } else {
            $errors = sqlsrv_errors();
            echo "Error inserting recipe: " . $errors[0]['message'];
        }
    }

    public function updateUserRecipe() 
    {


    }
    

    // public function getAllData() {
    //     $sql = "SELECT * FROM user_recipes";
    //     $stmt = sqlsrv_query($this->conn, $sql);
    
    //     $data = array();
    //     if ($stmt !== false) {
    //         while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    //             $data[] = $row;
    //         }
    //         sqlsrv_free_stmt($stmt);
    //     } else {
    //         $errors = sqlsrv_errors();
    //         echo "Error executing query: " . $errors[0]['message'];
    //     }
    
    //     return $data;
    // }

    
    
}

