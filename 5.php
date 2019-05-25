<?php
ganti_kata('jakarta','a','i');

function ganti_kata($kata,$old,$new){
	$print = '';
	$kata = str_split($kata);
	for ($i = 0; $i < count($kata); $i++) { 
		if ($kata[$i] == $old) {
			$print = $print.$new;
		}else{
			$print = $print.$kata[$i];
		}
	}

	echo $print;
}
