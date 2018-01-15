<?php
require_once("session.php");
	if ($_POST["login"] && $_POST["password"] && $_POST["mail"] && $_POST["submit"] === "OK")
	{
		if (!file_exists("dbs") || !file_exists("dbs/users"))
			exit ;
		$tab = unserialize(file_get_contents("dbs/users"));
		$err = 0;
		foreach ($tab as $user)
		{
			if ($user["login"] == $_POST["login"])
      {
				$err = 1;
        break;
      }
		}
    foreach ($tab as $user)
    {
      if ($user["mail"] == $_POST["mail"])
      {
        $err = 2;
        break;
      }
    }
		if (!$err)
		{
			$new_user["login"] = $_POST['login'];
			$new_user["priv"] = "user";
      $new_user["mail"] = $_POST['mail'];
			$new_user["password"] = hash("whirlpool", $_POST["password"]);
			$tab[] = $new_user;
			file_put_contents("dbs/users", serialize($tab));
      $_SESSION['login'] = $_POST['login'];
      $_SESSION['priv'] = 'user';
			header("Location: index.php");
		}
    else if ($err == 1){
      echo "Account already exists\n";
    }
    else if ($err == 2)
       echo "Email already used\n";
	}
?>
<html>
<?php include "header.php"; ?>
<body>
	<h1>Create account</h1>
		<form action="create_account.php" method="post">
					<input type="text" value="" placeholder="login" name="login">
					<label for="login"></label>
					<input type="Password" value="" placeholder="password" name="password">
					<label for="password"></label>
					<input type="text" value="" placeholder="mail" name="mail">
					<label for="mail"></label>
					<input type="submit" name="submit" value="OK" />
		</form>
  <body>
</html>
