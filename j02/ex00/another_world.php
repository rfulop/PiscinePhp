#!/usr/bin/php
<?php
if ($argc == 2)
{
	$res = preg_replace('/\s\s+/', ' ', $argv[1]);
  if ($res[strlen($res) - 1] == ' ')
	$res = substr($res, 0, -1);
  if ($res[0] == ' ')
	  $res = substr($res, 1, strlen($res) - 1);
  echo $res."\n";
}
?>
