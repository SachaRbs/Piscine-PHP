<?php
if ($_GET['action'] == "set") {
	if ($_GET['name'] && $_GET['value']) {
		setcookie($_GET['name'], $_GET['value']);
	}
}
else if ($_GET['action'] == "get") {
	if ($_GET['name'] && $_COOKIE[$_GET['name']]) {
		echo $_COOKIE[$_GET['name']]."\n";
	}
}
	else if ($_GET['action'] == "del") {
	if ($_GET['name'] && !$_GET['value']) {
		setcookie($_GET['name'], '', 1);
	}
}
?>
954ef2a9e618b60487c20d52d6086f1c

bonjourewfjwg204f