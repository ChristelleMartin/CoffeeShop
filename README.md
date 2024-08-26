# CoffeeShop
Exercice de dynamisation avec bdd et architecture MVC.
Le html et le css sont rudimentaires, ce n'est pas l'objet principal de cet exercice.

## Contexte / Rappel des définitions
Créer une application comportant une page d'accueil, une page produits et une page de recettes.

L’architecture MVC (Modèle-Vue-Contrôleur) est un modèle de conception qui sépare une application en trois composants principaux : cette séparation facilite la gestion, la maintenance et la scalabilité de l’application.

Models => Gère les données et la logique métier de l’application.
Views => Représente l’interface utilisateur et affiche les données du modèle.
Controllers => Sert d’intermédiaire entre le modèle et la vue, gère les entrées utilisateur et met à jour le modèle ou la vue en conséquence.

La page index.php est le point d'entrée de l'application.

### 1ere étape : mettre en place le routeur et la structure de nos fichiers
Etablir les routes

### 2e étape : mettre en place les vues / affichage visible
Utiliser les fichiers html

### 3e étape : mettre en place les controllers avec les classes
Gérer la logique PHP

### 4e étape : mettre en place la modélisation de la BDD
MCD / Mocodo / Entités / Relations ...
Créer la bdd dans Adminer

### 5e étape : créer les modèles pour récupérer les données de la BDD
Models/Product.php => lié à la table products de la bdd
Models/Recipes.php => lié à la table recipe de la bdd

### 6e étape : utiliser les modèles
Instancier les modèles pour donner aux vues les données de la bdd à utiliser
Passage de paramètres et d'arguments entre index.php et les controllers :
Controller => instancier le modèle et appeler la vue en lui transmettant les données à utiliser.
