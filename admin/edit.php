<?php
include('dbc.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roy Online Hall Booking</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="asset/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="asset/css/util.css">
    <link rel="stylesheet" type="text/css" href="asset/css/main.css">
<!--===============================================================================================-->
</head>
<body>
 <?php
$slno=$_GET["Serial_no"];
$query="select * from hall where h_id=$slno";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$price =$row["price"];
        ?>

    <div class="container-contact100">
        <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

        <div class="wrap-contact100">
            <form action="" method="post" class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Update Hall
                </span>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <input class="input100" type="text" name="h_name" value="<?php echo $row["h_name"];?>" ">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="h_place" value="<?php echo $row["h_place"];?>" ">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Price is required">
                    <textarea class="input100" name="price" value="<?php echo $price?>" ></textarea>
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button type="submit" name="update" class="contact100-form-btn">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['update'])) {
        $h_name = $_POST['h_name'];
        $h_place = $_POST['h_place'];
        $price = $_POST['price'];

        $sql = "UPDATE hall SET h_name='$h_name' , h_place='$h_place' , price=$price WHERE h_id=$slno";
        $run = mysqli_query($con,$sql);
        echo "<script> alert('Updated Successfully');</script>";
    }

    ?>



    <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
    <script src="asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="asset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="asset/vendor/bootstrap/js/popper.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="asset/vendor/daterangepicker/moment.min.js"></script>
    <script src="asset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="asset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="asset/js/map-custom.js"></script>
<!--===============================================================================================-->
    <script src="asset/js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>



