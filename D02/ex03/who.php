#!/usr/bin/php
<?php

$last = shell_exec("last");
$tab = explode("\n", $last);
$logged = array();
foreach ($tab as $elem)
    if ((preg_match("/still logged in$/", $elem)) == 1)
        array_push($logged, $elem);
sort($logged);
foreach ($logged as $elem)
{
    $line = explode(" ", preg_replace('/\s{2,}/', ' ', $elem));
    echo str_pad($line[0], 9, " ");
    echo str_pad($line[1], 9, " ");
    echo str_pad($line[3], 4, " ");
    echo $line[4]." ";
    echo $line[5];
    echo "\n";
}
?>