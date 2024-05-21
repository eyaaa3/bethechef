<?php


require_once ("model.php"); 

// Define the ModelChef class that extends the base Model class

class ModelChef extends Model{
//Même noms et ordre que dans la table chef
  private $id_chef;
  private $nom;
  private $prenom;
  private $sexe;
  private $date_naissance;
  private $email;
  private $mdp;
  private $experience;

  // Static properties for table names and primary keys

  protected static $table = 'chef';
  protected static $primary = 'id_chef';
  protected static $table1 = 'utilisateurs';
  protected static $primary1 = 'n_cin';

       // Constructor to initialize the  object

  
   
  public function __construct($id_chef = NULL, $nom = NULL, $prenom = NULL, $sexe= NULL, $date_naissance= NULL, $email = NULL, $mdp= NULL, $experience = NULL) {
    if (!is_null($id_chef) && !is_null($nom) && !is_null($prenom) && !is_null($prenom) && !is_null($sexe) && !is_null($date_naissance) && !is_null($email) && !is_null($mdp) && !is_null($experience)) {
      $this->id_chef = $id_chef;
      $this->nom = $nom;
      $this->sexe = $sexe;
      $this->date_naissance = $date_naissance;
      $this->email = $email;
      $this->mdp = $mdp;
      $this->experience = $experience;
     }
  } 

      // Getters method for chef

 public function getId_Chef() {
       return $this->id_chef;  
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
  public function getDate_Naissance() {
    return $this->date_naissance;  
}
public function getEmail() {
  return $this->email;  
}
public function getMdp() {
  return $this->mdp;  
}
public function getExperience() {
  return $this->experience;  
}


}
?>
