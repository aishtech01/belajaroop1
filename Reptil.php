<?php
include 'Mamalia.php';

/**
Polymorphism dari class Mamalia

**/

Class Reptil  extends Mamalia {
	public function ketReptil($reptil= "Reptil")
	{
		echo "Jenis Hewan : " . $reptil;
	}

	public function gerak($gerak= "Merayap")
	{
		echo "Bergerak dengan cara : " . $gerak;
	}

	public function jenis($jenis= "Karnivora")
	{
		echo "Jenis Hewan : " . $jenis;
	}

	public function habitat($habitat= "Darat dan Air")
	{
		echo "Hidup di : " . $habitat;
	}

	public function produksi($produksi = "Bertelur, Melahirkan")
	{
		echo "Reproduksi dengan cara : " . $produksi;
	}


}

