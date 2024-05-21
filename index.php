<?php

$ROOT = __DIR__;


$DS = DIRECTORY_SEPARATOR;


$controleur_default = "utilisateur" ;
if(!isset($_REQUEST['controller']))
				//$controller récupère $controller_default;
				$controller=$controleur_default;
			else 
				// recupère l'action passée dans l'URL
				$controller = $_REQUEST['controller'];

				
switch ($controller) {
			case "utilisateur" :
			
				require ("{$ROOT}{$DS}controller{$DS}controllerUtilisateur.php");
				break;
				
			case "admin" :
				require ("{$ROOT}{$DS}controller{$DS}controllerAdmin.php");
				break;	
				
			case "chef" :
				require ("{$ROOT}{$DS}controller{$DS}controllerChef.php");
				break;
            case "formation" :
                require ("{$ROOT}{$DS}controller{$DS}controllerFormation.php");
                break;
            case "recette" :
                require ("{$ROOT}{$DS}controller{$DS}controllerRecette.php");
                break;
            case "default" :
                require ("{$ROOT}{$DS}controller{$DS}controllerUtilisateur.php");
                break;
}
?>