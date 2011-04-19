<?php
function multiple($is, $of)
{
	$r = $is / $of;
	return is_int($r);
}


//$numbers = array();
$size = 1000;

$total = 0;
for ($i=1;$i<$size;$i++)
{
	if (multiple($i,3) || multiple($i,5))
	{
//		$numbers[] = $i;
		$total += $i;
	}
}
//print_r($numbers);
echo $total . "\n";