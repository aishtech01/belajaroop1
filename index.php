<?php
include 'Ular.php';

 $hewan1 = new Kucing();
 echo $hewan1->setkucing(). "<br>";
 echo $hewan1->setkaki(). "<br>";
 echo $hewan1->setmakan(). "<br>";
 echo $hewan1->setwarna(). "<br>";
 echo $hewan1->setdeskripsi(). "<br>";
 echo "*****************<br>";
 echo $hewan1->setMamalia(). "<br>";
 echo $hewan1->setReptil(). "<br>";
 echo $hewan1->setgerak(). "<br>";
 echo $hewan1->setjenis(). "<br>";
 echo $hewan1->sethabitat(). "<br>";
 echo $hewan1->setproduksi(). "<br>";

 echo "================"."<br>";

 $hewan2 = new Katak();
 echo $hewan2->setReptil()."<br>";
 echo $hewan2->setkaki(). "<br>";
 echo $hewan2->setmakan(). "<br>";
 echo $hewan2->setwarna(). "<br>";
 echo $hewan2->setdeskripsi(). "<br>";
 echo "*****************<br>";
 echo $hewan2->setgerak(). "<br>";
 echo $hewan2->setjenis(). "<br>";
 echo $hewan2->sethabitat(). "<br>";
 echo $hewan2->setproduksi(). "<br>";

 echo "================"."<br>";

 $hewan3 = new Ular();
 echo $hewan3->setular()."<br>";
 echo $hewan3->setkaki(). "<br>";
 echo $hewan3->setmakan(). "<br>";
 echo $hewan3->setwarna(). "<br>";
 echo $hewan3->setdeskripsi(). "<br>";
 echo "*****************<br>";
 echo $hewan3->setReptil()."<br>";
 echo $hewan3->setgerak(). "<br>";
 echo $hewan3->setjenis(). "<br>";
 echo $hewan3->sethabitat(). "<br>";
 echo $hewan3->setproduksi(). "<br>";
 