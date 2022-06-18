<?php

// function nav_item (string $lien, string $titre): string
// {
//   $classe = "nav-item";
//   if ($_SERVER["SCRIPT_NAME"] === $lien) {
//     $classe = $classe. ' active';
//   }
//   return <<<HTML
//   <li class="$classe.">
//     <a class="nav-link" href="$lien">$titre</a>
//   </li>
// HTML

// }

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>
    <?php if (isset($titre)) : ?>
      <?= $titre; ?>
    <?php else : ?>
      Mon site
    <?php endif ?>
  </title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="starter-template.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Mon site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/index.php">Acceuil</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/contact.php">Contact</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/jeu.php">Jeu</span></a>
      </li>
      
      </ul>
    </div>
  </nav>

  <main role="main" class="container">