#!/usr/bin/php
<?
function sort_tab($tab)
{
	unset($tab[0]);
	$tab_num = array();
	$tab_alpha = array();
	$tab_other = array();
	foreach ($tab as &$elem)
	{
		if (is_numeric($elem[0]))
		array_push($tab_num, $elem);
		else if(ctype_alpha($elem[0]))
		array_push($tab_alpha, $elem);
		else
		array_push($tab_other, $elem);
	}
	usort($tab_alpha, 'strnatcasecmp');
	sort($tab_num);
	sort($tab_other);
	$tab = array_merge($tab_alpha, $tab_num, $tab_other);
	return ($tab);
}

function ft_split_sort($str)
{
	$tab = array_filter(explode(" ", $str));
	$tab = sort_tab($tab);
	return ($tab);
}

$str = implode(" ", $argv);
$tab = ft_split_sort($str);
// print_r($tab);
foreach ($tab as &$elem)
	echo $elem."\n";

# trie des nombres ??
?>