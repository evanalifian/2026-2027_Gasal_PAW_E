<?php
    $mahasiswa = array(
        array("Alex", "220401", "0812345678"),
        array("Bianca", "220402", "0812345687"),
        array("Candice", "220403", "0812345665")
    );

    $mahasiswa[] = array("YSS", "220404", "0812345670");
    $mahasiswa[] = array("Apip", "220405", "0812345671");
    $mahasiswa[] = array("Siska", "220406", "0812345672");
    $mahasiswa[] = array("Ghopur", "220407", "0812345673");
    $mahasiswa[] = array("Alvi", "220408", "0812345674");

    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>Name</th><th>NIM</th><th>Mobile</th></tr>";

    foreach ($mahasiswa as $data) {
        echo "<tr>";
        echo "<td>" . $data[0] . "</td>";
        echo "<td>" . $data[1] . "</td>";
        echo "<td>" . $data[2] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
?>
