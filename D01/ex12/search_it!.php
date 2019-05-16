#!/usr/bin/php
<?
if ($argc < 3)
	exit();
$key = $argv[1];
$hash_table = array();
unset($argv[0]);
unset($argv[1]);
foreach ($argv as &$elem)
{
	$tab = explode(":", $elem);
	if ($key == $tab[0])
	{
		echo $tab[1]."\n";
		exit();
	}
}
?>