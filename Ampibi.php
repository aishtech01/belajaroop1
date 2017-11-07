<?php
include 'Reptil.php';

/**
Polymorphism dari class Reptil

**/

Class Ampibi extends Reptil{
	public function ketAmpibi($ampibi= "Ampibi")
	{
		echo "Jenis Hewan : " . $ampibi;
	}

	public function gerak($gerak= "Merangkak")
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

	public function produksi($produksi = "Melahirkan, Bertelur")
	{
		echo "Reproduksi dengan cara : " . $produksi;
	}
}
