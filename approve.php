<?php	
	$con = mysql_connect("daffy.dtnt.info:3306","yago","long_password");
	if (!$con) die('Could not connect: ' . mysql_error());
	mysql_query('SET CHARACTER SET utf8');
	mysql_select_db("yago_db", $con);
	if ($_POST["approve"] != "true")
	{
		$result = mysql_query("SELECT * FROM recommendations WHERE index='".mysql_real_escape_string($_GET["index"])."'");
		if (!$result)
		{
			die('Error: ' . mysql_error());
		}
		while($row = mysql_fetch_array($result))
		{
			$name = $row["name"];
			$email = $row["email"];
			$recommendation = $row["recommendation"];
		}
	}
	else
	{
		if ($_POST["password"] != "really_long_and_unguessable_password") die('Error: Wrong Password');
		$result = mysql_query("UPDATE recommendations SET show='1' WHERE index='".mysql_real_escape_string($_GET["index"])."'");
		if (!$result) die('Error: ' . mysql_error());
		else die('Recommendation Approved Successfully!');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="he">
	<head>
		<title>Approve Recommendation</title>
		<meta http-equiv="Content-Type" content="xhtml/xml; charset=utf-8" />
	</head>
	<body>
		<div id="container">
		<div style="font-size: 200%;">
			Approve Recommendation
		</div>
		<div style="font-size: 120%;">
			Name: <?php echo $name; ?><br />
			Email: <?php echo $email; ?><br /><br />
			Recommendation:<br /> <?php echo $recommendation; ?>
		</div>
		<form method="post" action="approve.php">
			<div>
				<input type="hidden" name="approve" value="true" /><br />
				Index: <input type="text" name="index" value="<?php echo $_GET["index"]; ?>" /><br />
				Password: <input type="password" name="password" /><br />
				<input type="submit" name="submit" value="Approve Recommendation" /><br />
			</div>
		</form>
		</div>
	</body>
</html>
<?php
	mysql_close($con);
?>