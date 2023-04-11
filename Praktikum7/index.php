<?php

class Tes{

}

$a = new Tes();

class Mobil{
    public $nama,
            $merk,
            $warna;

    public function tambahKecepatan(){

    }
    
    public function kurangKecepatan(){

    }
}

class produk{
    public  $nama = 'ini sama',
            $jenis = 'ini jenis',
            $harga = 999999;

    public function __construct($nama ,$jenis, $harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }

    public function printHarga(){
        return $this->harga;
    }
}


// $produk1 = new Produk();
// $produk1->nama = 'Hoodie';
// $produk1->jenis = 'Jaket';

$produk2 = new Produk("Baju Hitam Polos", "Kaos", 15000);

// $produk2->nama = 'Baju Hitam Polos';
// $produk2->jenis = 'Kaos';
// $produk2->harga = 15000;
// $produk2->tambahProperti = "CONTOH";



echo "Produk 2 : $produk2->nama, $produk2->jenis";
echo "<br>";
echo "Harga : " .$produk2->printHarga();

?>