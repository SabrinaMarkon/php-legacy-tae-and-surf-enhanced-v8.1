<?php
include "admincontrol.php";
include "../header.php";
include "../style.php";

$userid = $_POST['userid'];

    	?><table>
      	<tr>
        <td width="15%" valign=top><br>
        <? include("adminnavigation.php"); ?>
        </td>
        <td valign="top" align="center"><br><br> <?
    	echo "<font size=2 face='$fonttype' color='$fontcolour'><p><b><center>";
		
		$userid = $_POST['userid'];
		$query = "INSERT INTO topnav (userid, date) VALUES ('$userid','".time()."')";
		
		$count = 0;
		$quantity = $_POST['quantity'];
		while($quantity > $count) {
			$count++;
			mysql_query ($query);
		}

        echo "<p><center>".$quantity." blank top navigation link has been added to ".$userid."'s account.</p></center>";
        echo "</td></tr></table>";

include "../footer.php";

?>