<?php
	session_start();
	session_destroy();
	echo "Logout, go to the login page after 3 seconds...";
	header("Refresh:3 ; url=./hw0316_index.html");
?>