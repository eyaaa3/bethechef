<?php



$controller = "admin";
// chargement du modèle admin

require_once ("{$ROOT}{$DS}model{$DS}model_admin.php");



if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
// On a ajouté un comportement par défaut avec action=home page pour que ne pas lister les autres actions 
	else {$action = "home";
		require_once($ROOT.$DS."view".$DS."home.php");
	}

	
switch ($action){
	
    case "readAll":
        $pagetitle = "Liste des utilisateurs et chefs inscrits";
        $view = "readAll";
       	$tab_u = ModelAdmin::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	    
		if(isset($_REQUEST['id_admin'])){
			$id_admin = $_REQUEST['id_admin'];
			$u = ModelAdmin::select($id_admin);
				if($u!=null){
					$pagetitle = "Votre coordonées";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id_admin'])){
			$id_admin = $_REQUEST['id_admin'];
			$del = ModelAdmin::select($id_admin);
			if($del!=null){
			$del->delete($id_admin);
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
		
	case "createdc": // Action du formulaire de la création
		if( isset($_REQUEST['id_user']) && isset($_REQUEST['name']) && isset($_REQUEST['subname']) && isset($_REQUEST['email']) && isset($_REQUEST['password']) && isset($_REQUEST['cpassword']) && isset($_REQUEST['sexe'])){
			$id_user = $_REQUEST["id_user"];
			$name = $_REQUEST["name"];
			$sub = $_REQUEST["subname"];
			$em = $_REQUEST["email"];
			$pas = $_REQUEST["password"];
			$cpas = $_REQUEST["cpassword"];
			$se = $_REQUEST["sexe"];
			//il faut vérifier que l'utilisateur n'existe pas dans la bdd 
			$recherche = ModelAdmin::select($id_user);
			if($recherche==null && $pas==$cpas){ //Si l'utilisateur n'existe pas donc on l'ajoute
									//il faut créer une object ModelUtilisateur pour accéder à insert car elle n'est pas static
				$u = new ModelAdmin($id_user, $name, $sub,$em,$pas,$se);
				$tab = array(
				"id_user" => $id_user,
				"name" => $name,
				"subname" => $sub,
				"email" => $em,
				"password" => $pas,
				"sexe" => $se
				);				
				$u->insert($tab);
                
				 
				$pagetitle = "Utilisateur Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
        case "created": // Action du formulaire de la création
            if( isset($_REQUEST['id_user']) && isset($_REQUEST['name']) && isset($_REQUEST['subname']) && isset($_REQUEST['email']) && isset($_REQUEST['password']) && isset($_REQUEST['cpassword']) && isset($_REQUEST['sexe'])){
                $id_user = $_REQUEST["id_user"];
                $name = $_REQUEST["name"];
                $sub = $_REQUEST["subname"];
                $em = $_REQUEST["email"];
                $pas = $_REQUEST["password"];
                $cpas = $_REQUEST["cpassword"];
                $se = $_REQUEST["sexe"];
                //il faut vérifier que l'utilisateur n'existe pas dans la bdd 
                $recherche = ModelAdmin::select($id_user);
                if($recherche==null && $pas==$cpas){ //Si l'utilisateur n'existe pas donc on l'ajoute
                                        //il faut créer une object ModelUtilisateur pour accéder à insert car elle n'est pas static
                    $u = new ModelAdmin($id_user, $name, $sub,$em,$pas,$se);
                    $tab = array(
                    "id_user" => $id_user,
                    "name" => $name,
                    "subname" => $sub,
                    "email" => $em,
                    "password" => $pas,
                    "sexe" => $se
                    );				
                    $u->insert($tab);
                     
                    $pagetitle = "Utilisateur Enregistré";
                    $view = "created";
                    require ("{$ROOT}{$DS}view{$DS}view.php");
                }	
            }
            break;
	
	case "update":
		if(isset($_REQUEST['id_admin'])){
			$id_admin = $_REQUEST['id_admin'];
			$up = ModelAdmin::select($id_admin);
			//il faut vérifier que l'utilisateur existe dans la bdd 
			if($up!=null){
				$pagetitle = "Modifier votre compte";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
        
        


			case "updated": // Action du formulaire de modification
				if(isset($_REQUEST['id_admin']) && isset($_REQUEST['name']) && isset($_REQUEST['subname'])&& isset($_REQUEST['sexe'])&& isset($_REQUEST['email']) &&isset($_REQUEST['niv_acc']) &&isset($_REQUEST['password'])){
					$oldid_admin = $_REQUEST['id_admin'];
					$tab = array(
						"id_admin" => $_REQUEST["id_admin"],
						"nom" => $_REQUEST["name"],
						"prenom" => $_REQUEST["subname"],
					 "sexe" => $_REQUEST["sexe"],
					 "email" => $_REQUEST["email"],
					 "niv_acc" => $_REQUEST["niv_acc"],
					 "mdp" => $_REQUEST["password"]
					 );
					 $tab1 = array(
					"type" => '1',
					"adresse" => $_REQUEST["email"],
					"mdp" => $_REQUEST["password"],
					"nom" => $_REQUEST["name"],
					"n_cin" => $_REQUEST["id_admin"]
					);
					 
					$o = ModelAdmin::select($oldid_admin);
					//il faut vérifier que l'utilisateur existe dans la bdd 
					if($o!=null){
						$u = ModelAdmin::update($tab, $oldid_admin);
						$v =ModelAdmin::update1($tab1, $oldid_admin);
						$pagetitle = "Compte modifié";
						$view = "updated";
						require ("{$ROOT}{$DS}view{$DS}view.php");
					}
				}	
				break;


				
		
}
?>

