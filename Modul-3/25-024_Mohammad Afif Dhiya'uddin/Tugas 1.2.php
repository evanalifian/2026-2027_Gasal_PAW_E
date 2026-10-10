<?php
    $fruits = array("Alpukat", "Blueberry", "Cherry");

    $fruits[] = "Durian";
    $fruits[] = "Semangka";
    $fruits[] = "Melon";
    $fruits[] = "Anggur";
    $fruits[] = "Jeruk";

    unset($fruits[1]);
    unset($fruits[4]);

    echo 'fruits =';

    foreach ($fruits as $indeks => $fruit) {
        echo '"' . $fruit . '"';

        if ($indeks != 7) {
            echo ', ';
        }
    }
    echo "<br>";

    $indeks_tertinggi = 0;

    foreach ($fruits as $indeks => $fruit) {
        $indeks_tertinggi = $indeks;
    }

    echo "Nilai dengan indeks tertinggi: ";
    echo $fruits[$indeks_tertinggi];
?>
