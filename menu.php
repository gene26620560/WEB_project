<?php ini_set('display_errors', 1); ?>
<!DOCTYPE html>
<html>
<head>
	<title>ＯＸ小舖</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/app.css">
	<link rel="stylesheet" type="text/css" href="./css/menu.css">
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
		<?php
			include_once('db_vars.inc');
			mysql_connect($db_host, $db_user, $db_password);
			mysql_query("SET NAMES 'utf8'");
			mysql_select_db($db_name);
			$data = mysql_query("SELECT * FROM `product`");
			
  			$row_total = mysql_num_rows($data);	//取得資料表資料列數
  			$fields = mysql_num_fields($data);	//取得資料表欄位數
			for($x=0; $x<($fields); $x++)
			{
			    $meta = mysql_fetch_field($data);//取得欄位資訊,使用mysql_fetch_field函數目的要取得資料表欄位名稱
			    $fields_name[$x] = $meta->name; //將欄位名稱儲存到$fields_name陣列
			}

			//先將資料存入二維資料表
			for($y=0; $y<($row_total); $y++)
			{
				$row = mysql_fetch_array($data);
			    $db_data[$y] = $row;
			}
		?>
		<table>
			<tr>
				<th>預覽</th>
				<th>名稱</th>
				<th>說明</th>
				<th>價格</th>
				<th>訂單</th>
			</tr>
			<?php
				foreach ($db_data as $value) {
					echo '<tr>';
					echo '<td><img src="./image/product/'.$value['id'].'.jpg"></td>';
					echo '<td>'.$value['name'].'</td>';
					echo '<td>'.$value['name'].'</td>';
					echo '<td>'.$value['prize'].'</td>';
					echo '<td><input type="checkbox" value="'.$value['id'].'"></td>';
					echo '</tr>';
				}
			?>
			<!--tr>
				<td><img src="./image/product/01.jpg"></td>
				<td>name</td>
				<td>dsfdsfdsf</td>
				<td>yuegd</td>
				<td></td>
			</tr>
			<tr>
				<td><img src="./image/product/02.jpg"></td>
				<td>name</td>
				<td>yuegdjgfjgsjsgfjdgsmdsb</td>
				<td>prize</td>
				<td><input type="checkbox" value="NAME"></td>
			</tr-->
		</table>
	</content>
	<footer>
		Copyright © 2016-2017 OX Shop 
	</footer>
	</div>
</body>
</html>