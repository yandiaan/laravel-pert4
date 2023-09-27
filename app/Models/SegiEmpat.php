<?php
namespace App\Models;
/***************************
Membuat kelas SegiEmpat
***************************/
class SegiEmpat
{
 public $panjang;
 public $lebar;
 /**********************************
 // method menghitung luas segi empat
 **********************************/
 public function luas()
 {
 return $this->panjang * $this->lebar;
 }

 /*****************************************
 // method menghitung keliling segi empat
 ******************************************/
 public function keliling()
 {
 return 2*($this->panjang + $this->lebar);
 }
}
