<?php
//////////////////////////////////////////////
// Project: CR Voting                       //
// Author: Abrar ul Haq                     //
// Github url: https://github.com/abrarism  //
// Website: https://instagram.com/abrarism  //
// Date: 21-July-2021                       //
//////////////////////////////////////////////
session_start();
if (!isset($_SESSION['userSession'])) {
	header("Location: login.php");
} else if (isset($_SESSION['userSession'])!="") {
	header("Location: index.php");
}

	if("username"){
	session_destroy();
	unset($_SESSION['SESS_NAME']);
	include'login.php';
	}
?>
