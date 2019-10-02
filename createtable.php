<?php

/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "id4998861_root", "jithu", "id4998861_gec");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Attempt create table query execution

$sql = "create table gec(

    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,

    name CHAR(30) NOT NULL,
	occup char(20) NOT NULL,
	gender CHAR(10) NOT NULL,
	dob DATE,
	
	address CHAR(10) NOT NULL,
	image char(30) NOT NULL

    

)";
//INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";


if(mysqli_query($link, $sql)){

    echo "Table created successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
/*$result = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";

if(mysqli_query($link, $result))
{

   echo "Records inserted successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);*/

 
// Close connection

mysqli_close($link);
?>
