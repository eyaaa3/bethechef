<?php
/* Les vues sont des fichiers qui contiennent du
code HTML et des echo permettant d’afficher
les variables pré-remplies par le contrôleur */

//$tab_u est un objet ModelUtilisateur donné par le controllerUtilisateur

foreach ($tab_u as $u){
    echo "<div class='user-info'>";
    echo "<p> <span class='label'>Nom :</span> ".$u->getNom();
    echo "<span class='label'>Prénom :</span> ".$u->getPrenom();
    $id_chef=$u->getId_Chef();
    echo "<span class='label'>Numéro Chef:</span> 
        <a class='user-link' href='index.php?controller=chef&action=read&id_chef=$id_chef'>$id_chef</a></p>";
    echo "<div class='action-links'>";
    
    echo "<a class='update-link' href='index.php?controller=chef&action=delete&id_chef=$id_chef'>Supprimer</a>";
    echo "</div>";
    echo "</div>";
}
?>

<div class='add'>
    <a class='add-link' href='index.php?controller=chef&action=create'>Ajouter un nouvel chef</a>
</div>
