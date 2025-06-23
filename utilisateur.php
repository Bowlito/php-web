<?php

$username = "Doe";
if ($_POST['username'] != "") {
    $username = $_POST['username'];
}


if ($_POST['genre'] == 'femme'){
    $genre = "Madame";
} else {
    $genre = "Monsieur";
}

$age = $_POST['age'];
$ville = $_POST['ville'];
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
    </p>

</body>

</html>