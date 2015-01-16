<?php
	echo date("오늘은 Y년 m월 d일 입니다.") . "<BR>";
	echo date("지금 시각은 H시 i분 s초 입니다.") . "<BR>";
	echo date("오늘은 올해의 z번째 날이며 W번째 주입니다") . "<BR>";
	echo date("이번달의 마지막 날은 t일 입니다.") . "<BR>";

	$date = mktime(6, 28, 31, 6, 8, 2009);
	echo date("주어진 날짜는 Y년 m월 d일 입니다.", $date). "<BR>";
	echo date("주어진 시간은 H시 i분 s초 입니다.", $date). "<BR>";
?>