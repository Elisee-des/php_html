<?php
$parfun = [
    
];

$parfun = [

];
$parfun = [

];
require "header.php";
?>

<form action="/jeu2.php" method="POST">

    <div class="form-group">
        <input type="checkbox" name="parfun[]" value="fraise">Fraise</input>
        <input type="checkbox" name="parfun[]" value="vanile">Vanile</input>
        <input type="checkbox" name="parfun[]" value="chocolat">Chocolat</input>
    </div>
    <button type="submit" class="btn btn-primary">Deviner</button>

</form>

<h2>$_GET</h2>
<?php var_dump($_GET) ?>

<h2>$_POST</h2>
<?php var_dump($_POST) ?>

<?php require "footer.php"; ?>