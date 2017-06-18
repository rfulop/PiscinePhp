<?php
	session_start();
	if ($_GET['page'] === NULL)
		header("refresh: 0;url=install.php");
	
	require_once("inc/header.inc.html");

	require_once("inc/title.inc.html");

	if ($_GET['page'] == 0)
		require_once("inc/login.inc.html");
	else if ($_GET['page'] == 1)
	{
		if (!$_SESSION["logged_on_user"] || !$_SESSION["logged_on_user"][0])
		{
			header("refresh: 0;url=index.php?page=0");
			echo "<br><br><br><br><br><br><br><br><br><br><br><br>ZZUUUUUUUUUT\n";
			exit ;
		}
		require_once("inc/logged.inc.php");
		// require_once("inc/visitors.inc.php");
	}
	else if ($_GET['page'] == 2)
	{
		if ($_SESSION["logged_on_user"])
		{
			if (file_exists("private") == FALSE || file_exists("private/users") == FALSE)
			{
				header("refresh: 0;url=index.php?page=0");
				echo "<br><br><br><br><br><br><br><br><br><br><br><br>MEEEEEEERDE\n";
				exit ;
			}
			$tab = unserialize(file_get_contents("private/users"));
			$match = 0;
			foreach ($tab as $elem)
			{
				if ($elem["login"] === $_SESSION["logged_on_user"] && $elem["priv"] === "admin")
            	{
					$match = 1;
					require_once("inc/logged.inc.php");
					// require_once("inc/admin.inc.php");
            	}
			}
			if ($match === 0)
			{
				header("refresh: 0;url=index.php?page=0");
				echo "<br><br><br><br><br><br><br><br><br><br><br><br>MEEEEEEERDE\n";
				exit ;
			}
		}
	}
	require_once("inc/footer.inc.html");
?>