<?php

    class mainController {

        /**
         * Affichage de la page home
         *
         * @return void
         */
        public function homepage() {
            $this->show("content_homepage");
        }

        /**
         * Affichage de la page products
         *
         * @return void
         */
        public function productspage() {
            
            // Instancier le Model Product.php qui interagit avec la DB
            $productModel = new Product();
            $productsFromModel = $productModel->findAll();

            $this->show("content_products", [ "products" => $productsFromModel ]);
        }

        /**
         * Affichage de la page product/[id] 
         *
         * @return void
         */
        public function detailproduct($urlParams) {
            // Récupération du paramètre dynamique product_id défini dans index.php
            $productId = $urlParams["product_id"];

            // Récupération du produit dans la DB
            // SELECT * FROM product WHERE id = $productId
            $productModel = new Product();
            $productFromModel = $productModel->findById($productId);

            $data = [
                'product' => $productFromModel  // contient un objet de la class Product
            ];

            $this->show("detail_product", $data);
        }

        /**
         * Affichage de la page recipes
         *
         * @return void
         */
        public function recipespage() {

            // Instancier le Model Recipe.php qui interagit avec la DB
            $recipeModel = new Recipe();
            $recipesFromModel = $recipeModel->findAll();

            $this->show("content_recipes", [ "recipes" => $recipesFromModel ]);
        }

        private function show($viewPage, $viewData = []) {

            // Récupérer le sous-chemin du localhost
            $urlAbsolute = $_SERVER["BASE_URI"];

            require __DIR__ . "/../Views/partials/header.tpl.php";
            require __DIR__ . "/../Views/$viewPage.tpl.php";
            require __DIR__ . "/../Views/partials/footer.tpl.php";            
        }
    }