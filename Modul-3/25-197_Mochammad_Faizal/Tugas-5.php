<?php
$mhs = [
    ["Name", "NIM", "Mobile"],
    ["Alex", 220401, "0812345678"],
    ["Bianica", 220402, "0812345687"],
    ["Candice", 220403, "0812345665"],
];

echo "Data awal student = (<br>";
foreach ($mhs as $m) {
    echo "(";
    foreach ($m as $mv) {
        echo "\"$mv\", ";
    } echo "), <br>";
} echo ")";

$mhs_new = [
    ["Daniel", 220404, "0812345611"],
    ["Elena", 220405, "0812345622"],
    ["Fiona", 220406, "0812345633"],
    ["Gabe", 220407, "0812345644"],
    ["Hannah", 220408, "0812345655"],
];

$mhs = array_merge($mhs, $mhs_new);
echo "<br><br>Data Setelah ditambah 5 data lain student = (<br>";
foreach ($mhs as $m) {
    echo "(";
    foreach ($m as $mv) {
        echo "\"$mv\", ";
    } echo "), <br>";
} echo ")<br><br>";

$baris_B = 0;
echo "<table border='1'> ";
foreach ($mhs as $m) {
    echo "<tr>";
    foreach ($m as $mv) {
        if ($baris_B == 0) {
            echo "<th> $mv </th>";
        } else {
            echo "<td> $mv </td>";
        }
    }$baris_B++; echo "</tr>";
} echo "</table>";
