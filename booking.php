<?php

include('db.php');
include('header.php');
?>

<style>
body  {
    background-image: url("pexels-photo-531880.jpeg");
}
</style>

<body>

<?php

$Serial_no=$_GET['Serial_no'];
$qry = "SELECT * FROM hall where h_id=$Serial_no";
$result= mysqli_query($con,$qry);
$rows=mysqli_fetch_array($result);
$amnt= $rows['price'];
$h_active = "inactive";
$ran_id=mt_rand(100,100000);
$payment="Not completed"
?>	

    <h1 class="text-center d-inline p-2 bg-primary text-white">Hall Name:
	<?php echo $rows['h_name']; ?></h1>
	<h3 class="text-center d-inline p-2 bg-primary text-white">Price:
	<?php echo $rows['price']; ?></h3>

<div class="text-center py-4">
	    <form action="" method="post">
		<div class="form-group">
		<input type="text" name="name" placeholder="Individual/Organization Name" class="form-control" required>
	    </div>
		<br>
		<div class="form-group">
		<input type="text" name="u_mo" placeholder="Telephone/Mobile Number" class="form-control" required>
	    </div>
		<br>
		<div class="form-group">
		<input type="date" name="dt" class="form-control" required>
	    </div>
		<br>
		<br>
		<input class="btn btn-primary btn-lg" type="submit" name="book" value="Book" id="btn"/>
		</form>
		<br><br>
		<button class="btn btn-success btn-lg"><a href="index.php">Home</a></button>
</div>	

<?php
if (isset($_POST['book'])) {
	$name=$_POST["name"];
	$mo=$_POST["u_mo"];
	$dt=$_POST["dt"];

	$query="insert into user_booking
	 (u_name,u_mobile,h_id,b_date,amnt,h_active,ran_id,payment)
	  values
	 ('$name','$mo','$Serial_no','$dt','$amnt','$h_active','$ran_id','$payment')";

	 if(mysqli_query($con,$query))
		{
	 	echo "<script> alert('Successful Keep This Tracking Id ( $ran_id ) To Track Your Booking');</script>";
	 }

}


?>


</body>
</html>
