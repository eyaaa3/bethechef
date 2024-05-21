<?php
$controller = "formation";

require_once ("{$ROOT}{$DS}model{$DS}model_formation.php"); // chargement du modèle

if(isset($_GET['action']))
	$action = $_GET['action'];// recupère l'action passée dans l'URL
 else $action="readAll";
	//else $action="create";

require_once ("{$ROOT}{$DS}model{$DS}model_chef.php");

switch ($action) {
	case "readAll":
		$pagetitle = "Liste des Formation";
		$view = "readAll";
		$tab_v = ModelFormation::getAll();
		require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
		break;

		case "readalll":
			$pagetitle = "Liste des Formation";
			$view = "readAlll";
			$tab_v = ModelFormation::getAll();
			require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
			break;
	
	case "read":
		if(isset($_GET['id_formation'])){
		$id_formation = $_GET['id_formation'];
		$formation = ModelFormation::select($id_formation);
		if($formation!=null){
		$pagetitle = "Details de la formation";
		$view = "read";
		require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
		}
		}
		break;
		
	case "delete":
	if(isset($_REQUEST['id_formation'])){
		$id_formation = $_REQUEST['id_formation'];
		$del = ModelFormation::select($id_formation);
		if($del!=null){
		$del->delete($id_formation);
		header('Location: index.php?controller=formation&action=readAll');
		}
	}
		break;
		
	case "create":
		$pagetitle = "Enregistrer une nouvelle formation";
		$view = "create";
		$tab_chef = ModelChef::getAll();//pour list HTML select appel au modèle pour récupérer les proprietaires de la BD
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
	
	case "created": // Action du formulaire de la création
		if(isset($_REQUEST['id_formation']) &&isset($_REQUEST['titre']) && isset($_REQUEST['programme']) && isset($_REQUEST['duree'])&& isset($_REQUEST['prix']) && isset($_REQUEST['date_formation']) && isset($_REQUEST['num_chef'])){
		$id_formation = $_REQUEST["id_formation"];
		$titre = $_REQUEST["titre"];
		$programme = $_REQUEST["programme"];
		$duree = $_REQUEST["duree"];
		$prix = $_REQUEST["prix"];
		$date_formation = $_REQUEST["date_formation"];
		$num_chef= $_REQUEST["num_chef"];
			//il faut vérifier que la formation n'existe pas dans la bdd 
		$recherche = ModelFormation::select($id_formation);
		if($recherche==null){ //Si l'utilisateur n'existe pas donc on l'ajoute
		$formation = new ModelFormation($id_formation,$titre, $programme, $duree, $prix, $date_formation,$num_chef);
		$tab = array(
		"id_formation"=>$id_formation,	
		"titre" => $titre,
		"programme" => $programme,
		"duree" => $duree,
		"prix" => $prix,
	    "date_formation"=>$date_formation,
	    "num_chef"=>$num_chef);
		$formation->insert($tab);
		$pagetitle = "Formation Ajoutée";
		$view = "created";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		}
		}
		break;
		
	
	case "update":
	if(isset($_REQUEST['id_formation'])){
		$oldid_formation = $_REQUEST['id_formation'];
		//$choixAction = "update";
		//il faut vérifier que la voiture existe dans la bdd 
		$tab_chef = ModelChef::getAll();//pour list HTML select appel au modèle pour récupérer les proprietaires de la BD
		$oldFormation = ModelFormation::select($oldid_formation);
		if($oldFormation !=null){
		$pagetitle = "Modifier la formation";
		$view = "update";
		//$oldVoiture = ModelVoiture::select($oldimmat);
		require ("{$ROOT}{$DS}view{$DS}view.php");
	}
	}
		break;
		
	case "updated": // Action du formulaire de modification
		if(isset($_REQUEST['id_formation']) && isset($_REQUEST['titre']) && isset($_REQUEST['programme'])&& isset($_REQUEST['duree']) && isset($_REQUEST['prix']) && isset($_REQUEST['date_formation']) && isset($_REQUEST['num_chef'])){
		$oldid_formation = $_GET['id_formation'];
		$tab = array(
		"id_formation" => $_POST["id_formation"],
		"titre" => $_POST["titre"],
		"programme" => $_POST["programme"],
		"duree" => $_POST["duree"],
		"prix" => $_POST["prix"],
		"date_formation" => $_POST["date_formation"],
		"num_chef" => $_POST["num_chef"]);
		
		$oldFormation = ModelFormation::select($oldid_formation);
		//il faut vérifier que l'utilisateur existe dans la bdd 
		if($oldFormation!=null){
		$UpdatedFormation = $oldFormation->update($tab, $oldid_formation);
		$pagetitle = "Formation modifiée avec succès";
		$view = "updated";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		}
		}
		break;
}
?>