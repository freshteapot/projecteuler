<?php
$xml = '<?xml version="1.0" encoding="UTF-8"?>';
$xml .= '<numbers>';
$size = 1000;
for ($i=1;$i<$size;$i++)
{
	$xml .= "<number>{$i}</number>"; 
}
$xml .= '</numbers>';
file_put_contents('./data.xml',$xml);