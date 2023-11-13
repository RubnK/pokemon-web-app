<?php
include 'modele_cartes.php';
include 'menu.html';

if(isset($_GET['id'])){ 
    session_start();
    if(isset($_POST['echanger'])){
        $_SESSION['echanger']=$_GET['id'];
    }
    if(isset($_POST['wishlist'])){
        $_SESSION['wishlist']=$_GET['id'];
    }
    include 'design_carte.php'
?>
<br>
<head><title><?php echo getCardById($db,$_GET['id'])['name'] ?></title></head>
<form method="post"> 
    <input type="submit" name="echanger" value="Echanger"/> 
    <input type="submit" name="wishlist"value="Liste d'envie"/> 
</form> 
<?php
}
?>