<?php


// Include the base model class
require_once ("model.php");

// Define the ModelFormation class that extends the base Model class

class ModelFormation extends Model {

  // Static properties for the table name and primary key
  protected static $table = 'formation';
  protected static $primary = 'id_formation';

  // Constructor to initialize the formation object
  
  public function __construct($f = NULL, $t = NULL, $p = NULL, $d = NULL, $pr = NULL, $df = NULL ,$c = NULL) {

     // Check if all parameters are provided and not null
    if (!is_null($f) && !is_null($t) && !is_null($p) && !is_null($d) && !is_null($pr) && !is_null($df)) {
      $this->id_formation = $f;
      $this->titre = $t;
      $this->programme = $p;
	    $this->duree=$d;
      $this->prix=$pr;
      $this->date_formation=$df;
      $this->num_chef=$c;
    }
  }  
  // Getter method for formation
  
  public function getFormation() {
       return $this->id_formation;  
  }
  
  public function getTitre() {
       return $this->titre;  
  }
  
  public function getProgramme() {
       return $this->programme;
  }

  public function getDuree() {
       return $this->duree;  
  }

  public function getPrix() {
    return $this->prix;  
}
  public function getDate_formation() {
    return $this->date_formation;  
}
public function getChef() {
    return $this->num_chef;  
}
}
?>