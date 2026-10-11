<?php

$matkul = array(
    "PTI",
    "ALPRO",
    "DPW",
    "STRUKDAT",
    "JARKOM",
    "PAW",
    "PSBF",
    "RPL"
);

$praktikum = array(
    "JARKOM",
    "PAW"
);

foreach ($matkul as $index => $nama) {
	switch ($nama) {
		case "JARKOM":
		CASE "PAW":
			echo "saya sedang mengambil matkul $nama termassuk praktikumnya<br>";
			break;
		
		case "PSBF":
		case "RPL":
			echo "saya belum mengambil matkul $nama<br>";
			break;
		default:
			echo "saya sudah mengambil matkul $nama semester lalu<br>";
			break;
	}
}


?>
