<?php
// Include the base model class

require_once ("model.php"); 

// Define the ModelAdmin class that extends the base Model class

class ModelAdmin extends Model{


  // Private properties for admin details

  private $id_admin;
  private $nom;
  private $prenom;
  private $sexe;
  private $email;
  private $niv_acc;
  private $mdp;

  // Static properties for table names and primary keys

  protected static $table = 'admin';
  protected static $table1 = 'utilisateurs';
  protected static $primary = 'id_admin';
  protected static $primary1 = 'n_cin';
  
     // Constructor to initialize the admin object

  public function __construct($id_admin = NULL, $nom = NULL, $prenom = NULL ,$sexe= NULL, $email= NULL ,$niv_acc = NULL,$mdp = NULL) {
    if (!is_null($id_admin) && !is_null($nom) && !is_null($prenom) && !is_null($sexe) && !is_null($email) && !is_null($niv_acc) && !is_null($mdp)) {
      $this->id_admin = $id_admin;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->sexe = $sexe;
      $this->email = $email;
      $this->niv_acc = $niv_acc;
      $this->mdp = $mdp;
     }
  } 

    // Getters method for admin

 public function getId_Admin() {
       return $this->id_admin;  
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
  public function getNivAcc() {
    return $this->niv_acc;  
}
   public function getMdp() {
    return $this->mdp;  
}




}
?>