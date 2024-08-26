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
                            <li><?= ($ingredient['quantity_for_each_ingredient']) ?> - <?= htmlspecialchars($ingredient['name']) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="recipe-instructions">
                    <h3>Instructions :</h3>
                    <p><?= htmlspecialchars($recipe->getInstructions()) ?></p><br>
                    <p>Date d'ajout : <?= date('d/m/Y', strtotime($recipe->getPublished_at())) ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

