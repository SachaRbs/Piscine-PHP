#!/usr/bin/php
<?
if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	exit();
}
$calcule = str_replace(" ", "", $argv[1]);
$nb1 = intval($calcule);
$op = substr(substr($calcule, strlen((string)$nb1)), 0, 1);
$nb2 = substr(substr($calcule, strlen((string)$nb1)), 1);
if (!is_numeric($nb1) || !is_numeric($nb2))
{
	echo "Syntax Error\n";
	exit();
}
switch ($op)
{
	case("*") :
		echo trim($nb1, " \t") * trim($nb2, " \t");
		break;
	case("/") :
		echo trim($nb1, " \t") / trim($nb2, " \t");
		break;
	case("+") :
		echo trim($nb1, " \t") + trim($nb2, " \t");
		break;
	case("-") :
		echo trim($nb1, " \t") - trim($nb2, " \t");
		break;
	case("%") :
		echo trim($nb1, " \t") % trim($nb2, " \t");
		break;
	default :
		echo "Syntax Error\n";
		exit();
}
echo "\n";
?>