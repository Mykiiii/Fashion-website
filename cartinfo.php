<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo"Connection successful";
}else{
	echo"No connection";
}
	
mysqli_select_db($con, 'reclaimedwoodcartdata' );

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$product = $_POST['product'];
$payment = $_POST['payment'];

$query = "insert into cartuserdata ('name', 'mobile', 'address', 'product', 'payment')
values ('$name', '$mobile', '$address', '$product', '$payment')"; 


mysqli_query($con,$query);

header('location:cart.php');
?>