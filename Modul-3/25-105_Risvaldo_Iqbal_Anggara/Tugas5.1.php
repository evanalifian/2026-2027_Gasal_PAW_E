<?php
$Mahasiswa = [['Alex', '220401', '0812345678'], ['Bianca', '220402', '0812345687'], ['Candice', '220403', '0812345665']];
echo 'Data Awal : ';
echo('<br>');
print_r($Mahasiswa);
echo('<br>');

$Mahasiswa[][] = ['Daniel', '220404', '081235611'];
$Mahasiswa[][] = ['Elena', '220405', '081235622'];
$Mahasiswa[][] = ['Fiona', '220406', '081235633'];
$Mahasiswa[][] = ['Gabe', '220407', '081235644'];
$Mahasiswa[][] = ['Hannah', '220408', '081235655'];

echo('<br>');
echo 'Data Setelah Ditambah : ';
echo('<br>');
print_r($Mahasiswa);
echo('<br>');