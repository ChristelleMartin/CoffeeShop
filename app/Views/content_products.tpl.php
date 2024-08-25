<h1>Entrez dans notre boutique</h1>

<div class="section">
    <h2>Nos Variétés de Café</h2>



    <div class="products">
        <?php foreach($viewData["products"] as $key => $product): ?>
            <div class="product-card">
                <img src="<?= $product->getPicture() ?>" alt="<?= $product->getTitle() ?>">
                <h3><?= $product->getTitle() ?></h3>
                <p><?= $product->getSubtitle() ?></p><br>
                <div class="products">
        <a class="btn" href="<?= $urlAbsolute ?>/product/<?= $product->getId() ?>">Détail</a>
        </div>
            </div>
        <?php endforeach; ?>
    </div>
 
</div>

