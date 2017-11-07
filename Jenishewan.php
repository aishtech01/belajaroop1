<?php
include 'Hewan.php';

Class Jenishewan  extends Hewan{
	public function mamalia($mamalia= "Mamalia")
	{
		echo "Jenis Hewan : " . $mamalia;
	}


	public function ampibi($ampibi= "Ampibi")
	{
		echo "Jenis Hewan : " . $ampibi;
	}


	public function reptil($reptil= "Reptil")
	{
		echo "Jenis Hewan : " . $reptil;
	}
}