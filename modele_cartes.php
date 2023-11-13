<?php 
include 'config.php';
$db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$user,$password);
function getAllCards($db){
    $requete = $db->prepare("SELECT id FROM pokemon;");
    $requete->execute();
    $ids = $requete->fetchAll();
    foreach($ids as $key => $value){
        $x[]=$value[0];
    }
    return $x;
}

function getCardById($db,$card){
    $requete = $db->prepare("SELECT pokemon.id, pokemon.name, hp, img, hex AS color, GROUP_CONCAT(DISTINCT type.name, '') AS type FROM pokemon JOIN color ON pokemon.color=color.id JOIN pokemon_type ON pokemon_type.pokemon = pokemon.id JOIN type ON type.id = pokemon_type.type WHERE pokemon.id = ? ;");
    $requete->execute(array($card));
    $cards = $requete->fetch();
    return $cards;
}
?>