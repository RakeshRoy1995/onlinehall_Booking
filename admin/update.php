<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rakesh Hall Booking</title>

    <!-- Bootstrap core CSS -->
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asest/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="asset/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

   
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
                    <td><a href="edit.php?Serial_no=<?php echo $rows['h_id'];?>"><input type="submit" class="btn btn-outline-primary" value="Update"></a></td>
                            
                  </tr>
                        <?php
                        }
                        ?>
                 
                     <?php
                     }
                     ?>
                </table>


 <script src="assest/assets/vendor/jquery/jquery.min.js"></script>
    <script src="assest/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>