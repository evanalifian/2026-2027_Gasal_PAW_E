<?php
    $height = array(
        "Andy" => "176",
        "Barry" => "165",
        "Charlie" => "170"
    );

    $height["David"] = "180";
    $height["Ethan"] = "172";
    $height["Frank"] = "168";
    $height["George"] = "175";
    $height["Harry"] = "182";

    echo 'height = (';

    foreach ($height as $nama => $tinggi) {
        echo '"' . $nama . '"=>"' . $tinggi . '"';

        if ($nama != "Harry") {
            echo ', ';
        }
    }

    echo ')<br>';

    $indeks_terakhir = "";

    foreach ($height as $nama => $tinggi) {
        $indeks_terakhir = $nama;
    }

    echo "Nilai dengan indeks terakhir: ";
    echo $height[$indeks_terakhir] . "<br><br>";

    unset($height["Barry"]);

    echo 'height = (';

    $indeks_terakhir = "";
    $jumlah = count($height);
    $i = 0;

    foreach ($height as $nama => $tinggi) {
        echo '"' . $nama . '"=>"' . $tinggi . '"';

        if ($i < $jumlah - 1) {
            echo ', ';
        }

        $indeks_terakhir = $nama;
        $i++;
    }

    echo ')<br>';

    echo "Nilai dengan indeks terakhir setelah dihapus: ";
    echo $height[$indeks_terakhir];
?>
