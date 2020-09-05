<?php
session_start();
if ($_POST['Submit'] == 'Send')
{
if (strcmp(md5($_POST['user_code']),$_SESSION['ckey']))
	{ 
header("Location: index.php?msg=ERROR: Invalid Verification Code");
exit();
  } 

$to = $_POST['toemail'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$fromemail = $_POST['fromemail'];
$fromname = $_POST['fromname'];
$lt= '<';
$gt= '>';
$sp= ' ';
$from= 'From:';
$headers = $from.$fromname.$sp.$lt.$fromemail.$gt;
mail($to,$subject,$message,$headers);
header("Location: index.php?msg= Mail Sent!");
exit();
}
?>
<html>
<head>
<title>Email Spoofing</title>
</head>
<body bgcolor="#ffffcc">
<h2 align="center">
Spoofing Email Script By Arpit
</h2>
<h3 align="center">
Please do not misuse this script. Use it only for only educational and having FUN purpose.
</h3><br>
<p style="margin-left:15px">
<form action="index.php" method="POST">
<b>From Name:</b><br>
<input type="text" name="fromname" size="50"><br>
<br><b>From Email:</b><br>
<input type="text" name="fromemail" size="50"><br>
<br><b>To Email:</b><br>
<input type="text" name="toemail" size="50"><br>
<br><b>Subject:</b><br>
<input type="text" name="subject" size="74"><br>
<br><b>Your Message:</b><br>
<textarea name="message" rows="5" cols="50">
</textarea><br>
<br><b>Verification Code:</b><br>
<input name="user_code" type="text" size="25">  
<img src="captcha.php" align="middle"><br><br>
<input type="submit" name="Submit" value="Send">
<input type="reset" value="Reset">
</form>
</p>
<?php if (isset($_GET['msg'])) { echo "<font color=\"red\"><h3 align=\"center\"> $_GET[msg] </h3></font>"; } ?>
<h3 align="center">
WARNING: Use it at your own risk. Do not use this for Spamming!.
</h3>
</body>
</html>

