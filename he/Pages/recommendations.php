<a href="Page.php?p=contact&amp;i=recommend" id="report">שלח המלצה</a>
<?php
	$result = mysql_query("SELECT * FROM `recommendations` WHERE `approved` = '1' ORDER BY `index` DESC");
	while($row = mysql_fetch_array($result))
	{
		echo "<div class=\"img_info_container\">\n";
		echo "	<div class=\"img_container\">\n";
		echo "		<img src=\"Pictures/Main/bullet.png\" alt=\"טוען תמונה. אנא המתן.\" title=\"bullet\" class=\"img_container\" />\n";
		echo "	</div>\n";
		echo "	<div class=\"info_container\">\n";
		echo "		<div class=\"info_header\">\n";
		echo "			".$row['name']."\n";
		echo "		</div>\n";
		echo "		<div class=\"info_content\">\n";
		echo "			".$row['recommendation']."\n";
		echo "		</div>\n";
		echo "	</div>\n";
		echo "</div><br /><br />\n";
	}
?>