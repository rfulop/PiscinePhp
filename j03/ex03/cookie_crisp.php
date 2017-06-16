<?php
if ($_GET["action"] === strip_tags("set"))
	setcookie($_GET["name"], $_GET["value"]);
if ($_GET["action"] === strip_tags("get") && $_COOKIE[$_GET["name"]])
	echo $_COOKIE[$_GET["name"]]."\n";
if ($_GET["action"] === strip_tags("del"))
	setcookie($_GET["name"], "", time() -3600);
?>
