<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require "./_dependances.php"
    ?>
    <title>Home Page</title>

</head>

<body>
    <?php
    include_once "./_menu.php"
    ?>
    <?php /* include "./_menu.php"*/?>
    <h1 class="text-primary">Page d'accueil</h1>
    <p>Bienvenue dans notre application <strong>PHP</strong></p>
    <a href="utilisateur.php?username=Mitroglou&ville=Marseille&age=55">
        Connaître un peu plus sur la légende?
    </a>


</body>

</html>