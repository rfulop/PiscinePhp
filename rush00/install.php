<?php
		if (file_exists("private") == FALSE)
			mkdir("private", 0700);
		if (file_exists("private/users") == FALSE)
		{
			$new_admin["login"] = "admin";
			$new_admin["priv"] = "admin";
			$new_admin["passwd"] = hash("sha512", hash("whirlpool", "admin").hash("sha256", "securepassword"));
			$tab[] = $new_admin;
			file_put_contents("private/users", serialize($tab));
		}
		if (file_exists("private/commodity") == FALSE)
		{
			$new_object["name"] = "child";
			$new_object["price"] = "5223";
			$new_object["type"] = "classic";
			$new_object["pic"] = "http://cdn-femina.ladmedia.fr/var/femina/storage/images/famille/enfant/mode-enfants-de-l-ete-2011-toutes-les-tendances/mode-enfants-de-l-ete-tous-les-looks/kiabi2/3294391-1-fre-FR/Kiabi_current_new_diaporama.jpg";
			file_put_contents("private/commodity", serialize($tab));			
		}
		header("Location: index.php?page=0");
?>