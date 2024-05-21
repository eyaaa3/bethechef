<?php

// Include the base model class

require_once ("model.php");

// Define the ModelRecette class that extends the base Model class
class ModelRecette extends Model {

  // Static properties for the table name and primary key
  protected static $table = 'recette';
  protected static $primary = 'id_recette';
  // Constructor to initialize the recette object

  public function __construct($r = NULL, $ti = NULL, $ing = NULL, $prep = NULL, $temp_prep = NULL, $nb_per = NULL, $chef = NULL) {

     // Check if all parameters are provided and not null
    if (!is_null($r) && !is_null($ti) && !is_null($ing) && !is_null($prep) && !is_null($temp_prep) && !is_null($nb_per)) {
      // Initialize properties with provided values
      $this->id_recette = $r;
      $this->titre = $ti;
      $this->ingredient = $ing;
	    $this->preparation=$prep;
      $this->temp_prep=$temp_prep;
      $this->nb_personnes=$nb_per;
      $this->num_chef=$chef;
    }
  }  
  // Getters method for recette
  public function getRecette() {
       return $this->id_recette;  
  }
  
  public function getTitre() {
       return $this->titre;  
  }
  
  public function getIngredient() {
       return $this->ingredient;
  }

  public function getPreparation() {
       return $this->preparation;  
  }

  public function getTempPrep() {
    return $this->temp_prep;  
}
  public function getNbPersonne() {
    return $this->nb_personnes;  
}

  public function getChef() {
  return $this->num_chef;  
}
}
?>