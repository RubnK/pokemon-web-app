<?php
include 'menu.html';
include 'config.php';
$db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$user,$password);
$requete1 = $db->prepare("SELECT id, hex FROM color;");
$requete1->execute();
$colors = $requete1->fetchAll();
$requete2 = $db->prepare("INSERT INTO pokemon (id, name, hp, img, color) VALUES (?, ?, ?, ?, ?);");
$requete3 = $db->prepare("SELECT id, name FROM type;");
$requete3->execute();
$types = $requete3->fetchAll();
$requete4 = $db->prepare("INSERT INTO pokemon_type (pokemon, type) VALUES (?, ?);");
?>
<form method="post">
    <label for="id">ID :</label>
    <input type="text" name="id" required></input><br><br>
    <label for="name">Name :</label>
    <input type="text" name="name" required></input><br><br>
    <label for="hp">HP :</label>
    <input type="number" maximum="999" minimum="1" name="hp" required></input><br><br>
    <label for="img">Image :</label>
    <input type="text" name="img" required></input><br><br>
    <label for="color">Color :</label>
    <select name="color" required>
        <?php
        for($i = 0; $i<count($colors); $i++){
            echo '<option value="'.$colors[$i]['id'].'">'.$colors[$i]['hex'].'</option>';
        }
        ?>
    </select><br><br>
    <label for="type1">Type 1 :</label>
    <select name="type1" required>
        <?php
        echo "<option value='' selected disabled>Veuillez choisir</option>";
        for($i = 0; $i<count($types); $i++){
            echo '<option value="'.$types[$i]['id'].'">'.$types[$i]['name'].'</option>';
        }
        ?>
    </select><br><br>
    <label for="type2">Type 2 :</label>
    <select name="type2">
        <?php
        echo "<option value='' selected>Veuillez choisir</option>";
        for($i = 0; $i<count($types); $i++){
            echo '<option value="'.$types[$i]['id'].'">'.$types[$i]['name'].'</option>';
        }
        ?>
    </select><br><br>
    <button type="submit">Envoyer</button>
</form>

<?php
if(isset($_POST['id'])){
    $requete2->execute(array($_POST['id'],$_POST['name'],$_POST['hp'],$_POST['img'],$_POST['color']));
    $requete4->execute(array($_POST['id'],$_POST['type1']));
    if(isset($_POST['type2'])){
        $requete4->execute(array($_POST['id'],$_POST['type2']));
    }
}
unset($_POST);
unset($_SESSION['postdata']);
?>

<head>
    <title>Admin panel</title>
</head>