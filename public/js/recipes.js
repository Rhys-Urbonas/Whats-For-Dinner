let addAnotherIngredientBtn = document.getElementById("add-more");

addAnotherIngredientBtn.addEventListener("click", function() {
    console.log('button clicked');

    const newRow = document.createElement("div");
    newRow.classList.add("row", "mb-3");

    const ingredientCol = document.createElement("div");
    ingredientCol.classList.add("col-md-8");

    const ingredientInput = document.createElement("input");
    ingredientInput.type = "text";
    ingredientInput.classList.add("form-control", "ingredient");
    ingredientInput.placeholder = "e.g. Pancetta";
    ingredientInput.name = "meal-ingredients[]";
    ingredientCol.appendChild(ingredientInput);

    const quantityCol = document.createElement("div");
    quantityCol.classList.add("col-md-4");

    const quantityInput = document.createElement("input");
    quantityInput.type = "text";
    quantityInput.classList.add("form-control", "quantity");
    quantityInput.placeholder = "e.g. 4";
    quantityInput.name = "meal-ingredients-quantity[]";
    quantityCol.appendChild(quantityInput);

    newRow.appendChild(ingredientCol);
    newRow.appendChild(quantityCol);

    addAnotherIngredientBtn.parentNode.insertBefore(newRow, addAnotherIngredientBtn);
});
