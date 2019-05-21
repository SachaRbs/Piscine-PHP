#!/usr/bin/php
<?
if ($argc != 2)
{
	echo "Incorrect Parameters\n";
	exit();
}
$argv[1] = str_replace(" ", "", $argv[1]);
$nb1 = intval($argv[1]);
$op = substr(substr($argv[1], strlen($nb1)), 0, 1);
$nb2 = substr(substr($argv[1], strlen($nb1)), 1);
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