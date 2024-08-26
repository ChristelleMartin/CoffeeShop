<h1>Recettes à base de café</h1>

<div class="section">
    <?php foreach($viewData["recipes"] as $key => $recipe): ?>
        <h2><?= htmlspecialchars($recipe->getName()) ?></h2>
        <div class="recipe">
            <div class="recipe-card">
                <div class="recipe-ingredients">
                    <h3>Ingrédients (à dynamiser):</h3>
                    <ul>
                        <li>50 ml de vodka</li>
                        <li>30 ml d'espresso fraîchement préparé</li>
                        <li>20 ml de liqueur de café</li>
                        <li>5 ml de sirop de sucre</li>
                        <li>Glaçons</li>
                        <li>Grains de café pour la décoration</li>
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

