#!/usr/bin/php
<?php
if ($argc == 2)
{
  $res = preg_replace('/\s\s+/', ' ', $argv[1]);
  echo $res."\n";
}
?>
