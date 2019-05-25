<?php
count_vowels('kata');

function count_vowels($kata){
	$hurufhidup = array('a','i','u','e','o');
	$kata = str_split($kata);
	$jumlah = 0;
	for ($i=0; $i < count($kata); $i++) { 
		for ($j=0; $j < count($hurufhidup); $j++) { 
			if ($kata[$i] == $hurufhidup[$j]) {
				$jumlah++;
			}
		}
	}

	echo $jumlah;
}
