<?php
$aDeviner = 150;
$erreur = null;
$succes = null;

if (isset($_POST["chiffre"])) {

    if ($_POST["chiffre"] > $aDeviner) {
        $erreur = "Votre chiffre est trop grand";
    } elseif ($_POST["chiffre"] < $aDeviner) {
        $erreur = "Votre chiffre est trop petit";
    } else {
        $succes = "Bravo vous avez Deviner le bon chiffre <strong>$aDeviner</strong>";
    }
    $value = (int)$_POST["chiffre"];
}

require "header.php";
?>

<?php if ($erreur) : ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php elseif ($succes) : ?>
    <div class="alert alert-success">
        <?= $succes ?>
    </div>
<?php endif ?>


<form action="/jeu.php" method="POST">

    <div class="form-group">
        <input type="number" name="chiffre" placeholder="Saisir un chiffre [0-1000]" value="<?= $value ?>">
    </div>
    <button type="submit" class="btn btn-primary">Deviner</button>

</form>

<h2>$_GET</h2>
<?php var_dump($_GET) ?>

<h2>$_POST</h2>
<?php var_dump($_POST) ?>

<?php require "footer.php"; ?>