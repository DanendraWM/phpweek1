<?php

$data = <<<'EOD'

		X, -9\\\10\100\-5\\\0\\\\, A

		Y, \\13\\1\, B

		Z, \\\5\\\-3\\2\\\800, C

		EOD;

$rows = explode("\r\n", $data);
$all_num = [];
foreach ($rows as $row) {
	$get_a = preg_split('/,(\s)+/', $row);
	$pasangan[$get_a[0]] = $get_a[2];
	$counter[$get_a[0]] = 1;
	$get_b = preg_split('/\\\+/', $get_a[1], -1, PREG_SPLIT_NO_EMPTY);
	sort($get_b);
	$arr_huruf[$get_a[0]] = $get_b;
	$all_num = array_merge($all_num, $get_b);
}
sort($all_num);
foreach ($all_num as $num) {
	foreach ($arr_huruf as $huruf => $nums) {
		if (in_array($num, $nums)) {
			echo $huruf . ',' . $num . ',' . $pasangan[$huruf] . ',' . $counter[$huruf]++ . PHP_EOL;
		}
	}
}