#!/usr/bin/php
<?php
	if (!isset($argv[1]))
	{
		echo "You have to pass the password you want to hash as an argument.\n";
		return ;
	}
	$path = ".admin_account";
	if (!file_exists($path))
		file_put_contents($path, "");
	$mdp = hash('whirlpool', $argv[1]);
	$tmp[] = ['login' => "admin", 'password' => $mdp, 'priv' => "superadmin", 'mail' => "admin@shop.fr"];
	file_put_contents($path, serialize($tmp));
	echo "Your password as been hashed by wirlpool algorithm.\n";
?>
