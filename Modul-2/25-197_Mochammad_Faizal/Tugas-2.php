<?php
$matkul = ["PTI", "ALPRO", "DPW", "STRUKDAT", "JARKOM", "PAW", "PSBF", "RPL"];

foreach($matkul as $matkulGweh){
    switch ($matkulGweh) {
        case "PTI":
            echo "Saya suka $matkulGweh <br>";
            break;
        case "ALPRO":
            echo "Saya suka $matkulGweh <br>";
            break;
         case "DPW":
             echo "Saya suka $matkulGweh <br>";
             break;
        case "STRUKDAT": 
            echo "Saya suka $matkulGweh <br>";
            break;
        case "JARKOM":
            echo "Saya suka $matkulGweh <br>";
            break;
        case "PAW":
            echo "Saya suka $matkulGweh <br>";
            break;
        default:
            echo "Saya tidak mengambil matkul $matkulGweh <br>";
    }
}
