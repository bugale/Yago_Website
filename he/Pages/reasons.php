<?php
	$result = mysql_query("SELECT * FROM `reasons` ORDER BY `index` ASC");
	while($row = mysql_fetch_array($result))
	{
		echo "<div class=\"img_info_container\">\n";
		echo "	<div class=\"img_container\">\n";
		echo "		<img src=\"Pictures/Main/bullet.png\" alt=\"טוען תמונה. אנא המתן.\" title=\"bullet\" class=\"img_container\" />\n";
		echo "	</div>\n";
		echo "	<div class=\"info_container\">\n";
		echo "		".$row['value']."\n";
		echo "	</div>\n";
		echo "</div><br /><br />\n";
	}
?>