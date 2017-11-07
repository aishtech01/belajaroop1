<?php
include 'Hewan.php';

Class Mamalia extends Binatang{
	public function setMamalia($mamalia= "Mamalia")
	{
		echo "Jenis Hewan : " . $mamalia;
	}

	public function setgerak($gerak= "Berjalan")
	{
		echo "Bergerak dengan cara : " . $gerak;
	}

	public function setjenis($jenis= "Herbivora, Karnivora")
	{
		echo "Jenis Hewan : " . $jenis;
	}

	public function sethabitat($habitat= "Darat dan Air")
	{
		echo "Hidup di : " . $habitat;
	}

	public function setproduksi($produksi = "Melahirkan")
	{
		echo "Reproduksi dengan cara : " . $produksi;
	}
}
