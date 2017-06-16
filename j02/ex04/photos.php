#!/usr/bin/php
<?php

function  get_html($str)
{
  $curl = curl_init($str);
  curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; fr; rv:1.9.2.13) Gecko/20101203 Firefox/3.6.13');
  curl_setopt($curl, CURLOPT_REFERER, 'http://www.google.fr');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $html = curl_exec($curl);
  curl_close($curl);
  return $html;
}

function  get_img_name($tab)
{
  $a = 0;
  $res = "";
  foreach ($tab[2] as $elem)
  {
    $tmp = explode("/", $elem);
    $size = count($tmp) - 1;
    $res[$a] = $tmp[$size];
    $a++;
  }
  return $res;
}

function  dl_img($url, $folder, $name, $tab)
{
  $a = 0;
  foreach ($name as $img)
  {
    $path = $tab[2][$a];
    if (!(preg_match("#^http#", $path)))
      $path = $url.$path;
    $curl = curl_init($path);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_BINARYTRANSFER,1);
    $exec = curl_exec($curl);
    curl_close ($curl);
    $handle = fopen($folder."/".($img),'w');
    fwrite($handle, $exec);
    fclose($handle);
    $a++;
  }
}

if ($argc == 2)
{
  $html = get_html($argv[1]);
  $url = $argv[1];
  $argv[1] = preg_replace("#(.*?)//#", '', $argv[1]);
  if (file_exists($argv[1]) && is_dir($argv[1]))
    ;
  else
    mkdir($argv[1]);
  preg_match_all("#(<img src=\")(.*?)(\")#", $html, $tab);
  $name = get_img_name($tab);
  dl_img($url, $argv[1], $name, $tab);
}
?>
