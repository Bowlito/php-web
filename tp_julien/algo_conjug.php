<?php

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
