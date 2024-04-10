<?php


class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

        
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman;
        $this->waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap {
        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }
}

class CetakInfoProduk {
    public function cetak( $produk ) {
        $str = "{$produk->judul} | {$prduk->getLabel()} (Rp. {$produk->harga})";
        if( $this->tipe == "Komik" ) {
          $str .= " - {$this->jmlHalaman} Halaman.";  
        } else if( $this->tipe == "Game") {
            $str .= " - {$this->waktuMain} Jam.";
        }

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

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

echo $pproduk1->getInfoLengkap;

// Komik : Masashi Kishimoto, Shonen Jump
// Game : Neil Druckmann, Sony Computer
// Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000)




?>