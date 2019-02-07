<?php
include("db.php");
?>
<html>
<head>
<title>
Roy Online Hall Booking
</title>
</head>
<body>
<center>
<hr>
<p>Onlien Payment Services Supported</p>
<a href="https://www.paypal.com"><img src="paypal.png" width="80" title="Paypal Service"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<h4>Choose Your Payment Method</h4>
<form action="payment.php" method="post">
<select name="bank" id="txt">
<option value="">Select Your bank</option>
 <?php
 $sql = "SELECT * FROM bank";
					$result = mysqli_query($con, $sql);
					while($rows=mysqli_fetch_array($result))
{ 
          ?>
              <option value="<?php echo $rows['bnk_name']?>"><?php echo $rows['bnk_name']?></option>
			  
    <?php
	}
?>
</select>
<input type="submit" name="ok" id="btn" value="Proceed">
</form>
<a href="cancel.php"><input type="submit"id="btn" value="Cancel"></a>
<center>
</center>
</body>
</html>