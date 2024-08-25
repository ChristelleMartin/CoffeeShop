<h1>Entrez dans notre boutique</h1>

<?php $product = $viewData["product"]; ?>

<div class="section">
    <h2>Nos Variétés de Café</h2>



    <div class="products">
        
            <div class="product-card">
                <img src="<?= $urlAbsolute ?>/<?= $product->getPicture() ?>" alt="<?= $product->getTitle() ?>">
                <h3><?= $product->getTitle() ?></h3>
                <p><?= $product->getSubtitle() ?></p>
            </div>

    </div>
    <div class="products">
        <a class="btn" href="<?= $urlAbsolute ?>/products">Voir tous nos produits</a>
    </div>
</div>
