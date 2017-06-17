<?php
if ($_POST['submit'] === "ok")
{
  $folder = "pivate/";
  if (!file_exists($folder))
    mkdir ($folder);
  if (!file_exists($folder."passwd"))
    file_put_contents($folder./."passwd", null);
  $user = unserialize(file_get_contents($folder./."passwd"));

}
?>
