<?php
if ($_GET['action'] == "set")
	set_cookie($_GET['name'], $_GET['value']);
if ($_GET['action'] == "get" && $_GET['name'])
	echo $_COOKIE[$_GET['name']]."\n";
if ($_GET['action'] == "del")
	set_cookie($_GET['name'], "", -3600);
?>

