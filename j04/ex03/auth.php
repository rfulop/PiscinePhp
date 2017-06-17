<?php
function auth($login, $passwd)
{
  if (!$login || !$passwd)
    return false;
  $folder = "../private/";
  $data = unserialize(file_get_contents($folder.'passwd'));
  if ($data)
  {
    foreach ($data as $elem)
    {
      if ($elem['login'] === $login && $elem['passwd'] === hash('whirlpool', $passwd))
        return true;
    }
  }
  return false;
}
?>
