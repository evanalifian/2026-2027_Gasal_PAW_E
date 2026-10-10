<?php
$fruits = array('Avocado', 'Blueberry', 'Cherry');
print_r($fruits);
array_push($fruits, 'Durian', 'Elderberry', 'Fig', 'Grape', 'Honeydew');

$jumlah = count($fruits);
print_r($fruits);
echo '<br>'. 'Nilai dengan indeks tertinggi : '. $fruits[$jumlah -1];
