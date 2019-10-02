<?php
session_start();
?>


<html>
<head>
<title>hello</title>
<style type="text/css"> 
image{
width:100px;
height:100px;
}

#button {
    background-color:gold;
    
    color: white;
    padding: 8px 15px;
    text-align: center;
    font-size: 15px;
    cursor: pointer;
}

.button:hover {
    background-color:orange;
}
table {
    border: 1px solid red;
}
 

</style>	
</head>
<body bgcolor="black">

<font  color="gold">
<?php
//echo '<img src="plus.png" height="50" width="50">';


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


$uname=$_SESSION["email"];

$link = mysqli_connect("localhost", "id4998861_root", "jithu", "id4998861_gec");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM gec  WHERE email='$uname'";
if($result = mysqli_query($link, $sql))
{
    if(mysqli_num_rows($result) > 0){
		
			$row = mysqli_fetch_array($result);
			$p="";
			$p=$p."\\new\\image\\".$row['image'];
			
			//echo $temp;
			echo "<img src=$p width=200px height=300px/>";
			
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
<button  class="button" bgcolor="black" onclick="window.location.href='signin.php'">EDIT PROFILE</button>
</div>

</body>
</html>