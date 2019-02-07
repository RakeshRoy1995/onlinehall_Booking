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

               <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Hall Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>

              <form action="" method="post">
                <input type="text" name="name" placeholder="Enter Hall Name">
                <input type="submit" name="src">
              </form>

              <?php
              if (isset($_POST['src'])) {
                $name = $_POST['name'];
    
                 $query="select * from hall where h_name='$name'";
                     $result=mysqli_query($con,$query);
                     $rows=mysqli_fetch_array($result);
                ?>
                  <tr>
                    <td><?php echo $rows['h_place'];?></td>
                    <td><?php echo $rows['price'];?></td>
                    <td><a href="booking.php?Serial_no=<?php echo $rows['h_id'];?>"><input type="submit" class="btn btn-outline-primary" value="BOOK"></a></td>
                            
                  </tr>
          <?php 
        }
        ?>
        <br>
        <br>
                
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php

include('footer.php');
?>
