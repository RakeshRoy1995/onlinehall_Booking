
<?php
session_destroy();
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    echo "Your Have Been Logout <br><a href='index.php'> Click Here</a> To Exit";

?>
