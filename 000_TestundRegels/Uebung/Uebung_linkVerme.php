<?php
echo "<h1>GET Parametreleri </h1>";

echo "<h2> Linkler: </h2>";
echo "<a href='?aksiyon=selam&isim=Sait'>Selam Ver </a><br>";
echo "<a href='?aksiyon=Gule Gule&isim=Sait'>Güle Güle De </a><br>";
echo "<a href='?aksiyon=sil&id=5'>Ürün 5'i Sil</a><br>";

echo "<hr>";

echo "<h2>Gelen Parametreler:</h2>";
echo "<pre>";
print_r($_GET);
echo "</pre>";
echo "<hr>";
if(isset($_GET['aksiyon'])){
    $aksiyon = $_GET['aksiyon'];
    if($aksiyon == "selam"){
        $isim = $_GET['isim'] ?? 'Misafir';
        echo "<p style='color: green;'>👋 Merhaba! $isim </p>";
    }
}
if($aksiyon == "Gule Gule"){
    $isim = $_GET['isim'] ?? 'Misafir';
    echo "<p style='color: blue;'>👋 Güle güle $isim!</p>";
}
if($aksiyon == "sil"){
    $id = $_GET['id'];
    echo "<p style='color: red;'>🗑️ Ürün $id silindi!</p>";
}
?>