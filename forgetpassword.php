<?php
   include("wp-config.php");
   session_start();
   
  	if(!empty($_POST['username_email']))
	{
		
		$db = new mysqli("localhost","root","","wordpress");
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		// create query
		$query = "SELECT username FROM wp_register_user WHERE email='".$_POST['username_email']."'";
		echo $query;
		// execute query
		$result  = $db->query($query);
		while($row = $result->fetch_assoc()) 
		{
			$username = $row["username"];
			echo $password_data;
		
			// if $password_data match it mean their is an existing record that match base on your query above 
			if($username){
				header("Location: http://localhost/wordpress/forgetpasswordform_new?id=$username");
			} 
				else 
				{
					 $id="Username or Password is Wrong..!!";
					 header("Location: http://localhost/wordpress/forgetpasswordform?id=$id");
				}
		}
	}
?>