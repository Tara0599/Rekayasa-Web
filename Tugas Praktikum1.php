<?php
// membuat variabel JSON
$json = '{"nama": "Tara", "umur": 24, "kota": "Semarang"}';

// decode JSON menjadi PHP object
$obj = json_decode($json);

// decode JSON menjadi PHP array
$arr = json_decode($json, true);

// akses nilai dari hasil decode PHP object
echo "Nama (dari object): " . $obj->nama . "<br>";
echo "Umur (dari object): " . $obj->umur . "<br>";
echo "Kota (dari object): " . $obj->kota . "<br>";

// akses nilai dari hasil decode PHP array
echo "Nama (dari array): " . $arr['nama'] . "<br>";
echo "Umur (dari array): " . $arr['umur'] . "<br>";
echo "Kota (dari array): " . $arr['kota'] . "<br>";