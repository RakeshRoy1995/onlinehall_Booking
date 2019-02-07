<?php

include('db.php');
include('header.php');
?>
<style>
body  {
    background-image: url("images *(1).jpg");
}
</style>
<body>
<header>
<h1 class="text-center text-warning">Rakesh Hall Booking</h1><br><br>

  <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Your Name</th>
                      <th scope="col">Status</th>
                      
                    </tr>
                  </thead>

              <form action="" method="post">
                <input type="text" name="id" placeholder="Enter mobile no or tracking no">
                <input type="submit" name="src" value="Search">
              </form>

              <?php
              if (isset($_POST['src'])) {
                $id = $_POST['id'];
    
                 $query="select * from user_booking where u_mobile='$id' or ran_id='$id'";
                     $result=mysqli_query($con,$query);
                     $rows=mysqli_fetch_array($result);
                ?>
                  <tr>
                    <td><?php echo $rows['u_name'];?></td>
                    <td><?php echo $rows['h_active'];?></td>
                  
                            
                  </tr>
          <?php 
        }
        ?>
</table>
</header>
<footer>
      <br><br>
          <p class="text-center">Created and Developed by</p>
          <p class="text-center">Rakesh Roy</p>
          <h4 class="text-center">Contact Me</h4>
          <p class="text-center"><a  href="contact.php">Click Here</a></p>
</footer>
</body>
</html>
