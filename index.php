<?php
include 'Ular.php';

 $hewan1 = new Kucing();
 echo $hewan1->ketkucing(). "<br>";
 echo $hewan1->jumlahkaki(). "<br>";
 echo $hewan1->makan(). "<br>";
 echo $hewan1->warna(). "<br>";
 echo $hewan1->deskripsi(). "<br>";
 echo "*****************<br>";
 echo $hewan1->ketMamalia(). "<br>";
 echo $hewan1->ketReptil(). "<br>";
 echo $hewan1->gerak(). "<br>";
 echo $hewan1->jenis(). "<br>";
 echo $hewan1->habitat(). "<br>";
 echo $hewan1->produksi(). "<br>";

 echo "================"."<br>";

 $hewan2 = new Katak();
 echo $hewan2->ketkatak()."<br>";
 echo $hewan2->jumlahkaki(). "<br>";
 echo $hewan2->makan(). "<br>";
 echo $hewan2->warna(). "<br>";
 echo $hewan2->deskripsi(). "<br>";
 echo "*****************<br>";
 echo $hewan2->ketAmpibi(). "<br>";
 echo $hewan2->gerak(). "<br>";
 echo $hewan2->jenis(). "<br>";
 echo $hewan2->habitat(). "<br>";
 echo $hewan2->produksi(). "<br>";

 echo "================"."<br>";

 $hewan3 = new Ular();
 echo $hewan3->ketular()."<br>";
 echo $hewan3->jumlahkaki(). "<br>";
 echo $hewan3->makan(). "<br>";
 echo $hewan3->warna(). "<br>";
 echo $hewan3->deskripsi(). "<br>";
 echo "*****************<br>";
 echo $hewan3->ketReptil()."<br>";
 echo $hewan3->gerak(). "<br>";
 echo $hewan3->jenis(). "<br>";
 echo $hewan3->habitat(). "<br>";
 echo $hewan3->produksi(). "<br>";
 