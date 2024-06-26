<?php


class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

        
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak( $produk ) {
        $str = "{$produk->judul} | {$prduk->getLabel()} (Rp. {$produk->harga})";
        return $str;
        
    }
}




// $produk1 = new Produk();
// $produk1->judul = "Naruto";  
// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk3  = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . produk2->getLabel();
echo "<br>";

$infoProduk = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

?>