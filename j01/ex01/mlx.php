#!/usr/bin/php
<?php
$a = 0;
while ($a < 1000)
{
	if ($a % 80 == 0 && $a)
		echo("\n");
	echo("X");
	$a++;
}
echo("\n");
?>
