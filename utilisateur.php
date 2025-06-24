<?php
//Démarrer la session

session_start();

if (is_null($_SERVER['HTTP_REFERER']) or (!str_contains($_SERVER['HTTP_REFERER'], 'index.php') and !str_contains($_SERVER['HTTP_REFERER'], 'inscription.php'))) {
    header("location: index.php"); // redirection
    exit(); // ne pas lire la suite
}
//var_dump($_SERVER);
// 'REQUEST_METHOD' => string 'GET' (length=3)
// 'HTTP_REFERER' => string 'http://localhost/php-web/' (length=25)

$username = "";
if ($_REQUEST['username'] != "") {
    $username = $_REQUEST['username'];
}


if (isset($_REQUEST['genre']) && $_REQUEST['genre'] == 'femme') {
    $genre = "Madame";
} else {
    $genre = "Monsieur";
}

$age = $_REQUEST['age'];
$ville = $_REQUEST['ville'];

setcookie("nom", $username);

//ajouter des données dans la session

$_SESSION['nom'] = $username;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'utilisateur</title>
</head>

<body>

    <h1>Gestion d'utilisateur</h1>
    <p>
        Bonjour
        <?php
        echo "$genre $username, vous avez $age ans et êtes de $ville";
        ?>
        <a href="test.php">Consulter les cookies et les sessions</a>
    </p>

</body>

</html>