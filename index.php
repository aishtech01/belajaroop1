<?php
include 'Hewan3.php';

 $hewan1 = new Hewan1();
 echo $hewan1->kucing()."<br>";
 echo $hewan1->setMamalia()."<br>";
 

 echo "================"."<br>";

 $hewan2 = new Hewan2();
 echo $hewan2->katak()."<br>";
 echo $hewan2->setAmpibi()."<br>";

 echo "================"."<br>";

 $hewan3 = new Hewan3();
 echo $hewan3->ular()."<br>";
 echo $hewan3->setReptil()."<br>";
 