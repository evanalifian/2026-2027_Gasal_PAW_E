<?php
	$array_awal = array("A");
	echo("Array awal: (\"" . implode("\", \"", $array_awal) . "\") <br>");

	array_push($array_awal, "B");
	echo("Hasil array_push: " . implode(" ", $array_awal) . "<br><br>");


	$array_merge = array_merge($array_awal, array("C"));
	echo("Array awal: (\"" . implode("\", \"", $array_awal) . "\") digabung dengan (\"C\") <br>");
	echo("Hasil array_merge: " . implode(" ", $array_merge) . "<br><br>");


	$array_awal = array("A", "B", "C");
	echo("Mencari \"B\" pada array: (\"" . implode("\", \"", $array_awal) . "\") <br>");
	echo("Hasil array_search: " . array_search("B", $array_awal) . "<br><br>");


	$array_awal = array("x"=>1, "y"=>2);
	echo("Array awal: (\"x\"=>1, \"y\"=>2) <br>");
	echo("Hasil array_values: " . implode(" ",array_values($array_awal)) . "<br><br>");


	$array_awal = array(0, 1, false, 2, "", 3, "array");
	echo("Array awal: (0, 1, false, 2, \"\", 3, \"array\") <br>");
	echo("Hasil array_filter: " . implode(" ",array_filter($array_awal)) . "<br><br>");


	$array_awal = array(3, 1, 2);
	echo("Array awal: (" . implode(", ", $array_awal) . ") <br>");
	sort($array_awal);
	echo("Hasil sort: " . implode(" ", $array_awal) . "<br>");
	rsort($array_awal);
	echo("Hasil rsort: " . implode(" ", $array_awal) . "<br><br>");


	$array_awal = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
	echo("Array awal: (\"Peter\"=>35, \"Ben\"=>37, \"Joe\"=>43) <br>");

	function print_array($title, $array){
		echo($title . ": ");
		foreach($array as $key => $val){
			echo($key . "=>" . $val . ", ");
		}
		echo("<br>");
	}
	asort($array_awal);
	print_array("Hasil asort", $array_awal);

	ksort($array_awal);
	print_array("Hasil ksort", $array_awal);

	arsort($array_awal);
	print_array("Hasil arsort", $array_awal);

	krsort($array_awal);
	print_array("Hasil krsort", $array_awal);
?>
