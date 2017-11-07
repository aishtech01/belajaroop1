<?php
include 'Hewan.php';

/**
Turunan dari class binatang

**/

Class Mamalia extends Binatang{
	public function ketMamalia($mamalia= "Mamalia")
	{
		echo "Jenis Hewan : " . $mamalia;
	}

	public function gerak($gerak= "Berjalan")
	{
		echo "Bergerak dengan cara : " . $gerak;
	}

	public function jenis($jenis= "Herbivora, Karnivora")
	{
		echo "Jenis Hewan : " . $jenis;
	}

	public function habitat($habitat= "Darat dan Air")
	{
		echo "Hidup di : " . $habitat;
	}

	public function produksi($produksi = "Melahirkan")
	{
		echo "Reproduksi dengan cara : " . $produksi;
	}
}
