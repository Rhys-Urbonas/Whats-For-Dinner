<?php declare(strict_types=1); ?>

<!DOCTYPE html>
<html lang="en">

<?php include BASE_DIR . '/includes/header.php'; ?>

<?php include BASE_DIR . '/includes/nav.php'; ?>

    <body>

    <!-- <section class="search-recipe">
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Search...">
            <button id="search-button">Search</button>
        </div>
    </section> -->

    <section class="add-recipe-section">
        <div class="container">
            <div class="text-center">
                <h2>Add your custom recipes</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia cumque natus quibusdam autem. Consectetur maiores fugiat doloremque officia assumenda delectus. Perferendis consequatur magnam similique dicta. Animi, eum dolorem. Itaque, provident!
                    </p>
                    <button 
                        class="btn btn-primary" 
                        data-bs-toggle="modal"
                        data-bs-target="#reg-modal"
                    >
                        Add Recipe
                    </button>
                </div>
            </div>
        </div>

        <?php include BASE_DIR . '/views/components/addRecipeModal.php'; ?>
    </section>

    <section class="browse-recipe">
        
    </section>

    <script src="../public/js/recipes.js"></script>

</body>
</html>