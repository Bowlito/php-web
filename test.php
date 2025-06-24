<?php
//Démarrer la session

session_start();

if ($_SERVER['HTTP_REFERER'] == 'http://localhost/php-web/test.php') {
    session_unset();
    session_destroy();
}

$nom_c = "";
$nom_s = "";
if (isset($_COOKIE['nom'])) {
    $nom_c = $_COOKIE['nom'];
}
if (isset($_SESSION['nom'])) {
    $nom_s = $_SESSION['nom'];
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "./_dependances.php"
    ?>
    <title>Document</title>
</head>

<body>
    <?php
    include "./_menu.php"
    ?>
    <h1>Cookies et sessions</h1>
    <h2>Cookies</h2>
    <p>Nom : <?php echo $nom_c ?></p>
    <p>Nom : <?= $nom_c ?></p>
    <h2>Sessions</h2>
    <p>Nom : <?php echo $nom_s ?></p>
    <p>Nom : <?= $nom_s ?></p>
    <p>
        <a href="test.php">Vider la session</a>
    </p>
</body>

</html>