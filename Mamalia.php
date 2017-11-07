<?php
include 'Makan.php';

class Mamalia extends Makan  {
	public function __construct($produksi = "Melahirkan")  
	{
		echo "Reproduksi dengan cara : " . $produksi ."<br>";
	}

	public function nama($nama = "Kucing")
	{
		echo "Nama hewan : ". $nama;
	}



	public function populasi($populasi = "Darat")  
	{
		echo "Hidup di : " . $populasi;
	}

}
	
	