#!/usr/bin/php
<?php

function ft_find_sign($str)
{
	$res;
	$i = 0;
	$count = 0;

	while ($str[$i])
	{
		if ($str[$i] == '+' || $str[$i] == '-' || $str[$i] == '/'  ||
			$str[$i] == '*' || $str[$i] == '%')
			++$count;
		++$i;
	}
	if ($count != 1)
		echo "Syntax Error\n";
	else if ($res = strstr($str, '+'))
		return $res;
	else if ($res = strstr($str, '-'))
		return $res;
	else if ($res = strstr($str, '*'))
		return $res;
	else if ($res = strstr($str, '/'))
		return $res;
	else if ($res = strstr($str, '%'))
		return $res;
	else if (!$res)
		echo "Syntax Error\n";
}


function ft_do_op($nb1, $nb2, $sign)
{
	if ($sign == "+")
		$res = $nb1 + $nb2;
	else if ($sign == "-")
		$res = $nb1 - $nb2;
	else if ($sign == "*")
		$res = $nb1 * $nb2;
	else if ($sign == "/")
		$res = $nb1 / $nb2;
	else if ($sign == "%")
		$res = $nb1 % $nb2;
	echo $res."\n";
}

if ($argc != 2)
	echo "Incorrect Parameters";
else
{
	$search = array('+', '-','*','/','%');
	$test = ft_find_sign($argv[1]);
	if ($test)
	{
		$sign = $test[0];
		$nb1 = substr($argv[1], 0, strlen($test));
		$nb2 = str_replace($search, "", $test);
		ft_do_op($nb1, $nb2, $sign);
	}
}
?>
