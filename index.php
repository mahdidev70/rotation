<?php

$string1 = 'abcdefg';
$string2 = 'defgabc';



// compare length of two string
if (strlen($string1) != strlen($string2)) {
	echo ('not rotated');
	return;
}

// check every character are same
$characters = str_split($string1);
$binaryCount1 = 0;
foreach ($characters as $character) {
	$data = unpack('H*', $character);
	$binaryCount1 += base_convert($data[1], 16, 2);
}

$characters = str_split($string2);
$binaryCount2 = 0;
foreach ($characters as $character) {
	$data = unpack('H*', $character);
	$binaryCount2 += base_convert($data[1], 16, 2);
}
if ($binaryCount1 != $binaryCount2) {
	echo 'not rotated)))))';
	return;
}


$string1 .= $string1;
// find startPosition to search
$startPosition = strpos($string1, substr($string2, 0, 1));
if (strpos($string1, $string2, $startPosition)) {
	echo ('its rotated');
	return;
} else {
	echo ('not rotated');
	return;
}
echo $startPosition;
