<?php
include 'Ampibi.php';

/**
Polymorphism dari class Ampibi

**/

Class Kucing extends Ampibi {
	public function ketkucing($nama = "kucing")
	{
		echo "Nama Hewan : " . $nama;
	}

	public function jumlahkaki($kaki = "4")
	{
		echo "Jumlah kaki : " . $kaki;
	}

	public function makan($makan = "ikan")
	{
		echo "Makanan : " . $makan;
	}

	public function warna($warna = "hitam, putih, abu")
	{
		echo "Warna Bulu : " . $warna;
	}

	public function deskripsi($deskripsi = "Memiliki mata yg menyala pada malam hari")
	{
		echo "Deskrips " . $deskripsi;
	}
}