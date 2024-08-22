<?php

    class mainController {

        /**
         * Affichage de la page home
         *
         * @return void
         */
        public function homepage() {
            $this->show("homepage");
        }

        /**
         * Affichage de la page products
         *
         * @return void
         */
        public function productspage() {
            $this->show("products");
        }

        private function show($viewPage, $viewData = []) {

            require __DIR__ . "/../Views/partials/header.tpl.php";
            require __DIR__ . "/../Views/$viewPage.tpl.php";
            require __DIR__ . "/../Views/partials/footer.tpl.php";            
        }
    }