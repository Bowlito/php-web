
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