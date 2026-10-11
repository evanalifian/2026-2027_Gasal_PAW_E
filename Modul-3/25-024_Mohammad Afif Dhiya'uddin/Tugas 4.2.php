<?php
    $weight = array(
        "Andy" => "70",
        "Barry" => "65",
        "Charlie" => "75"
    );

    echo 'weight = (';

    $i = 0;
    $jumlah = count($weight);

    foreach ($weight as $nama => $berat) {
        echo '"' . $nama . '"=>"' . $berat . '"';

        if ($i < $jumlah - 1) {
            echo ', ';
        }

        $i++;
    }

    echo ')<br><br>';

    $nama = array_keys($weight);
    $berat = array_values($weight);

    for ($i = 0; $i < count($weight); $i++) {
        echo $nama[$i] . " is " . $berat[$i] . " kg.<br>";
    }
?>
