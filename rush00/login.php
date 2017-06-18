<?php
	include("auth.php");
	session_start();
	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] === "OK")
	{
		if (file_exists("private") == FALSE || file_exists("private/users") == FALSE)
		{
			header("Location: create.html");
			exit ;
		}
		if (auth($_POST["login"], $_POST["passwd"]) === 0)
		{
			$_SESSION['logged_on_user'] = "";
			header("Location: index.php?page=0");
			exit ;
		}
		else if (auth($_POST["login"], $_POST["passwd"]) === 1)
		{
			$_SESSION['logged_on_user'] = $_POST["login"];
			header("Location: index.php?page=1");
			exit ;
		}
		else if (auth($_POST["login"], $_POST["passwd"]) === 2)
		{
			$_SESSION['logged_on_user'] = $_POST["login"];
			header("Location: index.php?page=2");
			exit ;
		}
	}
	else
	{
		header("Location: index.php?page=0");
		exit ;
	}
?>