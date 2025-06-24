<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $present = ["e", "es", "e", "ons", "ez", "ent"];
    $imparfait = ["ais", "ais", "ait", "ions", "iez", "aient"];
    $futur = ["ai", "as", "a", "ons", "ez", "ont"];
    $pronoms = ["Je", "Tu", "Il/Elle", "Nous", "Vous", "Ils"];

    $verbe = "chercher";
    $temps = "futur";

    $racine = substr($verbe, 0, strlen($verbe) - 2);

    echo $racine;

    if ($temps == "present") {

        foreach ($present as $index => $end) {

            echo "\n" . "$pronoms[$index]" . " $racine" . "$end";
        }
    } else if ($temps == "imparfait") {
        foreach ($imparfait as $index => $end) {
            echo "\n" . "$pronoms[$index]" . " $racine" . "$end";
        }
    } else {
        foreach ($futur as $index => $end) {
            echo "\n" . "$pronoms[$index]" . " $verbe" . "$end";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require "../_dependances.php"
    ?>
    <title>Document</title>
</head>

<body>
    <form method="post">
        <div class="mb-3 col-sm-2">
            <label for="verbe" class="form-label">Verbe du 1er groupe à l'infinitif</label>
            <input type="text" class="form-control" name="verbe">
        </div>
        <select class="form-select col-sm-2" id="choix">
            <option selected disabled>Choisissez un temps</option>
            <option value="present">Présent</option>
            <option value="futur">Futur</option>
            <option value="imparfait">Imparfait</option>
        </select>

        <button type="submit" class="btn btn-primary col-sm-2 mb-3">Conjuguer</button>

        <ul class="list-group">
            <?php
            foreach ($conjug_p as $done) {
                $done = $_REQUEST['conj'];
                echo  $done;
            }
            ?>
        </ul>
    </form>
</body>

</html>