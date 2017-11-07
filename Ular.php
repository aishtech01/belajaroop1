<?php
include 'Katak.php';

Class Ular extends Katak  {
	public function setular($nama="ular")
	{
		echo "Nama Hewan : " . $nama;
	}

	public function setkaki($kaki = "Tidak mempunyai kaki")
	{
		echo "Jumlah kaki : " . $kaki;
	}

	public function setmakan($makan = "ayam, tikus, dll")
	{
		echo "Makanan : " . $makan;
	}

	public function setwarna($warna = "hitam, abu, belang")
	{
		echo "Warna Bulu : " . $warna;
	}

	public function setdeskripsi($deskripsi = "mempunyai bisa")
	{
		echo "Deskripsi : " . $deskripsi;
	}
}