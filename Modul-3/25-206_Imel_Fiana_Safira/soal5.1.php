<?php
$mahasiswa = [
    ["Alex", "Bianca", "Candice"],
    ["220401", "220402", "220403"],
    ["0812345678", "0812345687", "0812345665"]
];
echo "<pre>";
print_r($mahasiswa);
echo "</pre>";
echo "<br>";

array_push($mahasiswa,
    ["Daniel", "220404", "0812345611"],
    ["Elena", "220405", "0812345622"],
    ["Fiona", "220406", "0812345633"],
    ["Gabe", "220407", "0812345644"],
    ["Hannah", "220408", "0812345655"]
);
echo "<pre>";
print_r($mahasiswa);
echo "</pre>";
echo "<br>";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Name</th>
			<th>NIM</th>
			<th>Mobile</th>
		</tr>
		<tr>
			<td><?=$mahasiswa[0][0]?></td>
			<td><?=$mahasiswa[0][1]?></td>
			<td><?=$mahasiswa[0][2]?></td>
		</tr>
		<tr>
			<td><?=$mahasiswa[1][0]?></td>
			<td><?=$mahasiswa[1][1]?></td>
			<td><?=$mahasiswa[1][2]?></td>
		</tr>
		<tr>
			<td><?=$mahasiswa[2][0]?></td>
			<td><?=$mahasiswa[2][1]?></td>
			<td><?=$mahasiswa[2][2]?></td>
		</tr>
		<tr>
			<td><?=$mahasiswa[3][0]?></td>
			<td><?=$mahasiswa[3][1]?></td>
			<td><?=$mahasiswa[3][2]?></td>
		</tr>
		<tr>
			<td><?=$mahasiswa[4][0]?></td>
			<td><?=$mahasiswa[4][1]?></td>
			<td><?=$mahasiswa[4][2]?></td>
		</tr>
		<tr>
			<td><?=$mahasiswa[5][0]?></td>
			<td><?=$mahasiswa[5][1]?></td>
			<td><?=$mahasiswa[5][2]?></td>
		</tr>
		<tr>
			<td><?=$mahasiswa[6][0]?></td>
			<td><?=$mahasiswa[6][1]?></td>
			<td><?=$mahasiswa[6][2]?></td>
		</tr>
		<tr>
			<td><?=$mahasiswa[7][0]?></td>
			<td><?=$mahasiswa[7][1]?></td>
			<td><?=$mahasiswa[7][2]?></td>
		</tr>
	</table>
</body>
</html>
