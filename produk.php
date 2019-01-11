<?php 

class produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

$produk3 = new produk();
$produk3->judul = "Doraemon";
$produk3->penulis = "Nobuyuki Fujimoto";
$produk3->penerbit = "Shogakukan";
$produk3->harga = 39000;

$produk4 = new produk();
$produk4->judul = "uncharted";
$produk4->penulis = "neil druckman";
$produk4->penerbit = "sony computer";
$produk4->harga = 250000;

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk4->getLabel();