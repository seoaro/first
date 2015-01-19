<?php
	$text = '행복한 브라운';
	echo base64_encode($text) . "<br>";
	$text = 'x+C6ucfRILrqtvO/7g==';
	echo base64_decode($text) . "<br>" . "<br>";

	$text = '가나12';
	echo urlencode($text) . "<br>"; //%B0%A1%B3%AA12
	$text = '%B0%A1%B3%AA12';
	echo urldecode($text); //가나12
?>