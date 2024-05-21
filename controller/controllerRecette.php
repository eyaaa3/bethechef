<?php
$controller = "recette";

require_once ("{$ROOT}{$DS}model{$DS}model_recette.php"); // chargement du modèle

if(isset($_GET['action']))
	$action = $_GET['action'];// recupère l'action passée dans l'URL
 else $action="readAll";
	//else $action="readall";

require_once ("{$ROOT}{$DS}model{$DS}model_chef.php");

switch ($action) {
	case "readAll":
		$pagetitle = "Liste des Recettes";
		$view = "readAll";
		$tab_r = ModelRecette::getAll();
		require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
		break;

		case "readalll":
			$pagetitle = "Liste des recettes";
			$view = "readalll";
			$tab_r = ModelRecette::getAll();
			require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
			break;
	
	case "read":
		if(isset($_GET['id_recette'])){
		$id_recette = $_GET['id_recette'];
		$recette = ModelRecette::select($id_recette);
		if($recette!=null){
		$pagetitle = "Details de la recette";
		$view = "read";
		require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
		}
		}
		break;
		
	case "delete":
	if(isset($_REQUEST['id_recette'])){
		$id_recette = $_REQUEST['id_recette'];
		$del = ModelRecette::select($id_recette);
		if($del!=null){
		$del->delete($id_recette);
		header('Location: index.php?controller=recette&action=readAll');
		}
	}
		break;
		
	case "create":
		$pagetitle = "Enregistrer une nouvelle recette";
		$view = "create";
		$tab_chef = ModelChef::getAll();//pour list HTML select appel au modèle pour récupérer les proprietaires de la BD
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
	
	case "created": // Action du formulaire de la création
		if(isset($_REQUEST['id_recette']) &&isset($_REQUEST['titre']) &&isset($_REQUEST['ingredient']) && isset($_REQUEST['preparation']) && isset($_REQUEST['temp_prep'])&& isset($_REQUEST['nb_personnes']) && isset($_REQUEST['num_chef'])){
		$id_recette = $_REQUEST["id_recette"];
		$titre = $_REQUEST["titre"];
		$ingredient = $_REQUEST["ingredient"];
		$preparation = $_REQUEST["preparation"];
		$temp_prep = $_REQUEST["temp_prep"];
		$nb_personnes = $_REQUEST["nb_personnes"];
		$num_chef= $_REQUEST["num_chef"];
			
		$recherche = ModelRecette::select($id_recette);
		if($recherche==null){ //Si l'utilisateur n'existe pas donc on l'ajoute
		$recette = new ModelRecette($id_recette,$titre, $ingredient, $preparation, $temp_prep, $nb_personnes,$num_chef);
		$tab = array(
		"id_recette"=>$id_recette,	
		"titre" => $titre,
		"ingredient" => $ingredient,
		"preparation" => $preparation,
		"temp_prep" => $temp_prep,
	    "nb_personnes"=>$nb_personnes,
	    "num_chef"=>$num_chef);
		$recette->insert($tab);
		$pagetitle = "Recette Ajoutée";
		$view = "created";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		}
		}
		break;
		
	
	case "update":
	if(isset($_REQUEST['id_recette'])){
		$oldid_recette = $_REQUEST['id_recette'];
		//$choixAction = "update";
		//il faut vérifier que la recette existe dans la bdd 
		$tab_chef = ModelChef::getAll();//pour list HTML select appel au modèle pour récupérer les proprietaires de la BD
		$oldRecette = ModelRecette::select($oldid_recette);
		if($oldRecette !=null){
		$pagetitle = "Modifier la recette";
		$view = "update";
		
		require ("{$ROOT}{$DS}view{$DS}view.php");
	}
	}
		break;
		
	case "updated": // Action du formulaire de modification
		if(isset($_REQUEST['id_recette']) && isset($_REQUEST['titre']) && isset($_REQUEST['ingredient'])&& isset($_REQUEST['preparation']) && isset($_REQUEST['temp_prep']) && isset($_REQUEST['nb_personnes']) && isset($_REQUEST['num_chef'])){
		$oldid_recette = $_GET['id_recette'];
		$tab = array(
		"id_recette" => $_POST["id_recette"],
		"titre" => $_POST["titre"],
		"ingredient" => $_POST["ingredient"],
		"preparation" => $_POST["preparation"],
		"temp_prep" => $_POST["temp_prep"],
		"nb_personnes" => $_POST["nb_personnes"],
		"num_chef" => $_POST["num_chef"]);
		
		$oldRecette = ModelRecette::select($oldid_recette);
		//il faut vérifier que l'utilisateur existe dans la bdd 
		if($oldRecette!=null){
		$UpdatedRecette = $oldRecette->update($tab, $oldid_recette);
		$pagetitle = "recette modifiée avec succès";
		$view = "updated";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		}
		}
		break;
}
?>