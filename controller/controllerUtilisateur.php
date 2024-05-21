<?php
/* Le contrôleur reçoit les actions de l’utilisateur, lit ou met
à jour les données à travers le modèle, puis appelle la vue
adéquate. */


$controller = "utilisateur";
// chargement du modèle

require_once ("{$ROOT}{$DS}model{$DS}model_user.php");



if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else {$action = "home";
		require_once($ROOT.$DS."view".$DS."home.php");
	}

	
switch ($action){
	
    case "readAll":
        $pagetitle = "Liste des utilisateurs inscrits";
        $view = "readAll";
       	$tab_u = ModelUtilisateur::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id_user'])){
			$id_user = $_REQUEST['id_user'];
			$u = ModelUtilisateur::select($id_user);
				if($u!=null){
					$pagetitle = "Les coordonées de l'utilisateur";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id_user'])){
			$id_user = $_REQUEST['id_user'];
			$del = ModelUtilisateur::select($id_user);
			if($del!=null){
			$del->delete($id_user);
			/*redirection vers le contrôleur et l’action par défaut*/
			$del->delete1($id_user);
			require_once($ROOT.$DS."view".$DS."supprime.php");
			}
		}
	    break;
	
	case "create":
		$pagetitle = "Enregistrer un utilisateur";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
		case "created":
			// Action du formulaire de la création
			if( isset($_REQUEST['id_user']) && isset($_REQUEST['name']) && isset($_REQUEST['subname']) && isset($_REQUEST['email']) && isset($_REQUEST['password']) && isset($_REQUEST['cpassword']) && isset($_REQUEST['sexe'])){
				$id_user = $_REQUEST["id_user"];
				$name = $_REQUEST["name"];
				$sub = $_REQUEST["subname"];
				$em = $_REQUEST["email"];
				$pas = $_REQUEST["password"]; // Original password entered by the user
				
				// Hashing the password before storing it
				$hashed_password = md5($pas);
				
				$cpas = $_REQUEST["cpassword"];
				$se = $_REQUEST["sexe"];
		
				//il faut vérifier que l'utilisateur n'existe pas dans la bdd 
				$recherche = ModelUtilisateur::select($id_user);
				if($recherche==null && $pas==$cpas){ //Si l'utilisateur n'existe pas donc on l'ajoute
					//il faut créer une object ModelUtilisateur pour accéder à insert car elle n'est pas static
					$u = new ModelUtilisateur($id_user, $name, $sub,$em,$hashed_password,$se);
					$tab = array(
						"id_user" => $id_user,
						"name" => $name,
						"subname" => $sub,
						"email" => $em,
						"password" => $hashed_password, // Store hashed password in database
						"sexe" => $se
					);      
					
					$tab2 = array(
						"type" => '2',
						"adresse" => $_REQUEST["email"],
						"mdp" => $hashed_password,
						"nom" => $_REQUEST["name"],
						"n_cin" => $_REQUEST["id_user"]
					);
					$u->insert($tab);
					$u->insert2($tab2);
					 
					$pagetitle = "Utilisateur Enregistré";
					$view = "created";
					header("location: view/succes1.php");
				}   
			}
			break;
	
	case "update":
		if(isset($_REQUEST['id_user'])){
			$id_user = $_REQUEST['id_user'];
			$up = ModelUtilisateur::select($id_user);
			//il faut vérifier que l'utilisateur existe dans la bdd 
			if($up!=null){
				$pagetitle = "Modifier l'utilisateur";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
		case "updated": // Action du formulaire de modification
			if(isset($_REQUEST['id_user']) && isset($_REQUEST['name']) && isset($_REQUEST['subname']) && isset($_REQUEST['email']) && isset($_REQUEST['password']) && isset($_REQUEST['sexe'])){
				$oldid_user = $_REQUEST['id_user'];
				
				// Hash the new password if it's provided
				$hashed_password = isset($_REQUEST['password']) ? md5($_REQUEST['password']) : null;
		
				$tab = array(
					"id_user" => $_REQUEST["id_user"],
					"nom" => $_REQUEST["name"],
					"prenom" => $_REQUEST["subname"],
					"email" => $_REQUEST["email"],
					"mdp" => $hashed_password, // Use hashed password if provided
					"sexe" => $_REQUEST["sexe"]
				);
		
				$tab1 = array(
					"type" => '2',
					"adresse" => $_REQUEST["email"],
					"mdp" => $hashed_password, // Use hashed password if provided
					"nom" => $_REQUEST["name"],
					"n_cin" => $_REQUEST["id_user"]
				);
		
				$o = ModelUtilisateur::select($oldid_user);
				//il faut vérifier que l'utilisateur existe dans la bdd 
				if($o != null){
					// Perform the update with the hashed password
					$u = ModelUtilisateur::update($tab, $oldid_user);
					$v = ModelUtilisateur::update1($tab1, $oldid_user);     
		
					$pagetitle = "Compte modifié";
					$view = "updated";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}
			break;
		break;
		
	
		
	
}
?>
