<?php
	session_start();
	echo "<div class=\"logged\"><h2><font color=\"white\">Bonjour ".$_SESSION['logged_on_user']."</font></h2></p><br /></div>";
	echo "<a class=\"gest\" href=\"handle_account.php\"><font color=\"grey\">Gestion du compte</font></a><br />";
	echo "<a class=\"deco\" href=\"logout.php\"><font color=\"grey\">Déconnexion</font></a>";
?>
