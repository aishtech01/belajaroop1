<?php
include 'Ampibi.php';

Class Kucing extends Ampibi {
	public function setkucing($nama = "kucing")
	{
		echo "Nama Hewan : " . $nama;
	}

	public function setkaki($kaki = "4")
	{
		echo "Jumlah kaki : " . $kaki;
	}

	public function setmakan($makan = "ikan")
	{
		echo "Makanan : " . $makan;
	}

	public function setwarna($warna = "hitam, putih, abu")
	{
		echo "Warna Bulu : " . $warna;
	}

	public function setdeskripsi($deskripsi = "Memiliki mata yg menyala pada malam hari")
	{
		echo "Deskripsi : " . $deskripsi;
	}
}