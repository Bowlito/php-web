<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $present = ["e", "es", "e", "ons", "ez", "ent"];
    $imparfait = ["ais", "ais", "ait", "ions", "iez", "aient"];
    $futur = ["ai", "as", "a", "ons", "ez", "ont"];
    $pronoms = ["Je", "Tu", "Il/Elle", "Nous", "Vous", "Ils"];

    $verbe = "";
    if ($_REQUEST['verbe'] != "") {
        $verbe = $_REQUEST['verbe'];
    }

    $temps = "";
    if ($_REQUEST['temps'] != "") {
        $temps = $_REQUEST['temps'];
    }

    $racine = substr($verbe, 0, strlen($verbe) - 2);
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
    <form method="post" class="d-flex flex-column col-6 p-2 align-items-center">
        <div class="mb-3">
            <label for="verbe" class="form-label">Indiquez un verbe du 1er groupe</label>
            <input type="text" class="form-control" placeholder="votre verbe" name="verbe">
        </div>
        <select class="form-select p-2" name="temps">
            <option selected disabled>Temps</option>
            <option value="present">Présent</option>
            <option value="futur">Futur</option>
            <option value="imparfait">Imparfait</option>
        </select>
        <button type=submit class="btn btn-warning p-2">Conjuguer</button>
        <ul>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($temps == "present") {

                    foreach ($present as $index => $end) {

                        echo "<li>" . $pronoms[$index] . " " . $racine . $end . "</li>";
                    }
                } else if ($temps == "imparfait") {
                    foreach ($imparfait as $index => $end) {
                        echo "<li>" . $pronoms[$index] . " " . $racine . $end . "</li>";
                    }
                } else {
                    foreach ($futur as $index => $end) {
                        echo "<li>" . $pronoms[$index] . " " . $verbe . $end . "</li>";
                    }
                }
            }
            ?>
        </ul>
    </form>
</body>

</html>