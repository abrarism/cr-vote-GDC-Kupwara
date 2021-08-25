<?php
//////////////////////////////////////////////
// Project: CR Voting                       //
// Author: Abrar ul Haq                     //
// Github url: https://github.com/abrarism  //
// Website: https://instagram.com/abrarism  //
// Date: 21-July-2021                       //
//////////////////////////////////////////////
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
?>
<center><h3> Voting So Far  </h3></center>
<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM languages' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
	echo '<center><table><tr bgcolor="#FF6600">
<td width="30px">ID</td>		
<td width="100px">VOTE ID</td>
<td width="200px">FULL NAME</td>
<td width="30px">VOTEs</td>
</tr>';
while($mb=mysqli_fetch_object($member))
		{	
			$id=$mb->lan_id;
			$name=$mb->fullname;
			$about=$mb->about;
			$vote=$mb->votecount;
			echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$about.'</td>';
	echo '<td>'.$vote.'</td>';
	echo "</tr>";
		}
		echo'</table></center>';
	}
?>