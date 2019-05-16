#!/usr/bin/php
<?
$chaine = $argv[1];
$chaine = trim($chaine);
$chaine = str_replace("\t"," ",$chaine);
$chaine = preg_replace('/\s{2,}/', ' ', $chaine);
echo $chaine;
?>