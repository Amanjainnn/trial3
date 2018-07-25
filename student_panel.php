<HTML>
    <FRAME src="http://www.zenith.com/"></FRAME>
	<FRAMESET cols="70%,30%">
        <?php 
        $id=$_GET["id"];
        echo "<FRAME src=\"student_details.php?id=$id\"></FRAME>";
        ?>
        <FRAME src="student_chat.php"></FRAME>
	</FRAMESET>
</HTML>