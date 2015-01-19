<?php
//	$array = file('somefile.txt');
//
//	foreach ($array as $line_num => $line) {
//		echo "#{$line_num} : $line <br>\n";
//	}
//
//	$array = file('http://www.naver.com/');
//
//	foreach ($array as $line_num => $line) {
//		echo htmlspecialchars($line) . " <br>\n";
//	}
	$filename = "filetest.txt";

	$handle = fopen($filename, "rw");

	if ($handle) {
		echo "done <BR><BR>";
	} else {
		echo "false <BR>";
	}
	$string = "자극하는 PHP 프로그래밍";
	fwrite($handle, $string);
	//
	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize($filename));
	echo "$contents";
	fclose($handle);

?>