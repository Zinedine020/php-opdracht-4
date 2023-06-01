<?php

// Opdracht 1
for ($i = 0; $i <= 50; $i++) {
    echo $i . "<br />";
}

// Opdracht 2
$klasgenoten = ["Zinedine", "Ensar", "Willem", "Mustapha", "Emir", "Zakaria", "Mohammed", "Jan", "Sarah", "Fatima"];
foreach ($klasgenoten as $naam) {
    echo $naam . "<br />";
}

// Opdracht 3
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];
for ($i = 0; $i < count($maanden); $i++) {
    echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br />';
}

// Opdracht 4
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];
foreach ($maanden as $index => $maand) {
    echo 'Maand ' . ($index + 1) . ' is ' . $maand . '.<br />';
}

?>
