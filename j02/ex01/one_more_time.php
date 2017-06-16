#!/usr/bin/php
<?php

function  ft_get_day($str)
{
  if ($str == "lundi" || $str == "Lundi")
    return (1);
  if ($str == "mardi" || $str == "Mardi")
    return (2);
  if ($str == "mercredi" || $str == "Mercredi")
    return (3);
  if ($str == "jeudi" || $str == "Jeudi")
    return (4);
  if ($str == "vendredi" || $str == "Vendredi")
    return (5);
  if ($str == "samedi" || $str == "Samedi")
    return (6);
  if ($str == "dimanche" || $str == "dimanche")
    return (7);
  }

function  ft_get_month($str)
{
	if ($str == "janvier" || $str == "Janvier")
		return (1);
	if ($str == "Février" || $str == "février")
		return (2);
	if ($str == "mars" || $str == "Mars")
		return (3);
	if ($str == "avril" || $str == "Avril")
		return (4);
	if ($str == "mai" || $str == "Mai")
		return (5);
	if ($str == "Juin" || $str == "juin")
		return (6);
	if ($str == "juillet" || $str == "Juillet")
		return (7);
	if ($str == "Août" || $str == "août")
		return (8);
	if ($str == "septembre" || $str == "Septembre")
		return (9);
	if ($str == "octobre" || $str == "Octobre")
		return (10);
	if ($str == "novembre" || $str == "Novembre")
		return (11);
	if ($str == "Décembre" || $str == "décembre")
		return (12);
}

if ($argc == 2)
{
  		date_default_timezone_set("Europe/Paris");
  $patern = '#(^[lL]undi|^[mM]ardi|^[mM]ercredi|^[jJ]eudi|^[vV]endredi|^[sS]amedi|^[dD]imanche) (\d{1,2}) ([jJ]anvier|[fF]évrier|[mM]ars|[Aa]vril|[mM]ai|[jJ]uin|[jJ]uillet|[aA]oût|[sS]eptembre|[oO]ctobre|[nN]ovembre|[dD]écembre) (\d{4}) (\d{1,2}):(\d{1,2}):(\d{1,2})#';
  $ret = preg_match($patern, $argv[1]);
  if (!$ret)
    echo "Wrong Format\n";
  else
  {
    $tab = preg_split('#[: ]#', $argv[1]);
    $tab[0] = ft_get_day($tab[0]);
    $tab[2] = ft_get_month($tab[2]);
    echo mktime($tab[4], $tab[5], $tab[6], $tab[2], $tab[0], $tab[1])."\n";
  }
}
?>
