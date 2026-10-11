<?php
$fruits = array('avocado', 'blueberry', 'cherry');

// Menambahkan lima data baru
$fruits[] = 'Durian';
$fruits[] = 'elderberry';
$fruits[] = 'fig';
$fruits[] = 'grape';
$fruits[] = 'heneydew';

// Menampilkan isi array
echo "fruits = (";
echo '"' . implode('", "', $fruits) . '")<br>';


// Menampilkan nilai dengan indeks tertinggi
echo "Nilai dengan indeks tertinggi: " . $fruits[count($fruits) - 1];

echo "<br>";

?>


<?php
$fruits = array(
    "Avocado", "Blueberry", "Cherry", "Durian",
    "Elderberry", "Fig", "Grape", "Honeydew"
);

// Menghapus data Blueberry
unset($fruits[1]);

echo "Data Blueberry dihapus.<br>";

// Menampilkan isi array
echo "fruits = (";
echo '"' . implode('", "', $fruits) . '")<br>';

// Menampilkan nilai dengan indeks tertinggi
echo "Nilai dengan indeks tertinggi: " . end($fruits);
?>