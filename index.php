<?php
	$haystack = "She is a very hot woman";
	$needle = "hot";

	$pos = strpos($haystack, $needle);

	if ($pos === false)
	{
		echo "문자열을 찾지 못했습니다.";
	}
	else
	{
		echo "{$pos} 위치에서 문자열을 찾았습니다.";
	}
?>