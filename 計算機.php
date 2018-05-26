<?php

$str = $argv;
var_dump($argv);

print_r (explode(" ",$str[1]));
$aaa = explode(" ",$str[1]);
var_dump($argv);

if (aaa[1] === '+' )
{
	var_dump(aaa[0] + aaa[1]);
}

?>