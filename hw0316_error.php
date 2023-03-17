<?php
	session_start();
	ob_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>error</title>
	</head>
	<body>
		非法進入網頁!<br>
		網頁將在三秒後跳轉至登入頁面或<br>
		<a href="./hw0316_index.html">無反應請點選這裡</a>
		<?php 
			session_destroy();
			header("Refresh:3 ; url=./hw0316_index.html")
		?>
	</body>
</html>
<?php ob_flush(); ?>