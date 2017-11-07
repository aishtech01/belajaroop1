<?php
include 'Macamhewan.php';

 $hewan1 = new Macamhewan();
 echo $hewan1->kucing()."<br>";
 echo $hewan1->mamalia()."<br>";
 echo $hewan1->jenis()."<br>";

 echo "================"."<br>";

 $hewan2 = new Macamhewan();
 echo $hewan2->katak()."<br>";
 echo $hewan2->ampibi()."<br>";

 echo "================"."<br>";

 $hewan3 = new Macamhewan();
 echo $hewan3->ular()."<br>";
 echo $hewan3->reptil()."<br>";
 