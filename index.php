<?php
	$result = setcookie('php', 'Cool~' , time()+1000, '/', '.cafe24.com', 1);
	if ($result) {
		echo '쿠키 생성 완료';
	} else {
		echo '쿠키 생성 실패';
	};
	echo "<br>";
	echo $_COOKIE['php'];
?>