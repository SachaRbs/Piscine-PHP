#!/usr/bin/php
<?
function ft_split($str)
{
	$tab = array_filter(explode(" ", $str));
	sort($tab);
	return ($tab);
}
$str = implode(" ", $argv);
$tab = ft_split($str);
$nb = count($tab);
for ($i = 1;$i < $nb;$i++)
	echo $tab[$i]."\n";
?>