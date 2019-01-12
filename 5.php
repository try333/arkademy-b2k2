<?php 
jumlah(orang(6));

function jumlah($x)
{
	echo $x;
}

function orang($jml)
{
	$total = 0;
	for ($i=0; $i < $jml; $i++) { 
		$total = $total + $i;
	}
	return $total;
}

