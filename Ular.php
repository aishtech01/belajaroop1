<?php
include 'Katak.php';

/**
Polymorphism dari class Katak

**/

Class Ular extends Katak  {
	public function ketular($nama="ular")
	{
		echo "Nama Hewan : " . $nama;
	}

	public function jumlahkaki($kaki = "Tidak mempunyai kaki")
	{
		echo "Jumlah kaki : " . $kaki;
	}

	public function makan($makan = "ayam, tikus, dll")
	{
		echo "Makanan : " . $makan;
	}

	public function warna($warna = "hitam, abu, belang")
	{
		echo "Warna Bulu : " . $warna;
	}

	public function deskripsi($deskripsi = "mempunyai bisa")
	{
		echo "Deskripsi : " . $deskripsi;
	}
}