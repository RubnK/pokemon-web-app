<?php
include 'menu.html';
include 'modele_cartes.php';

session_start();

if(isset($_POST["effectuer-echange"]) && isset($_SESSION['echanger']) && isset($_SESSION['wishlist'])){
    $requete = $db->prepare("INSERT INTO echange (echanger, wishlist, username) VALUES (:echanger, :wishlist, :username);");
    $requete->execute(array("echanger" => $_SESSION['echanger'], "wishlist" => $_SESSION['wishlist'], "username" => $_POST['username']));
    session_destroy();
    unset($_POST);
    unset($_SESSION['postdata']);
    unset($_SESSION["wishlist"]);
    unset($_SESSION["echanger"]);
    header('Location:historique.php');
}

echo "<p>Carte à envoyer :</p>";
if(isset($_SESSION['echanger'])){
    $_GET['id']=$_SESSION['echanger'];
    include 'design_carte.php';
}
echo "<p>Carte obtenue :</p>";
if(isset($_SESSION['wishlist'])){
    $_GET['id']=$_SESSION['wishlist'];
    include 'design_carte.php';
}
echo '<br>';
?>
<head>
    <title>Echange</title>
</head>

<form method='post'>
    <label for='username'>Nom d'utilisateur :</label>
    <input type='text' name='username' required></input>
    <br><br>
    <button name='effectuer-echange' value='True'>Echanger</button>
</form>