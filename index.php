<?php
include 'menu.html';
require 'modele_cartes.php';
foreach(getAllCards($db) as $key){
    $_GET['id']=$key;
    require 'design_carte.php';
    echo '<a href="carte.php?id='.$key.'">Voir la carte</a>';
    echo '<br><br>';
}
?>

<head>
    <title>Catalogue</title>
</head>