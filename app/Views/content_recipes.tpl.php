<h1>Recettes à base de café</h1>

<div class="section">
    <?php foreach($viewData["recipes"] as $key => $recipe): ?>
        <h2><?= htmlspecialchars($recipe->getName()) ?></h2>
        <div class="recipe">
            <div class="recipe-card">
                <div class="recipe-ingredients">
                <h3>Ingrédients :</h3>
                    <ul>
                        <?php foreach($recipe->getIngredients() as $ingredient): ?>
                            <li><?= htmlspecialchars($ingredient['name']) ?> : <?= ($ingredient['quantity_for_each_ingredient']) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="recipe-instructions">
                    <h3>Instructions :</h3>
                    <p><?= htmlspecialchars($recipe->getInstructions()) ?></p><br>
                    <p>Recette ajoutée le : <?= date('d/m/Y', strtotime($recipe->getPublished_at())) ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

