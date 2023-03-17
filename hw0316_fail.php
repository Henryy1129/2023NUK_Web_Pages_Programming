<?php
	session_start();
	ob_start();

	if($_SESSION["login"]=="No"){

	}else{
		header("Location:./hw0316_error.php");
	}
?>

<html> 
	<head> 
		<meta charset="utf-8">
		<title>fail</title>
	</head> 

	<body>
		登入失敗！<br>
		網頁將在三秒後跳轉至登入頁面或<br>
		<a href="./hw0316_index.html">無反應請點選這裡</a>
		<?php 
			session_destroy();
			header("Refresh:3 ; url=./hw0316_index.html")
		?>
	</body> 
</html>
<?php ob_flush(); ?>