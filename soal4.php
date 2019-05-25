<?php

cetak_gambar(5);		

function cetak_gambar($baris){
	if ($baris%2 != 0){
		$tengah = ($baris + 1) / 2;
		for ($i=1; $i <= $baris ; $i++) { 
			for ($j=1; $j <= $baris; $j++) { 
				if ($i == 1 || $j == $tengah || $i == $baris) {
					echo "* ";
				}else{
					echo "= ";
				}
			}
			echo '<br>';
		}
	}else{
		echo "angka genap tidak diperbolehkan";
	}	
}