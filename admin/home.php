<!DOCTYPE html>
<html>
<title>Roll Online Hall Booking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Roy Online Hall Booking</h2>

  <div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'New Hall')">New Hall</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Active/Deactive')">Active/Deactive</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Update')">Update</button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Logout')">Logout</button>
  </div>
  
  <div id="New Hall" class="w3-container w3-border city">
    <div id="add" class="tabcontent">

      <p class="double">
      <form action="" method="post">
      <input type="text" name="title" class="srctxt" placeholder="Hall Name" required><br>

      <textarea class="txtar" name="content" placeholder="Address" required></textarea><br>

      <input type="text" class="srctxt" name="price" placeholder="Price" required><br><br>
      <input type="submit" value="Add" class="btn" name="btnreg"> 
      </form>
  </div>

  <?php
  session_start();
if(isset($_POST["btnreg"]))
{
  function validate_input($data) 
    {
         $data = trim($data);
         $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
  $title =validate_input( $_POST["title"]);
  $content = $_POST["content"];
  $price = validate_input($_POST["price"]);
  if( $title=="" || $content=="" || $price=="")
  {
    echo "<script> alert('All field required');</script>";
    return;
  }
  else
  { 
      $sql = "INSERT INTO hall (h_name, h_place,price) VALUES ('$title','$content','$price')";
        if (mysqli_query($con, $sql))
          {
            echo "<script> alert('Successful');</script>";
          } 
        else 
          {
            //echo "<script> alert('Check if the field contain special charecter, or contact an administrator');</script>";
            echo mysqli_error($con);
            return;
          }
    
  }

    
}
?>    
</div>

<div id="Active/Deactive" class="w3-container w3-border city" style="display:none">
     <p class="double">
        <?php
          include('action.php');
        ?>
      </p>
  </div>

  <div id="Update" class="w3-container w3-border city" style="display:none">
     <?php
          include('update.php');
        ?>
  </div>
  <div id="Logout" class="w3-container w3-border city" style="display:none">
    <?php
          include('logout.php');
        ?>
  </div>
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

</body>
</html>
