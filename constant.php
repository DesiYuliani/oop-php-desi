<?php 

//define('NAMA', 'Desi Yuliani');
//echo NAMA;

//echo "<br>";

//const UMUR = 17;
//echo UMUR;

//class Coba {
//	const NAMA = 'Desi';
//}

//echo Coba::NAMA;

// FUNCTION Coba() {
//	return __FUNCTION__;
//}

//echo coba();

class Coba {
	public $kelas = __CLASS__;

}

$obj = new Coba;
echo $obj->kelas;






 ?>