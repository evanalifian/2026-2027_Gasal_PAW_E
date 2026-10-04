<?php
    $matkul = array("PTI", "ALPRO", "DPW", "STRUKDAT", "JARKOM", "PAW", "PSBF", "RPL");
    
    $praktikum = array("JARKOM", "PAW");

    for ($i=0; $i < count($matkul); $i++){
        $nama_matkul = $matkul[$i];

        if (in_array($nama_matkul, $praktikum)){
            echo("Saya sedang mengambil matkul {$nama_matkul} termasuk praktikum nya <br>");
        }else if ($i == 6 || $i == 7){
            echo("Saya belum mengambil matkul {$nama_matkul} <br>");
        }else{
            echo("Saya sudah mengambil matkul {$nama_matkul} semester lalu <br>");
        }
    }
?>
