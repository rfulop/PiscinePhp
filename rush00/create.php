<?php
	header("Location: index.php?page=0");
	if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"] === "Enregistrer")
	{
		if (file_exists("private") == FALSE)
			mkdir("private", 0755);
		if (file_exists("private/users") == FALSE)
		{
			$new_admin["login"] = "admin";
			$new_admin["priv"] = "admin";
			$new_admin["passwd"] = hash("sha512", hash("whirlpool", "admin").hash("sha256", "securepassword"));
			$tab[] = $new_admin;
			file_put_contents("private/users", serialize($tab));
		}
		$tab = unserialize(file_get_contents("private/users"));
		$fd = fopen("private/users", "r+");
		flock($fd, LOCK_EX);
		$err = 0;
		foreach ($tab as $elem)
		{
			if ($elem["login"] == $_POST["login"])
				$err = 1;
		}
		if ($err === 0)
		{
			$new_elem["login"] = $_POST['login'];
			$new_elem["priv"] = "visitor";
			$new_elem["passwd"] = hash("sha512", hash("whirlpool", $_POST["login"]).hash("sha256", $_POST['passwd']));
			$tab[] = $new_elem;
			file_put_contents("private/users", serialize($tab));
		}
		flock($fd, LOCK_EX);
		fclose($fd);
	}
?>
