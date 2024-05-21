<?php
/* Le contrôleur reçoit les actions de chef, lit ou met
à jour les données à travers le modèle, puis appelle la vue
adéquate. */


$controller = "chef";
// chargement du modèle

require_once ("{$ROOT}{$DS}model{$DS}model_chef.php");



if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else {$action = "home";
		require_once($ROOT.$DS."view".$DS."home.php");
	}

	
switch ($action){
	
    case "readAll":
        $pagetitle = "Liste des etudiants inscrits";
        $view = "readAll";
       	$tab_u = ModelChef::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id_chef'])){
			$id_chef = $_REQUEST['id_chef'];
			$u = ModelChef::select($id_chef);
				if($u!=null){
					$pagetitle = "Les coordonées du chef";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id_chef'])){
			$id_chef = $_REQUEST['id_chef'];
			$del = ModelChef::select($id_chef);
			if($del!=null){
			$del->delete($id_chef);

			$del->delete1($id_chef);
			/*redirection vers le contrôleur et l’action par défaut*/
			require_once($ROOT.$DS."view".$DS."home.php");
			}
		}
	    break;
	
	case "create":
		$pagetitle = "Enregistrer un chef";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
		case "created": // Action du formulaire de la création
			if( isset($_REQUEST['id_chef']) && isset($_REQUEST['name']) && isset($_REQUEST['subname']) && isset($_REQUEST['sexe']) && isset($_REQUEST['date'])&& isset($_REQUEST['email']) && isset($_REQUEST['password']) && isset($_REQUEST['cpassword'])&& isset($_REQUEST['experience']) ){
				$id_chef = $_REQUEST["id_chef"];
				$name = $_REQUEST["name"];
				$sub = $_REQUEST["subname"];
				$se = $_REQUEST["sexe"];
				$dt= $_REQUEST["date"];
				$em = $_REQUEST["email"];
				$pas = $_REQUEST["password"]; // Original password entered by the chef
				$hashed_password = md5($pas); // Hash the password
		
				$cpas = $_REQUEST["cpassword"];
				$ex = $_REQUEST["experience"];
		
				//il faut vérifier que l'chef n'existe pas dans la bdd 
				$recherche = ModelChef::select($id_chef);
				if($recherche==null && $pas==$cpas){ //Si l'chef n'existe pas donc on l'ajoute
					$u = new ModelChef($id_chef, $name, $sub, $se, $dt, $em, $hashed_password, $ex);
					$tab = array(
						"id_chef" => $id_chef,
						"nom" => $name,
						"prenom" => $sub,
						"sexe" => $se,
						"date_naissance" => $dt,
						"email" => $em,
						"mdp" => $hashed_password, // Store hashed password in database
						"experience" => $ex
					);
					$tab2 = array(
						"type" => '3',
						"adresse" => $_REQUEST["email"],
						"mdp" => $hashed_password,
						"nom" => $_REQUEST["name"],
						"n_cin" => $_REQUEST["id_chef"]
					);
					$u->insert($tab);
					$u->insert2($tab2);
		
					$pagetitle = "Chef Enregistré";
					header("location: view/succes.php");
				}   
			}
			break;
		
	
	case "update":
		if(isset($_REQUEST['id_chef'])){
			$id_chef = $_REQUEST['id_chef'];
			$up = ModelChef::select($id_chef);
			//il faut vérifier que le chef existe dans la bdd 
			if($up!=null){
				$pagetitle = "Modifier le chef";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
        case "updated": // Action du formulaire de modification
            if(isset($_REQUEST['id_chef']) && isset($_REQUEST['name']) && isset($_REQUEST['subname'])&& isset($_REQUEST['sexe'])&& isset($_REQUEST['date_naissance']) &&isset($_REQUEST['email']) &&isset($_REQUEST['password']) &&isset($_REQUEST['ex'])){
                $oldid_chef = $_REQUEST['id_chef'];

				$hashed_password = isset($_REQUEST['password']) ? md5($_REQUEST['password']) : null;
                $tab = array(
                 "id_chef" => $_REQUEST["id_chef"],
                 "nom" => $_REQUEST["name"],
                 "prenom" => $_REQUEST["subname"],
                 "sexe" => $_REQUEST["sexe"],
                 "date_naissance" => $_REQUEST["date_naissance"],
                 "email" => $_REQUEST["email"],
                 "mdp" => $hashed_password,
                 "experience" => $_REQUEST["ex"]
                 );
                 $tab1 = array(
                "type" => '3',
                "adresse" => $_REQUEST["email"],
                "mdp" => $hashed_password,
                "nom" => $_REQUEST["name"],
                "n_cin" => $_REQUEST["id_chef"]
                );
                 
                $o = ModelChef::select($oldid_chef);
                //il faut vérifier que l'utilisateur existe dans la bdd 
                if($o!=null){
                    $u = ModelChef::update($tab, $oldid_chef);
                    $v =ModelChef::update1($tab1, $oldid_chef);
                    $pagetitle = "Compte modifié";
                    $view = "updated";
                    require ("{$ROOT}{$DS}view{$DS}view.php");
                }
            }	
            break;

		
	
		
	
}
?>

