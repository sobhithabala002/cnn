<?php
session_start();
?>


<html>
<head>
<title>gec</title>
<style type="text/css"> 
image{
width:100px;
height:100px;
}


</style>	
</head>
<body bgcolor="black">

<font  color="gold">
<?php
echo '<img src="plus.png" height="50" width="50">';
echo'<h1>good morning</h1>

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


$uname=$_SESSION["email"];

$link = mysqli_connect("localhost", "id4998861_root", "jithu", "id4998861_gec");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT student FROM gecskp  WHERE email='$username'";
if($result = mysqli_query($link, $sql))
{
    if(mysqli_num_rows($result) > 0){
		
			$row = mysqli_fetch_array($result);
			$p="";
			$p=$p."\\new\\image\\".$row['image'];
			
			//echo $temp;
			echo "<img src=$p width=500px height=300px/>";
			
			echo"<h3><i>";
				echo "<center>";
				
				echo"<style=\" top:500px;\">";
				echo "<font color=\"red\">PROFILE</font>";
				echo "<table>";
				echo "<br> ID   :" . $row['id'];
                echo "<br>Name    :" . $row['name'];
                echo "<br> Gender  :" . $row['gender'];
                echo "<br>occupation    :" . $row['occup'];
                echo "<br> dob     :" . $row['dob'];
				
				echo"<br>Address   :" . $row['address'];
				echo "<br> Mobile  :" . $row['mob'];
				echo "<br> Email   :" . $row['email'];
				echo "</table>";
				 } else{
        echo "incorrect username or password";
    }
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
<br>
<button  class="button" bgcolor="black" onclick="window.location.href='signup.php'">EDIT PROFILE</button>
</div>

</body>
</html>
