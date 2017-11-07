<?php
include 'Kucing.php';

/**
Polymorphism dari class Kucing

**/

Class Katak extends Kucing {
	public function ketkatak($nama="katak")
	{
		echo "Nama Hewan : " . $nama;
	}

	public function jumlahkaki($kaki = "4")
	{
		echo "Jumlah kaki : " . $kaki;
	}

	public function makan($makan = "lumut")
	{
		echo "Makanan : " . $makan;
	}

	public function warna($warna = "hijau tua")
	{
		echo "Warna Bulu : " . $warna;
	}

	public function deskripsi($deskripsi = "biasa berenang di sawah")
	{
		echo "Deskripsi : " . $deskripsi;
	}
}