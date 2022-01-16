<?php

$number=$_GET["proje"];
$database=$db_baglan->prepare("SELECT * FROM proje_detayi WHERE id=:deger");
$database->execute(array(':deger'=>$number));
$projem=$database->fetch(PDO::FETCH_ASSOC);


$Proje_isim= $projem['baslik'];
$proje_icerik= $projem['icerik'];
$proje_fotograf= $projem['fotograf'];

echo $proje_isim;
?>