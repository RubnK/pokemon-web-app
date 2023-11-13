<?php
$card = getCardById($db,$_GET['id']);
?>
<style><?php include 'css/style.css'; ?></style>
<div class="card" style=background-color:<?php echo $card['color'];?>>
    <div class="pokemon-card-header">
        <p class="pokemon-card-name"><?php echo $card['name'] ?></p>
        <p class="pokemon-card-hp">HP : <?php echo $card['hp'] ?></p>
    </div>
    <div class="pokemon-card-image">
        <img src="<?php echo $card['img'] ?>">
    </div>
    <p class="pokemon-card-type">Type : <?php echo $card['type'] ?></p>
    <p class="pokemon-card-id">Identifiant : <?php echo $_GET['id'] ?></p>
</div>