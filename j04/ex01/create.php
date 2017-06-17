<?php

function  check($users, $login)
{
  foreach ($users as $elem => $key)
  {
    if ($key['login'] == $login)
      return (false);
  }
    return (true);
}

if ($_POST['submit'] && $_POST['submit'] == "OK" && $_POST['login'] && $_POST['passwd'])
{
  $folder = "../pivate/";
  if (!file_exists($folder))
    mkdir ($folder);
  if (!file_exists($folder . "passwd"))
    file_put_contents($folder . "passwd", "");
  $users = unserialize(file_get_contents($folder.'passwd'));
  if ((check($users, $_POST['login'])) == false)
    echo "ERROR\n";
  else
  {
    $passwd = hash('whirlpool', $_POST['passwd']);
    $tmp[] = ['login' => $_POST['login'], 'passwd' => $passwd];
    file_put_contents($folder."passwd", serialize($tmp));
    echo "OK\n";
  }
}
else
  echo "ERROR\n";
?>
