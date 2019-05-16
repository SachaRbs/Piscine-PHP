#!/usr/bin/php
<?
if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	exit();
}
$nb1 = trim($argv[1]);
$nop = trim($argv[2]);
$nb2 = trim($argv[3]);
switch (trim($argv[2], " \t"))
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
}
echo "\n";
?>