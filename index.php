﻿<!DOCTYPE HTML5>
<html lang='ko'>
<head>
	<meta charset = "utf-8" />
	<title>예상 키 계산하기</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<hr>
	<form action="result.php" method="get">
		성별: <select name="sex">
			<option value="male">남성</option>
			<option value="female">여성</option>
		</select><br>
		아빠 키: <input type="number" name="f_stature" placeholder="100이상 280이하" required><br>
		엄마 키: <input type="number" name="m_stature" placeholder="100이상 280이하" required><br>
		<p><input type = "submit" value = "확인" /></p>
	</form>
	<hr>
</body>
</html>