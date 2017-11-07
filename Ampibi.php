<?php
include 'Reptil.php';

Class Ampibi extends Reptil{
	public function setAmpibi($ampibi= "Ampibi")
	{
		echo "Jenis Hewan : " . $ampibi;
	}

	public function setgerak($gerak= "Merangkak")
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

	public function setproduksi($produksi = "Melahirkan, Bertelur")
	{
		echo "Reproduksi dengan cara : " . $produksi;
	}
}
