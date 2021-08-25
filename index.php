<?php
//////////////////////////////////////////////
// Project: CR Voting                       //
// Author: Abrar ul Haq                     //
// Github url: https://github.com/abrarism  //
// Website: https://instagram.com/abrarism  //
// Date: 21-July-2021                       //
//////////////////////////////////////////////
 include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>

<p><center><legend><font color='#008000' size='10'>
<!---- Voting system created by Abrar -->
Online voting system to vote for Class representative <br>
BCA 6th Semester Batch 2018.</p></font></legend></center>


<p><center><legend><font color='#005777' size='5'>
<p>Students have to register before casting vote.
<br> <p>

<a href="http://localhost/vote/cr-vote-GDC-Kupwara/login.php">Click Here</a> to Login
</p></font></legend></center>
    <p>&nbsp;&nbsp;</p>
<?php include "footer.php";?>
