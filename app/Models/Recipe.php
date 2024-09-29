<?php
    class Recipe {

    // La représentation sous forme d'objet de ma table dans la BDD : recipe

    // propriétés

    private $id;
    private $name;
    private $instructions;
    private $published_at;
    private $ingredients = []; /* Ajout d'une propriété sous forme de tableau pour récupérer les ingrédients nécessaires à chaque recette */

    // méthodes

    // Les actives records (find / findAll)
    public function findAll() {
        $sql = 'SELECT * FROM recipe';
        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        // un tableau d'objets de la class Recipe
        $recipes = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Recipe');

        return $recipes;
    }

    public function findById($id) {
        $sql = 'SELECT * FROM recipe WHERE id = :id';
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute(['id' => $id]);

        // l'objet de la class recipe qui correspond à l'id
        $recipe = $pdoStatement->fetchObject('Recipe');

        return $recipe;
    }

    public function findIngredients() {
        $sql = 'SELECT i.name, n.quantity_for_each_ingredient
                FROM need n
                JOIN ingredient i ON n.ingredient_id = i.id
                WHERE n.recipe_id = :recipe_id';

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute(['recipe_id' => $this->id]);

        $this->ingredients = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }

    // Les getters et les setters

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     * 
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     * 
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }

        /**
     * Get the value of name
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Set the value of name
     * 
     * @return self
     */
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;
        
        return $this;
    }

    /**
     * Get the value of published_at
     */
    public function getPublished_at()
    {
        return $this->published_at;
    }

    /**
     * Set the value of published_at
     * 
     * @return self
     */
    public function setPublished_at($published_at)
    {
        $this->published_at = $published_at;
        
        return $this;
    }


    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }
    }