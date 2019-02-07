<?php
include("dbc.php");

	?>
<html>
<head>
<style>

#txt
{
	width:250px;
	border-style:groove;
	height:40px;
	border-radius:4px;
}
#fl
{
	width:250px;
	height:40px;
	border-radius:4px;
}
#btn
{
	background-color:#1e5799;
	border-style:none;
	width:100px;
	height:30px;
	border-radius:4px;
	color:white;
}
#btn:hover{
background-color:#1e5700;
color:#000;
}
.loginpad
{
padding-left:40px;
}
table{
color:#fff;
}
table{
color:#000;
border:none;
background-color:green;
}
th{
font-size:16px;
background-color:black;
color:#fff;
}
td
{
	background-color:#fff;
}
</style>
<title>Ki Khubor Lait Kam</title>
<link href="Assets/css/style.css" rel="stylesheet" />
</head>
<body>
<center>
 <table border="1" width="900" id="customers">
		<tr>
			<th>Name</th>
			<th>Mobile</th>
			<th>Hall Name</th>
			<th>Date</th>
			<th>ID</th>
			<th>Status</th>
			<th colspan="2">Action</th>
		</tr>

			<?php
		
		$query_page=mysqli_query($con,"select * from user_booking order by u_id desc ");
		$total=mysqli_num_rows($query_page);
	 $query1="select * from user_booking join hall on user_booking.h_id=hall.h_id where h_active='Inactive' order by u_id desc";
	 $result1=mysqli_query($con,$query1);
	if (mysqli_num_rows($result1) > 0) 
	 { 
	while($rows=mysqli_fetch_array($result1))
		{
?>
			<tr>
			<td><?php echo $rows['u_name']?></td>
			<td><?php echo $rows['u_mobile']?></td>
			<td><?php echo $rows['h_name']?></td>
			<td><?php echo $rows['b_date']?></td>
			<td><?php echo $rows['ran_id']?></td> 
			<td><?php echo $rows['h_active']?></td> 
			<td> <a href="act_update.php?Serial_no=<?php echo $rows['u_id'];?>"><input type="submit" value="Active"></a></td>
			
			</tr>
<?php
		}
	 }
?>
  </table>
  </center>
  </div>
  </div>
</body>
</html>