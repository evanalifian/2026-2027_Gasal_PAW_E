<?php
    $matkul = array("PTI", "ALPRO", "DPW", "STRUKDAT", "JARKOM", "PAW", "PSBF", "RPL");

    foreach($matkul as $nama_matkul){
        switch ($nama_matkul){
            case "PTI":
            case "ALPRO":
            case "DPW":
            case "STRUKDAT":
            case "JARKOM":
            case "PAW":
                echo("Saya suka {$nama_matkul} <br>");
                break;
            default:
                echo("Saya tidak mengambil matkul <br>");
                break;
        }
    }
?>
