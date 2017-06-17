<?php
function  check($data, $login, $oldpw, $newpw)
{
  foreach ($data as $elem => $key)
  {
    if ($key['login'] == $login && $key['passwd'] == $oldpw)
    {
      $data[$elem] = $newpw;
      return (true);
    }
  }
    return (false);
}

if ($_POST['submit'] && $_POST['submit'] == "OK" && $_POST['passwd'] && $_POST['newpw'] && $_POST['oldpw'])
{
  $folder = "../private/";
  $data = unserialize(file_get_contents($folder.'passwd'));
  $oldpw = hash('whirlpool', $_POST['oldpw'])
  $newpw = hash('whirlpool', $_POST['newpw'])
  if ((check($data, $_POST['login'], $oldpw, $newpw)) == false)
    echo "ERROR\n";
  else
  {
    file_put_contents($folder.'passwd', serialize($data));
    echo "OK\n";
  }
}
else
  echo "ERROR\n";
 ?>
