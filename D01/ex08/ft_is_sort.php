#!/usr/bin/php
<?
	function ft_is_sort($tab)
	{
		$tab1 = $tab;
		sort($tab1);
		if (array_diff_assoc($tab, $tab1) == null)
            return true;
        return false;
	}	
?>