#!/usr/bin/php
<?php
while (1)
{
	echo "Entrez un nombre: ";
	$rep = trim(fgets(STDIN));
	if (feof(STDIN))
		exit ();
	if (!(is_numeric($rep)))
		echo "'$rep' n'est pas un chiffre\n";
	else
	{
		if ($rep % 2)
			echo "Le chiffre $rep est Impair\n";
		else
			echo "Le chiffre $rep est Pair\n";
	}
}
?>
