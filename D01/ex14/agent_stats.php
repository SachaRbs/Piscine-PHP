#!/usr/bin/php

<?php
// if ($argc < 3)
// 	exit();
$user = array();
$list = array();
$stdin = fopen("php://stdin", "r");
while ($stdin && !feof($stdin)) {
	$tmp = explode(";", fgets($stdin));
	if (count($tmp) == 4) {
		$list[] = $tmp;
		if (!array_key_exists($tmp[0], $user)) {
			$user[$tmp[0]]['total'] = 0;
			$user[$tmp[0]]['count'] = 0;
			$user[$tmp[0]]['moulinette'] = 0;
		}
	}
}
if ($argv[1] == "moyenne")
{
	$total = 0;
	$i = 0;
	foreach ($list as &$elem)
	{
		if (elem[2] !== "moulinette" && $elem[1] !== "")
		{
			$total += $elem[1];
			$i++;
		}
	}
	echo ($total / $i)."\n";
}
else if ($argv[1] == "moyenne_user" || $argv[1] == "ecart_moulinette")
{
	foreach ($list as $line)
	{
		if ($line[2] !== "moulinette" && $line[1] != "")
		{
			$user[$line[0]]['count'] += 1;
			$user[$line[0]]['total'] += $line[1];
		}
		else if ($line[2] == "moulinette")
			$user[$line[0]]['moulinette'] = $line[1];
	}
	if ($argv[1] == "moyenne_user")
		foreach ($user as $usr => $res)
			echo $usr.":".($res['total'] / $res['count'])."\n";
	else
		foreach ($user as $usr => $res)
			echo $usr.":".($res['total'] / $res['count'] - $res['moulinette'])."\n";
}
fclose($stdin);
?>
