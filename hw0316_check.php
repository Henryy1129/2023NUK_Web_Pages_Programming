<?php

	session_start();

	$SID="Henry";	//學生
	$SPWD="0000";

	$TID="teacher";	//老師
	$TPWD="2222";

	$PID="president";	//校長
	$PPWD="4444";

	$id=$_POST["id"];
	$pwd=$_POST["pwd"];


	if(($SID==$id) && ($SPWD==$pwd)) {
		$_SESSION["login"]="Student login sucessfully";
		header ("Location: ./hw0316_student.php");

	}else if(($TID==$id) && ($TPWD==$pwd)) {
		$_SESSION["login"]="Teacher login sucessfully";
		header ("Location: ./hw0316_teacher.php");

	}else if(($PID==$id) && ($PPWD==$pwd)) {
		$_SESSION["login"]="President login sucessfully";
		header ("Location: ./hw0316_president.php");

	}else {
		$_SESSION["login"]="No";
		header ("Location: ./hw0316_fail.php");
	}
?>
