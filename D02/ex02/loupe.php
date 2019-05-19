#!/usr/bin/php
<?php
if ($argc < 2 || !file_exists($argv[1]))
	exit();

function call_back($matches)
{
	$matches[0] = preg_replace_callback("/( title=\")(.*?)(\")mi/", "upper", $matches[0]);
	$matches[0] = preg_replace_callback("/(>)(.*?)(<)/si", "upper", $matches[0]);
	return ($matches[0]);
}

function upper($matches)
{
	return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
}
$src = fopen($argv[1], 'r');
$page = "";
while ($src && !feof($src))
	$page .= fgets($src);
$page = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a)/si", "call_back", $page);
echo $page;