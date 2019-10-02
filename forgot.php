<?php
// Start the session
session_start();
?>
<?php
$error=$succ=$empty="";
if($_SERVER["REQUEST_METHOD"]=="POST") {
$email=$_POST['email'];
$dob=$_POST['date'];
$_SESSION["email"] =$email;


$sql=mysqli_connect("localhost","id4998861_root","jithu","id4998861_gec");
if(!$sql)
{die ("connection failed");}
else{
$n="select name,dob from gec where email='$email'";
$result=mysqli_query($sql,$n);

	
		$row = mysqli_fetch_array($result);
		
		if($row['dob']==$dob)
		{
	
				 header('Location:reset.php');
			 
			
			}
		else{
			
			
		$error= "incorrect username or dob";
		}

}
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
<title>Forgot Password
</title>
<meta charset="utf-8"/>
<link href="forgot.css" rel="stylesheet" type="text/css" />
<body>
</head>

<div id="q">
<p>Please provide your login E-mail....</p></div>
<div>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<fieldset>
<legend >Forgot Password</legend>
<p style="color:red;">
<label for="email">Email:</label>
<input type="email" name="email" id="email" placeholder="email" required >
</p>
<p style="color:red;">
<label for="email">Dob:</label>
<input type="date" name="date" id="email" required >
</p>

<p><input type="submit" value="Submit"/></p>
<?php echo '<p style="color:red ;">'. $error .'</p>'?>
</fieldset>
</form></div>


</body>
</html>