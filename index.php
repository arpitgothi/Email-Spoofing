<?php
if (isset( $_POST['submit'])) {
	$to = $_POST['toemail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$fromemail = $_POST['fromemail'];
	$fromname = $_POST['fromname'];
	$lt = '<';
	$gt = '>';
	$sp = ' ';
	$from = 'From:';
	$headers = $from . $fromname . $sp . $lt . $fromemail . $gt;
	mail($to, $subject, $message, $headers);
	header("Location: index.php?msg= Mail Sent!");
	exit();
}
?>
<html>

<head>
	<title>Spoof E-Mail using PHP</title>
</head>

<body bgcolor="#ffffcc" style="margin: 0 10%">
	<h2 align="center">
		Spoof E-Mail using PHP( Script By Arpit )
	</h2>
	<p style="margin-left:15px">
		<form action="index.php" method="POST">
			<b>From Name:</b><br>
			<input type="text" name="fromname" size="50"><br>
			<br><b>From Email:</b><br>
			<input type="text" name="fromemail" size="50"><br>
			<br><b>To Email:</b><br>
			<input type="text" name="toemail" size="50"><br>
			<br><b>Subject:</b><br>
			<input type="text" name="subject" size="50"><br>
			<br><b>Your Message:</b><br>
			<textarea name="message" rows="5" cols="46"></textarea><br><br>
			<input type="submit" name="submit" value="Send">
			<input type="reset" value="Reset">
		</form>
	</p>
	<?php if (isset($_GET['msg'])) {
		?>
		<script>
			alert("Mail Sent!!");
		</script>
		<?php
	} ?>
	<h3 align="center" style="color: red;">
		Legal disclaimer:<br>Usage of use of this script for attacking targets without prior mutual consent is illegal. It's the end user's responsibility to obey all applicable local, state and federal laws. Developers assume no liability and are not responsible for any misuse or damage caused by this program
	</h3>
</body>
</html>