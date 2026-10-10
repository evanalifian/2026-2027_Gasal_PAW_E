<?php
$height = array("Andy"=>"176","Barry"=>"165","Charlie"=>"170");

// echo "Andy is " . $height['Andy'] ." cm tall.";

$height['David'] = '180';
$height['Ethan'] = '172';
$height['Frank'] = '168';
$height['George'] = '175';
$height['Harry'] = '182';

print_r($height);
echo '<br>'. 'Nilai dengan indeks terakhir : '. $height['Harry'];

unset($height['Barry']);
echo '<br>';
echo '<br>';
print_r($height);
echo '<br>'. 'Nilai dengan indeks terakhir : '. $height['Harry'];
?>