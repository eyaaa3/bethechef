<?php
/* Les vues sont des fichiers qui contiennent du
code HTML et des echo permettant d’afficher
les variables pré-remplies par le contrôleur */

//$tab_u est un objet ModelUtilisateur donné par le controllerUtilisateur

foreach ($tab_u as $u){
    echo "<div class='user-info'>";
    echo "<p> <span class='label'>Nom :</span> ".$u->getNom();
    echo "<span class='label'>Prénom :</span> ".$u->getPrenom();
    $id_user=$u->getId_User();
    echo "<span class='label'>Numéro utilisateur :</span> 
        <a class='user-link' href='index.php?controller=utilisateur&action=read&id_user=$id_user'>$id_user</a></p>";
    echo "<div class='action-links'>";
    echo "<a class='update-link' href='index.php?controller=utilisateur&action=update&id_user=$id_user'>Modifier</a>";
    echo "<a class='delete-link' href='index.php?controller=utilisateur&action=delete&id_user=$id_user'>Supprimer</a>";
    echo "</div>";
    echo "</div>";
}
?>

<div class='add'>
    <a class='add-link' href='index.php?controller=utilisateur&action=create'>Ajouter un nouvel utilisateur</a>
</div>
