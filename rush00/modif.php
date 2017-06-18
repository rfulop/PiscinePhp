<?php
	if ($_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"] === "Enregistrer")
	{
		if (file_exists("private") == FALSE || file_exists("private/users") == FALSE)
		{
			header("Location: index.php?page=0");
			exit ;
		}
		$tab = unserialize(file_get_contents("private/users"));
		$err = 0;
        $H = hash("sha512", hash("whirlpool", $_POST["login"]).hash("sha256", $_POST['oldpw']));
		foreach ($tab as $key => $elem)
		{
			if ($elem["login"] === $_POST["login"])
			{
				$err = 1;
                $K = $key;
				break ;
			}
		}
		if ($err === 1 && ($tab[$K]["passwd"] === $H))
		{
			$tab[$K]["passwd"] = hash("sha512", hash("whirlpool", $_POST["login"]).hash("sha256", $_POST['newpw']));
			file_put_contents("private/users", serialize($tab));
		}
	}
	header("Location: index.php?page=0");
?>
