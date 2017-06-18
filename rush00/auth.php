<?php
	function    auth($login, $passwd)
	{
		if (file_exists("private") === FALSE || file_exists("private/users") === FALSE)
			return (0);
		$H = hash("sha512", hash("whirlpool", $login).hash("sha256", $passwd));
		$tab = unserialize(file_get_contents("private/users"));
		$match = 0;
		foreach ($tab as $elem)
		{
			if ($elem["login"] === $login && $elem["passwd"] === $H)
            {
                if ($elem["priv"] === "visitor")
				    return (1);
                else if ($elem["priv"] === "admin")
                    return (2);
            }
		}
		return (0);
	}
?>