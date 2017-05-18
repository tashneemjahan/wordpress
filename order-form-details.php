<?php

require 'wp-config.php';
$db = new mysqli("localhost","root","","wordpress");
$name    = $_POST['name'];
$email   = $_POST['email'];
$address = $_POST['address'];
$order_date = $_POST['order_date'];
$newDate_order = date("y-m-d", strtotime($order_date));

$due_date = $_POST['due_date'];
$newDate_due = date("y-m-d", strtotime($due_date));

$products = $_POST['products'];
$quantity = $_POST['quantity'];
$order_information = $_POST['order_information'];

$query   = "INSERT into wp_order_form (name,email,address,order_date,due_date,products,quantity,order_information,order_status) VALUES('" . $name . "','" . $email . "','" . $address . "','" . $newDate_order . "','" . $newDate_due . "','" . $products . "','" . $quantity . "','" . $order_information . "','" . '1' . "')";

$success  = $db->query($query);

if (!$success) {
    die("Couldn't enter data: ".$db->error);

}
else {
	$sql = "select max(id) as id from wp_order_form";
	$result  = $db->query($sql);
	
	 while($row = $result->fetch_assoc()) {
		$last_id = $row["id"];
header("Location: http://localhost/wordpress/demo?id=$last_id;");		
$db->close();
		} }



?>
