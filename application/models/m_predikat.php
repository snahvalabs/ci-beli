<?php

Class M_Predikat extends CI_Model {

	public function getPredikat($nilai){
		$predikat="";
		if (is_int($nilai)){
			if($nilai<=100 && $nilai>=85){
				$predikat = "A";
			}elseif($nilai<=84&& $nilai>=75){
				$predikat = "B";
			}elseif($nilai<=74&& $nilai>=65){
				$predikat = "C";
			}elseif($nilai<=64&& $nilai>=55){
				$predikat = "D";
			}elseif($nilai<=54&& $nilai>=45){
				$predikat = "E";
			}elseif($nilai<=44&& $nilai>=0){
				$predikat = "F";
			}else{
				$predikat = "INVALID";
			}
		}else{
			$predikat = "INVALID";
		}



		return $predikat;
	}
}
?>