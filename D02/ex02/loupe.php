#!/usr/bin/php
<?php
if ($argc < 2 || !file_exists($argv[1]))
	exit();

function fct_1($matches)
{
	// print_r($matches);
	// return ($matches[0]);
	$matches[0] = preg
}

function fct_2($matches)
{
	print_r($matches);
	return ($matches[0]);
}

$src = fopen($argv[1], 'r');
$page = "";
while ($src && !feof($src))
	$page .= fgets($src);

echo $page."\n\n";
$page = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a)/si", "fct_1", $page);
echo $page;