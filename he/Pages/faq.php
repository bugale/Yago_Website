<?php
	$result = mysql_query("SELECT * FROM `faq` ORDER BY `index` ASC");
	while($row = mysql_fetch_array($result))
	{
		echo "<div class=\"img_info_container\">\n";
		echo "	<div class=\"img_container\">\n";
		echo "		<img src=\"Pictures/Main/question.png\" alt=\"טוען תמונה. אנא המתן.\" title=\"שאלה\" class=\"img_container\" />\n";
		echo "	</div>\n";
		echo "	<div class=\"info_container\">\n";
		echo "		שאלה: ".$row['question']."\n";
		echo "	</div>\n";
		echo "</div>\n";
		echo "<div class=\"img_info_container\">\n";
		echo "	<div class=\"img_container\">\n";
		echo "		<img src=\"Pictures/Main/answer.png\" alt=\"טוען תמונה. אנא המתן.\" title=\"תשובה\" class=\"img_container\" />\n";
		echo "	</div>\n";
		echo "	<div class=\"info_container\">\n";
		echo "		תשובה: ".$row['answer']."\n";
		echo "	</div>\n";
		echo "</div><br /><br />\n";
	}
?>