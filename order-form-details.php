<?php
   include("wp-config.php");
   session_start();
  	if(!empty($_POST['username'])){
 
		$db = new mysqli("localhost","root","","wordpress");
		
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

		// create query
		$query = "SELECT * FROM ninja-form WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
		echo $query;
		// execute query
		$sql = $db->query($query);
		// num_rows will count the affected rows base on your sql query. so $n will return a number base on your query
		$n = $sql->num_rows;
 
		// if $n is > 0 it mean their is an existing record that match base on your query above 
		if($n > 0){
 
			header("Location: http://localhost/wordpress/login");
			
		} else {
 
			echo "Incorrect username or password";
		}
	}
?>