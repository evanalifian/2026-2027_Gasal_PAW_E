<?php
$vegies = ['Carrot', 'Brocoli', 'Spinach'];

$jumlah = count($vegies);
for ($i=0; $i < $jumlah ; $i++) { 
	echo $vegies[$i];
	echo '<br>';
}

 // saya membuatnya skrip baru tidak terdapat modifikasi yang banyak saya hanya mengganti variabel pada perulangannya saja. Kenapa saya membuat skrip baru tapi tidak jauh berbeda karena jika menggunakan count tersebut mau sebanyak data sudah akan pasti di print pada perulangan sampai jumlah data yang didalam array jika tidak menggunakan count maka variabel yang isinya array tersebut tidak dapat dilakukan perulangan karena bentuknya bukan lah angka.