<?php
    $fruits = array("Alpukat", "Blueberry", "Cherry");

    $fruits[] = "Durian";
    $fruits[] = "Semangka";
    $fruits[] = "Melon";
    $fruits[] = "Anggur";
    $fruits[] = "Jeruk";

    echo 'fruits =';

    for ($i = 0; $i < count($fruits); $i++) {
        echo '"' . $fruits[$i] . '"';

        if ($i < count($fruits) - 1) {
            echo ', ';
        }
    };
    echo "<br>";

    $indeks_tertinggi = count($fruits) - 1;

    echo "Nilai dengan indeks tertinggi: ";
    echo $fruits[$indeks_tertinggi];
?>
