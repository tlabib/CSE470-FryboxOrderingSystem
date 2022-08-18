<?php   
include "connection.php";

if(isset($_POST['submit']))
{

$customer_name=$_POST['customer_name'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];
$address=$_POST['address'];
$quantity=$_POST['quantity'];
$amount=$_POST['amount'];

// $appointmentTime

	$insert="INSERT INTO order_table(customer_name,email, phone_number, address, quantity,amount) VALUES('$customer_name','$email','$phone_number','$address','$quantity','$amount')";


	if(mysqli_query($con,$insert))
	{
			echo '
				<h1 class="content2">Status:</h1>
			<h1 class="content">Your order is placed</h1>
			';
	}
	else{
		echo 'Error faced while saving data';
	}

}


?>
