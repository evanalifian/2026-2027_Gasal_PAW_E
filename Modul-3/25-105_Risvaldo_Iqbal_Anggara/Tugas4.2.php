<?php
$weight = array('Andy' => '70', 'Barry' => '65', 'Charlie' => '75');
$key = array_keys($weight);

print_r($weight);
echo '<br>';

for ($i=0; $i < count($weight) ; $i++) { 
	echo '<br>'. $key[$i]. ' is '. $weight[$key[$i]]. ' kg.';
}