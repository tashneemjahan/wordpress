<?php
   if(!empty($_POST["forgot-password"])){
		$conn = mysqli_connect("localhost", "root", "", "wordpress");
		
		$condition = "";
		if(!empty($_POST["username"])) 
			$condition = " username = '" . $_POST["username"] . "'";
		if(!empty($_POST["user-email"])) {
			if(!empty($condition)) {
				$condition = " and ";
			}
			$condition = " username_email = '" . $_POST["user-email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from admin " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("forget-password-mail.php");
		} else {
			$error_message = 'No User Found';
		}
	}
?>