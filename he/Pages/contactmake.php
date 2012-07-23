<form method="post" action="Page.php?p=contact">
	<div id="formcontent">
		<input type="hidden" name="send" value="true" />
		<?php if ($recommend) echo "<input type=\"hidden\" name=\"recommend\" value=\"true\" />"; ?>
		
		<div id="errorinfo" style="color:red">
			<?php echo $error; ?>
		</div>
		ניתן לפנות ליאגו ישירות -  <br />
		<div id="details">
			בטלפון: 052-8686027 <br />
			בפקס: 04-6289144 <br />
			ובדואר אלקטרוני: yago1@013.net.il <br />
		</div>
		<?php
			if ($recommend) echo "כמו כן, ניתן לכתוב המלצה באמצעות מערכת האתר:<br />";
			else            echo "כמו כן, ניתן לכתוב פנייה באמצעות מערכת האתר:<br />";
		?>
		<br />
		<div class="contact_container" style="<?php if ($recommend) echo "display: none;"; ?>">
			<div class="contact_desc">
				סיבת יצירת הקשר:
			</div>
			<div class="contact_field">
				<select name="type">
					<option value="ask" <?php if ($_POST["type"] == "ask") { echo "selected=\"selected\""; } ?>>שאלה</option>
					<option value="report" <?php if ($_POST["type"] == "report" || $_GET["i"] == "report") { echo "selected=\"selected\""; } ?>>דיווח על תקלה</option>
					<option value="other" <?php if ($_POST["type"] == "other") { echo "selected=\"selected\""; } ?>>אחר</option>
				</select><br />
			</div>
		</div>
		<div class="contact_container">
			<div class="contact_desc">
				<?php
					if ($recommend) echo "טלפון לחזרה (לא יוצג באתר):";
					else	        echo "טלפון לחזרה (מומלץ):";
				?>
			</div>
			<div class="contact_field">
				<?php echo "<input type=\"text\" name=\"phone\" value=\"".$cookie_phone."\" />"; ?>
			</div>
		</div>
		<div class="contact_container">
			<div class="contact_desc">
				<?php
					if ($recommend) echo "דוא\"ל לחזרה (לא יוצג באתר):";
					else	        echo "דוא\"ל לחזרה (מומלץ):";
				?>
			</div>
			<div class="contact_field">
				<?php echo "<input type=\"text\" name=\"email\" value=\"".$cookie_email."\" />"; ?>
			</div>
		</div>
		<div class="contact_container">
			<div class="contact_desc">
				<?php
					if ($recommend) echo "שם מלא (יוצג באתר):";
					else            echo "שם מלא (מומלץ):";
				?>
			</div>
			<div class="contact_field">
				<?php echo "<input type=\"text\" name=\"name\" value=\"".$cookie_name."\" />"; ?>
			</div>
		</div>
		<div class="contact_container" style="<?php if ($recommend) echo "display: none;"; ?>">
			<div class="contact_desc">
				כותרת ההודעה (חובה):
			</div>
			<div class="contact_field">
				<?php echo "<input type=\"text\" name=\"title\" value=\"".$_POST["title"]."\" />"; ?>
			</div>
		</div>

		<?php
			if ($recommend) echo "תוכן ההמלצה (יוצג באתר):<br />";
			else            echo "תוכן ההודעה (חובה):<br />";
		?>

		<textarea name="message" rows="20" cols="50"><?php echo $_POST["message"]; ?></textarea><br />
		
		<div id="captcha_container">
			<div id="captcha">
				<?php echo recaptcha_get_html("6LcJONQSAAAAAHC5ycQWY6hEfCSS4vE_JYmp7i5i"); ?>
			</div>
			<div id="post_captcha"></div>
		</div>
		
		<input type="submit" value="שלח כעת" />
	</div>
</form>