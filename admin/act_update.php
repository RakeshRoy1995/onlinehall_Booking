<?php
include('dbc.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Roy Online Hall Booking</title>
</head>
<body>

<?php
$slno = $_GET['Serial_no'];

$status = "Active <a href=confirm.php>Confirm your hall</a>";

$query="update user_booking set h_active='$status' where u_id=$slno";
		if(mysqli_query($con,$query))
		{
		header("location:home.php");
		}
		else
		{
		echo mysqli_error($con);
		}

		?>

</body>
</html>