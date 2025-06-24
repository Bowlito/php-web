<?php


$present = $_REQUEST['present'];
$verbe = "";


$racine = "";
$terminaisons_p = ["e", "es", "e", "ons", "ez", "ent"];
$pronoms = ["Je ", "Tu ", "Il / Elle ", "Nous ", "Vous ", "Ils / Elles "];

$conjug_p = [];

if ($_REQUEST['verbe'] != "" and isset($_REQUEST['present'])) {
    for ($i = 0; $i < strlen($verbe) - 2; $i++) {
        $racine .= $verbe[$i];
    }

    for ($j = 0; $j < count($pronoms); $j++) {
        $conjug_p[] .=  ($pronoms[$j] . $racine . $terminaisons_p[$j]);
    }

}

foreach ($conjug_p as $done) {
    $done = $_REQUEST['conj'];
    echo  $done;
}
