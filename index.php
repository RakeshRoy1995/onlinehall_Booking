<?php

include('db.php');
include('header.php');
?>


<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                      <p id="sp"><a href="index.php">Home</a></p>
					  <p id="sp"><a href="track.php">Track Booking</a></p>
					  <p id="sp"><a href="contact.php">Contact</a></p>
					  <p id="sp"><a href="about.php">About</a></p>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Roy Online Hall Booking</h1>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"> <img src="toog.jpg" width="50"> </a>
            </div>

            <form action="search.php" method="post">
            <button type="submit" class="btn btn-success display-4 btn-lg btn-block">Search</button>
            </form>

            <div class="jumbotron jumbotron-fluid">
			  <div class="container">
			  	<div class="alert alert-primary" role="alert">
				 <h1>Hall Section</h1> 
				</div>

                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Hall Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Price</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                   <?php
    
                 $query="select * from hall order by h_id desc ";
                     $result=mysqli_query($con,$query);
                    if (mysqli_num_rows($result) > 0) 
                     { 
                while($rows=mysqli_fetch_array($result))
                        {
                ?>
                
                  <tr>
                    <td><?php echo $rows['h_name'];?></td>
                    <td><?php echo $rows['h_place'];?></td>
                    <td><?php echo $rows['price'];?></td>
                    <td><a href="booking.php?Serial_no=<?php echo $rows['h_id'];?>"><input type="submit" class="btn btn-outline-primary" value="Book"></a></td>
                            
                  </tr>
                        <?php
                        }
                        ?>
                 
                     <?php
                     }
                     ?>
                </table>

                 
			  </div>
			</div>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <p class="text-center">Created and Developed by</p>
    <p class="text-center">Rakesh Roy</p>
    <h4 class="text-center">Contact Me</h4>
    <p class="text-center"><a  href="contact.php">Click Here</a></p>
    <!-- Bootstrap core JavaScript -->
<?php

include('footer.php');
?>
