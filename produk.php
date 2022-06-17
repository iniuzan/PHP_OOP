<?php 
//jualan produk Komik and game

class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit, $this->judul,$this->harga";
    }
}
// $produk1 = new Produk();
// $produk1->judul = "Naruto";

// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Clash Of Clans";
// $produk2->tambahdata = "oke tambahkan data ";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul="Naruto";
$produk3->penulis="Masashi kishimoto";
$produk3->penerbit="Shonen Jump";
$produk3->harga=20000;


echo "<br>";
echo "Komik: " .$produk3->getLabel();

echo "<hr>";


$produk4 = new Produk();
$produk4->judul="Medal Of Honor";
$produk4->penulis="MOH";
$produk4->penerbit="EA";
$produk4->harga=50000;

echo "Game: " . $produk4->getLabel()
?>