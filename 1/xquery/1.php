<?php
/*
 * use php make.data.php to generate the xml.
 * 
 * xmllint --format data.xml if you want to see it pretty.
 * 
 * For more "xmllint --help"
 */


/*
 * This was aborted using php and xpath as php only supports xquery 1.0
 * 
 * xquery 1.0 doesn't support many of the maths functions which xpath2 supports.
 * 
 * The w3c document is a little misleading. Read the fine print (xquery 1 & xpath2 functions ... thats the key)
 * 
 * I have left this here, as I at least hope the division in xquery 1.0 is fun to see that you can do in php.
 */

$data = file_get_contents('./data.xml');
$dom = new DomDocument('1.0');
$dom->loadXML($data);

$xpath = new DomXpath($dom);

$queries = array(
	'*' => '//number'
);

$nodeList = $xpath->query($queries['*']);

foreach ($nodeList as $node)
{
	echo $xpath->evaluate('number(. div 3)',$node) . "\n";	
}