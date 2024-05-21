<?php

// Include the base model class
require_once ("model.php"); 

// Define the ModelUtilisateur class that extends the base Model class
class ModelUtilisateur extends Model{
// Private properties for user details (same names and order as in the 'utilisateur' table)
  private $id_user;
  private $nom;
  private $prenom;
  private $email;
  private $mdp;
  private $sexe;

  // Static properties for table names and primary keys
  protected static $table = 'utilisateur';
  protected static $primary = 'id_user';
  protected static $table1 = 'utilisateurs';
  protected static $primary1 = 'n_cin';
   
  // Constructor to initialize the utilisateur object
  public function __construct($id_user = NULL, $nom = NULL, $prenom = NULL, $email= NULL ,$mdp = NULL,$sexe= NULL ) {
    // Check if all parameters are provided and not null
    if (!is_null($id_user) && !is_null($nom) && !is_null($prenom) && !is_null($email) && !is_null($mdp) && !is_null($sexe)) {

      // Initialize properties with provided values
      $this->id_user = $id_user;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->email = $email;
      $this->mdp = $mdp;
      $this->sexe = $sexe;
    }
  } 
  //getters
 public function getId_User() {
       return $this->id_user;  
  }
 public function getNom() {
       return $this->nom;  
  }
  public function getPrenom() {
       return $this->prenom;  
  }

  public function getSexe() {
    return $this->sexe;  
}

  public function getEmail() {
    return $this->email;  
}
  
   public function getMdp() {
    return $this->mdp;  
}


}
?>