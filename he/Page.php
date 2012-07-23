<?php
	setcookie("lang", "he", time() + (60 * 60 * 24 * 365 * 10), "/");
	if ($_POST["send"] == "true")
	{
		setcookie("email", $_POST["email"], time() + (60*60*24*365*10), "/");
		setcookie("phone", $_POST["phone"], time() + (60*60*24*365*10), "/");
		setcookie("name", $_POST["name"], time() + (60*60*24*365*10), "/");
	}
	$cookie_name = $_COOKIE["name"];
	$cookie_email = $_COOKIE["email"];
	$cookie_phone = $_COOKIE["phone"];
	
	$con = mysql_connect("daffy.dtnt.info:3306","yago","long_password");
	if (!$con) die('Could not connect: ' . mysql_error());
	mysql_query('SET CHARACTER SET utf8');
	
	$page = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	if (!empty($_SERVER['QUERY_STRING'])) $page .= "?".$_SERVER['QUERY_STRING'];
	
	$sql = "INSERT INTO visitor_log (ip, page, referrer, useragent, remotehost, remoteport, full_string_info) VALUES ('".
	mysql_real_escape_string($_SERVER['REMOTE_ADDR'])."', '".
	mysql_real_escape_string($page)."', '".
	mysql_real_escape_string($_SERVER['HTTP_REFERER'])."', '".
	mysql_real_escape_string($_SERVER['HTTP_USER_AGENT'])."', '".
	mysql_real_escape_string(gethostbyaddr($_SERVER['REMOTE_ADDR']))."', '".
	mysql_real_escape_string($_SERVER['REMOTE_PORT'])."', '".
	mysql_real_escape_string(http_build_query($_SERVER, '', ','))."'".
	");";
	
	mysql_select_db("yago_db", $con);
	if (!mysql_query($sql))
	{
		die('Error: ' . mysql_error(). '<br>' . $sql);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="he">
	<head>
		<title>יאגו הקוסם וחבריו המופלאים</title>
		<meta http-equiv="Content-Type" content="xhtml/xml; charset=utf-8" />
		<link href="CSS/main_style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div style="display: none; visibility: hidden">
			<img src="Pictures/Menu/Main/Hover/Bottom.gif" alt="" title="Menu Icon" />
			<img src="Pictures/Menu/Main/Hover/Top.gif" alt="" title="Menu Icon" />
			<img src="Pictures/Menu/Main/Hover/Middle.gif" alt="" title="Menu Icon" />
		</div>
		<script type="text/javascript" src="Javascript/milonic_src.js"></script>	
		<script type="text/javascript" src="Javascript/mmenudom.js"></script>
		<div id="container">
		<!--[if lt IE 8]>
			<div style='border: 1px solid #F7941D; background: #FEEFDA; text-align: center; clear: both; height: 75px; position: relative;'>
				<div style='position: absolute; right: 3px; top: 3px; font-family: courier new; font-weight: bold;'>
					<a href='#' onclick='javascript:this.parentNode.parentNode.style.display="none"; return false;'>
						<img src='http://www.ie6nomore.com/files/theme/ie6nomore-cornerx.jpg' style='border: none;' alt='Close this notice'/>
					</a>
				</div>
				<div style='width: 640px; margin: 0 auto; text-align: right; padding: 0; overflow: hidden; color: black;'>
					<div style='width: 75px; float: right;'>
						<img src='http://www.ie6nomore.com/files/theme/ie6nomore-warning.jpg' alt='Warning!'/>
					</div>
					<div style='width: 275px; float: right; font-family: Arial, sans-serif;'>
						<div style='font-size: 14px; font-weight: bold; margin-top: 12px;'>
							הנכם משתמשים בדפדפן ישן!
						</div>
						<div style='font-size: 12px; margin-top: 6px; line-height: 12px;'>
							באתר זה עלולות להופיע תקלות כתוצאה משימוש בדפדפן זה.<br />
							בכדי להנות מחווית משתמש טובה יותר בגלישה באתר זה, אנא שדרגו לדפדפן מודרני יותר.
						</div>
					</div>
					<div style='width: 75px; float: right;'>
						<a href='http://www.firefox.com' target='_blank'>
							<img src='http://www.ie6nomore.com/files/theme/ie6nomore-firefox.jpg' style='border: none;' title='הורד את FireFox 3.5' />
						</a>
					</div>
					<div style='width: 75px; float: right;'>
						<a href='http://www.browserforthebetter.com/download.html' target='_blank'>
							<img src='http://www.ie6nomore.com/files/theme/ie6nomore-ie8.jpg' style='border: none;' title='הורד את Internet Explorer 8' />
						</a>
					</div>
					<div style='width: 75px; float: right;'>
						<a href='http://www.apple.com/safari/download/' target='_blank'>
							<img src='http://www.ie6nomore.com/files/theme/ie6nomore-safari.jpg' style='border: none;' title='הורד את Safari 4' />
						</a>
					</div>
					<div style=''width: 75px; float: right;'>
						<a href='http://www.google.com/chrome' target='_blank'>
							<img src='http://www.ie6nomore.com/files/theme/ie6nomore-chrome.jpg' style='border: none;' title='הורד את Chrome' />
						</a>
					</div>
				</div>
			</div>
		<![endif]-->
			<div id="topborder"></div>
			<div id="middleborder">
				<div id="header">
					<img title="יאגו הקוסם" src="Pictures/Main/logo.png" alt="טוען תמונה. אנא המתן." style="width:700px;height:120px;"/>
				</div>
				<div id="middle_content">
					<div id="pre_navigation"></div>
					<div id="navigation">
						<noscript>
							<p>
								השימוש תפריט היווט יתאפשר רק על ידי הפעלה של JavaScript בדפדפן שבו אתה משתמש.<br />
								אנא אפשר אותו (בדרך כלל דרך חלון האפשרויות של הדפדפן) בכדי להשתמש בתפריט הניווט.
`							</p>
						</noscript>
						<div id="navigationbar">
							<script type="text/javascript" src="Javascript/main_menu.js"></script>
							<script type="text/javascript">
								with(milonic=new menuname("Main Menu"))
								{
									//followscroll=2
									style=background;
									position="relative";
									alwaysvisible=1;

									<?php
										$result = mysql_query("SELECT * FROM `main_menu` ORDER BY `index` ASC");
										$i = 0;
										while($row = mysql_fetch_array($result))
										{
											$link = "Page.php?p=".$row["link"];
											if ($row["external_link"] != NULL || $row["link"] == "external_link") $link = $row["external_link"];
											if ($i == 0) echo "aI(\"text=".$row["text"].";url=".$link.";bgimage=Pictures/Menu/Main/Regular/Top.gif;overbgimage=Pictures/Menu/Main/Hover/Top.gif;";
											else echo "\");\naI(\"text=".$row["text"].";url=".$link.";";
											$i++;
										}
										echo "bgimage=Pictures/Menu/Main/Regular/Bottom.gif;overbgimage=Pictures/Menu/Main/Hover/Bottom.gif;\");";
									?>
								}
								
								drawMenus();
							</script>
						</div><br />
						<div style="font-size:150%">052-8686027</div>
					</div>
					<div id="content">
						<div id="PageContent">
							<br />
							<?php
								if (file_exists("Pages/".$_GET["p"].".php"))
								{
									include_once("Pages/".$_GET["p"].".php"); 
								} else {
									include_once("Pages/404.php"); 
								}
							?>
						</div>
					</div>
					<div id="post_content"></div>
				</div>
				<br /><br />
			</div>
			<div id="bottomborder">
				<div id="bottomhtml">
					קישורים לאתרים העוסקים בתחום האירועים: <br />
					<a href="http://www.allbiz.co.il/Business/22638/" class="links">קוסם</a> |
					<a href="http://www.nori.co.il/" class="links">צילום אירועים</a> |
					<a href="http://www.anatush.com/" class="links">עוגת יום הולדת</a> |
					<a href="http://www.mycaricatura.co.il/" class="links">מתנות לגבר</a> |
					<a href="http://inflatable.idans.co.il/" class="links">מתנפחים</a> |
					<a href="http://activy.idans.co.il/" class="links">בר אקטיבי לילדים</a> |
					<a href="http://www.havayvebidur.com/" class="links">שירה בציבור עם צמד הווי ובידור</a> |
					<a href="http://www.misgeret.co.il/Products.php?ProductTypeID=51" class="links">מתנות ליום הולדת</a> |
					<a href="http://www.afternoon.co.il/" class="links">פעילויות לילדים</a> |
					<a href="http://www.tsnobar.com/" class="links">יום הולדת</a> |
					<a href="http://www.birthday.co.il/magician/%D7%A7%D7%95%D7%A1%D7%9D_%D7%9C%D7%99%D7%95%D7%9D_%D7%94%D7%95%D7%9C%D7%93%D7%AA/" class="links">קוסם ליום הולדת</a> <br /><br /><br />
					
					קישורים לאתרים העוסקים בתחומים שונים: <br />
					<a href="http://www.fnx.co.il/Products/Travel/" class="links">ביטוח נסיעות לחו"ל</a> |
					<a href="http://inflatable.idans.co.il/" class="links">מתנפחים</a> |
					<a href="http://www.blueipix.co.il/" class="links">קידום בגוגל</a> |
					<a href="http://www.zimercard.co.il/" class="links">צימר</a> |
					<a href="http://www.globes.co.il/news/article.aspx?did=1000376696%26fid%3D594" class="links">פלאפון</a> |
					<a href="http://www.jobsource.co.il/" class="links">עבודה בחו"ל</a> |
					<a href="http://www.itzuv.co.il/" class="links">שלטים</a> <br /><br /><br />
					
					<div id="links_container">
						<div id="pre_links"></div>
						<div id="links">
							<a href="links1.php" class="links">שיתופי פעולה</a> <br />
							<a href="links2.php" class="links">עוד שיתופי פעולה</a> <br />
							<a href="links3.php" class="links">ועוד שיתופי פעולה</a> <br />
						</div>
						<div id="info_links">
							<a href="ethical_code.php" class="links">קוד אתי לקוסמים</a> <br />
							<a href="magic_and_kids.php" class="links">על קסמים, ילדים, ומה שבינהם</a> <br />
							<a href="masked_magician.php" class="links">הקוסם במסכה</a> <br />
						</div>
						<div id="post_info"></div>
					</div><br /><br />
					
					<a href="http://validator.w3.org/check?uri=referer" style="text-decoration:none">
						<img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10-blue" title="אתר זה עומד בתקן ה XHTML 1.0 STRICT" alt="טוען תמונה. אנא המתן." />
					</a>
					<a href="http://jigsaw.w3.org/css-validator/check/referer" style="text-decoration:none">
						<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" title="אתר זה עומד בתקן הCSS רמה 3.0" alt="טוען תמונה. אנא המתן." />
					</a>
					<a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.he" style="text-decoration:none">
						<img title="כל התכנים המופיעים באתר מפורסמים תחת רשיון CC BY" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" alt="טוען תמונה. אנא המתן." />
					</a>
					<a href="http://www.milonic.com/beginner.php" id="navigationprovider" style="text-decoration:none">
						<img src="Pictures/Menu/MilonicIcon.png" alt="טוען תמונה. אנא המתן." title="תפריטי הניווט באתר בחסות Milonic" />
					</a>
				</div>
			</div>
			<div style="font-size:50%">
				אתר זה נבדק ונמצא תקין עבור הדפדפנים הבאים: <b>Internet Explorer</b> גרסה 8 ומעלה, <b>FireFox</b> גרסה 3 ומעלה, <b>Opera</b> גרסה 9 ומעלה,<br />
				<b>Safari</b> כל הגרסאות, <b>Amaya</b> גרסה 8.0 ומעלה, <b>Avant</b> גרסה 11 ומעלה, <b>Chrome</b> כל הגרסאות, ו<b>Flock</b> גרסה 2 ומעלה.
				<div style="color:red;font-size:120%">
					שימו לב: אתר זה נבדק על Internet Explorer גרסה 7 ומטה ונמצא כלא תקין! אנא המנעו משימוש בדפדפן זה.
				</div>
			</div>
		</div>
	</body>
</html>
<?php
	mysql_close($con);
?>