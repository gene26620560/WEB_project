<!DOCTYPE html>
<html>
<head>
	<title>ＯＸ小舖</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/app.css">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
	<div id="main">
	<header>
		<a id="title" href="./index.php">ＯＸ小舖</a>
		<div id="member_control">
			<a href="./login.php">LOGIN</a>
			<a href="./register.php">REGISTER</a>
		</div>
		<nav>
			<ul>
				<li><a href="./menu.php">MENU</a></li>
				<li><a href="./cart.php">CART</a></li>
				<li>
				<form action="./" method="GET">
					<input type="text" name="search" placeholder="Search">
					<button><img src="./image/ic_search_black_24dp_1x.png"></button>
				</form>
				</li>
			</ul>
		</nav>
	</header>
	<content>
		<div id="ad">
			<ul>
				<li style="opacity: 1;"><img src="./image/ad/AD_0.jpg"></li>
				<li style="opacity: 0;"><img src="./image/ad/AD_1.jpg"></li>
				<li style="opacity: 0;"><img src="./image/ad/AD_2.jpg"></li>
				<li style="opacity: 0;"><img src="./image/ad/AD_3.jpg"></li>
			</ul>
		</div>
	</content>
	<footer>
		Copyright © 2016-2017 OX Shop 
	</footer>
	</div>
	<script type="text/javascript" src="./js/ad.js"></script>
</body>
</html>