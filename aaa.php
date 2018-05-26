<?php

$input = [	1,2,3,4];

$result = 0;

foreach ($input as $index => $value){
	echo "key: $index, value: $value\n";
	$result=$result+$value;
}
echo $result;