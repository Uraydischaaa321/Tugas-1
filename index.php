<?php 

include "Animal.php";

$lula = new Kucing;
$lula->jumlah_kaki = 4;
echo "Lula Adalah Kucing <br>";
echo "punya kaki sebanyak : ".$lula->jumlah_kaki."<br>";
echo $lula->bisa_terbang."<br>";
echo "Suaranya : ";$lula->bersuara()."<br>";

echo "<hr>";

$doggi = new anjing;
$doggi->jumlah_kaki = 4;
echo "Doggi adalah Anjing <br>";
echo "punya kaki sebanyak : ".$doggi->jumlah_kaki."<br>";
echo $doggi->bisa_terbang."<br>";
echo "Suaranya : ";$doggi->bersuara()."<br>";

echo "<hr>";

$Zya = new Elang;
$Zya->jumlah_kaki = 2;
echo "Zya Adalah Elang <br>";
echo "punya kaki sebanyak : ".$Zya->jumlah_kaki."<br>";
echo $Zya->bisa_terbang."<br>";
echo "Suaranya : ";$Zya->bersuara()."<br>";

echo "<hr>";

$lala = new Angsa;
$lala->jumlah_kaki = 2;
echo "Lala Adalah Angsa <br>";
echo "punya kaki sebanyak : ".$lala->jumlah_kaki."<br>";
echo $lala->bisa_terbang."<br>";
echo "Suaranya : ";$lala->bersuara()."<br>";

echo "<hr>";