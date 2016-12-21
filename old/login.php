<html>
	<head>
		<meta charset = "utf-8">
		<title>ＯＸ小舖 Login</title>
	</head>
	<body background="bg.jpg" topmargin="90">
		<p><h1 align="center">
		<form action="actionlogin.php" method="POST">

		<font face="微軟正黑體,標楷體,新細明體" size="5">
		<font color="red" size="+2">ＯＸ小舖 會員登入</font><h1>

		<font face="Comic Sans MS,Times New Roman,Arial" size="5">
		Account:<br /><input type="text" name="account"><br />
		Password:<br /><input type="password" name="password"><br />
		</font>

		<input type="submit" name="submit" value="Login">
		<input type="hidden" name="refer" value="<?php echo (isset($_GET['refer'])) ? $_GET['refer'] : 'index.php'; ?>">
		</form>

		<font size="3">
		<a href='javascript:window.history.back();'><br>回上一頁</a>
		</font>
		</h1></p>
	</body>
</html>
