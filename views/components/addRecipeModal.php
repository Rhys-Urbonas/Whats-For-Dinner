<div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="meal-form" method="post" action="../../controllers/recipes.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Add Recipe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>

                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora blanditiis, consequatur fugiat veritatis veniam at autem est repellat nisi, earum voluptatum voluptatibus eos optio, esse fuga ducimus mollitia eius rerum!
                    </p>

                    <div class="mb-3">
                        <label for="meal-name" class="form-label">Meal Name</label>
                        <input type="text" class="form-control" id="meal-name" name="meal-name" placeholder="e.g. Spaghetti Carbonara">
                    </div>
                    <div class="mb-3">
                        <label for="meal-servings" class="form-label">How Many Servings</label>
                        <input type="number" class="form-control" id="meal-servings" name="meal-servings" placeholder="e.g. 4">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p>Cooking Time</p>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="hours">Hours:</label>
                                <input type="number" id="hours" name="hours" min="0" step="1" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="minutes">Minutes:</label>
                                <input type="number" id="minutes" name="minutes" min="0" max="59" step="1" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 ingredients-section">
                        <label class="form-label">Ingredients</label>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <input type="text" class="form-control ingredient" placeholder="e.g. Pancetta" name="meal-ingredients[]">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control quantity" placeholder="e.g. 4" name="meal-ingredients-quantity[]">
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="button" class="btn btn-primary" id="add-more">Add Ingredient</button>
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="meal-instructions" class="form-label">Step By Step Instructions</label>
                        <textarea class="form-control" id="meal-instructions" name="meal-instructions" placeholder="e.g. Boil Pasta"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Meal</button>
                </div>
            </form>
        </div>
    </div>
</div>
