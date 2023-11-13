<?php
include 'modele_cartes.php';
include 'menu.html';

$requete = $db->prepare("SELECT id FROM echange;");
$requete->execute();
$echanges = $requete->fetchAll();
for($i=0; $i<count($echanges); $i++){
    $requete2 = $db->prepare("SELECT username, echanger, wishlist FROM echange WHERE id = ?;");
    $requete2->execute(array($echanges[$i][0]));
    $echange = $requete2->fetch();
    echo '<p>'.$echange['username'].' : </p>';
    echo '<div class="cartes">';
    $_GET['id']=$echange['echanger'];
    include 'design_carte.php';
    $_GET['id']=$echange['wishlist'];
    include 'design_carte.php';
    echo '</div>';
}


?>
<head>
    <title>Historique</title>
</head>
<style>
    .cartes{display:flex;flex-direction:row;}
</style>