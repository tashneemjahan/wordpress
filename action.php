
<?php
   include("wp-config.php");
   session_start();
 
	if(!empty($_POST['username']) )
	{
		
		$db = new mysqli("localhost","root","","wordpress");
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	
		// create query
		$query = "SELECT password FROM admin WHERE username='".$_POST['username']."'";
			  
		// execute query
		$result  = $db->query($query);
		while($row = $result->fetch_assoc()) 
		{
			
			$password_data = $row["password"];
			
			// if $password_data match it mean their is an existing record that match base on your query above 
			if($password_data == $_POST['password']){
				header("Location: http://localhost/wordpress/login");
			} 
				else 
				{
					 $id="Username or Password is Wrong..!!";
					 header("Location: http://localhost/wordpress/login?id=$id");
				}
		}
		
		
	}
?>