<?Php
if (($_SERVER['PHP_AUTH_USER'] != strip_tags("zaz") || $_SERVER['PHP_AUTH_PW'] != strip_tags("jaimelespetitsponeys") ))
{
	header("WWW-Authenticate: Basic realm=''Espace membres''");
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
}
else
{
	$img_b64 = base64_encode(file_get_contents("../img/42.png"));
	echo "<html><body>\nBonjour Zaz<br />\n<img src='data:image/png;base64,";
	echo $img_b64;
	echo "'>\n</body></html>\n";
}
?>
