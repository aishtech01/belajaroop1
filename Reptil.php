<?php
include 'Mamalia.php';

Class Reptil  extends Mamalia {
	public function setReptil($reptil= "Reptil")
	{
		echo "Jenis Hewan : " . $reptil;
	}

	public function setgerak($gerak= "Merayap")
	{
		echo "Bergerak dengan cara : " . $gerak;
	}

	public function setjenis($jenis= "Karnivora")
	{
		echo "Jenis Hewan : " . $jenis;
	}

	public function sethabitat($habitat= "Darat dan Air")
	{
		echo "Hidup di : " . $habitat;
	}

	public function setproduksi($produksi = "Bertelur, Melahirkan")
	{
		echo "Reproduksi dengan cara : " . $produksi;
	}


}

