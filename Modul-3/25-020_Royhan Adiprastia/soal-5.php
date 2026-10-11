<?php
$students = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665"),
    array("Daniel", "220404", "0812345671"),
    array("Emily", "220405", "0812345672"),
    array("Farhan", "220406", "0812345673"),
    array("Grace", "220407", "0812345674"),
    array("Henry", "220408", "0812345675")
);

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Name</th><th>NIM</th><th>Mobile</th></tr>";

for ($i = 0; $i < count($students); $i++) {
    echo "<tr>";

    for ($j = 0; $j < count($students[$i]); $j++) {
        echo "<td>" . htmlspecialchars($students[$i][$j]) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>
