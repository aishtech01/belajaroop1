<?php
include 'Kucing.php';

Class Katak extends Kucing {
	public function setkatak($nama="katak")
	{
		echo "Nama Hewan : " . $nama;
	}

	public function setkaki($kaki = "4")
	{
		echo "Jumlah kaki : " . $kaki;
	}

	public function setmakan($makan = "lumut")
	{
		echo "Makanan : " . $makan;
	}

	public function setwarna($warna = "hijau tua")
	{
		echo "Warna Bulu : " . $warna;
	}

	public function setdeskripsi($deskripsi = "biasa berenang di sawah")
	{
		echo "Deskripsi : " . $deskripsi;
	}
}