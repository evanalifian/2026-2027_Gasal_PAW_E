<?php
$fruits = array('Avocado', 'Blueberry', 'Cherry');
array_push($fruits, 'Durian', 'Elderberry', 'Fig', 'Grape', 'Honeydew');

unset($fruits[1]);
$fruits = array_values($fruits);
$jumlah = count($fruits);
print_r($fruits);
echo '<br>'. 'Nilai dengan indeks tertinggi : '. $fruits[$jumlah -1];
