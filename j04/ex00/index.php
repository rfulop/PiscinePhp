<?php

session_start();
if ($_GET["submit"] == strip_tags("OK") && $_GET["login"] && $_GET["passwd"])
{
  $_SESSION["login"] = $_GET["login"];
  $_SESSION["passwd"] = $_GET["passwd"];
}

?>

<html><body>
<form method="GET" action "index.php">
  Identifiant: <input type="text" name="login" value="<?php echo $_SESSION["login"]; ?>" />
  Mot de passe: <input type="password" name="passwd" value="<?php echo $_SESSION["passwd"]; ?>" />
  <input type="submit" name="submit" value="OK"/>
</form>
</body></html>
