<meta charset="utf8">

<?php
	if(isset($_POST["id"])) {
		$id=$_POST["id"];
		$name=$_POST["name"];
		$join=$_POST["join"];
		$food=$_POST["food"];
		$money=$_POST["money"];
		$mail=$_POST["mail"];

		echo "學號：".$id."<br/>";
		echo "姓名：".$name."<br/>";

		if($join=='是'){
			echo "我要參加!!<br/>";
		} else{
			echo "我不參加QQ<br/>";
		}

		if($food=='是，我吃素'){
			echo "是，我吃素<br/>";
		} else{
			echo "否，我吃葷<br/>";
		}

		if($money=='是'){
			echo "已繳系學會費<br/>";
		} else{
			echo "未繳系學會費<br/>";
		}

		echo "Email：".$mail."<br/>";

	}else {
		echo "資料輸入錯誤";
	}

?>