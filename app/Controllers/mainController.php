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
            
            // Instancier le model Product qui interagit avec la DB
            $productModel = new Product();
            $productsFromModel = $productModel->findAll();

            $this->show("content_products", [ "products" => $productsFromModel ]);
        }

        /**
         * Affichage de la page recipes
         *
         * @return void
         */
        public function recipespage() {
            $this->show("content_recipes");
        }

        private function show($viewPage, $viewData = []) {

            require __DIR__ . "/../Views/partials/header.tpl.php";
            require __DIR__ . "/../Views/$viewPage.tpl.php";
            require __DIR__ . "/../Views/partials/footer.tpl.php";            
        }
    }