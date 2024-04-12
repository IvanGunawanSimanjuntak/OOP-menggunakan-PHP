<?php
// Jualan Produk
// Komik
// Game

class Produk {
    public $judul = "Judul", 
    $penulis = "Penulis", 
    $penerbit = "Penerbit", 
    $harga = "0" ;

}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Watashi";
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Harry Potter";
$produk2->Penulis = "J.K Rowling";
var_dump($produk2);
?>