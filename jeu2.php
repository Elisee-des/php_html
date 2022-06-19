<?php
require "function.php";
$parfuns = [
    'fraise' => 4,
    "chocolat" => 5,
    "Vanile" => 3
];

$cornets = [
    "pot" => 2,
    "cornet" => 0.5
];

$supplements = [
    'pepite de chocolat' => 1,
    'chantity' => 0.5
];

require "header.php";
?>

<h2>Composer Votre Glace</h2>

<form action="/jeu2.php" method="POST">

    <div class="form-group">
        <?php foreach ($parfuns as $parfun => $prix) : ?>
            <div class="checkbox">
                <label for="checkbox">
                    <?= checkbox("parfun", $parfun, $_GET) ?>
                </label>
                <?= $parfun ?> - <?= $prix ?> $
            </div>
        <?php endforeach; ?>
    </div>
    <button type="submit" class="btn btn-primary">Composer ma glace</button>

</form>

<h2>$_GET</h2>
<?php var_dump($_GET) ?>

<h2>$_POST</h2>
<?php var_dump($_POST) ?>

<?php require "footer.php"; ?>