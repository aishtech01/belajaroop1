<?php
include 'Hewan.php';

Class Makan extends Hewan  {
	public $populasi;

	public function Jenis($jenis="Herbivora")  
	{
		echo "Jenis Hewan : " . $jenis;
	}

	public function populasi($populasi="Darat")  
	{
		echo $populasi;
	}

	public function Bergerak($gerak = "Berjalan")  
	{
		echo "Bertahan hidup dengan : " . $gerak;
	}

}

