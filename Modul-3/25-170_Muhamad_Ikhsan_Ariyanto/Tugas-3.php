<?php
    function print_array($nama, $array){
        echo($nama . " = (");
        foreach($array as $key => $val){
            echo("\"{$key}\"=>\"{$val}\"");
            echo(($val == end($array))? "" : ", ");
        }
        echo(")");
    }

    $height = array("Andy"=>"176","Barry"=>"165","Charlie"=>"170");
    $height["David"] = "180";
    $height["Ethan"] = "172";
    $height["Frank"] = "168";
    $height["George"] = "175";
    $height["Harry"] = "182";

    print_array("height", $height);
    echo("<br>");
    echo("Nilai dengan indeks terakhir: " . end($height));
    echo("<br><br>");

    unset($height["Barry"]);
    print_array("height", $height);
    echo("<br>");
    echo("Nilai dengan indeks terakhir setelah dihapus: " . end($height));
    echo("<br><br><br>");


    $weight = array("Andy"=>"70","Barry"=>"65","Charlie"=>"75");
    print_array("height", $weight);
    echo("<br>");
    echo("Data kedua: " . array_values($weight)[1]);
?>
