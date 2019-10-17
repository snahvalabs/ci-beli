<?php

function predikat_nilai($nilai){
	if($nilai>0 && $nilai<101){
		if($nilai>84){
			$predikat='A';
		}elseif($nilai>74 && $nilai<85){
			$predikat='B';
		}elseif($nilai>64 && $nilai<75){
			$predikat='C';
		}elseif($nilai>54 && $nilai<65){
			$predikat='D';
		}elseif($nilai>44 && $nilai<55){
			$predikat='E';
		}else{
			$predikat='F';
		}
	}else{
		$predikat= "Nilai Tidak Valid";
	} //endif	

	echo "Nilai : ".$nilai." mendapatkan Predikat ".$predikat;
}

predikat_nilai(0);	

?> 