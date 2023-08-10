<?php
    $con = mysqli_connect("localhost", "root", "", "hotelwebsite");
    
    if(!$con){
        die("Cannot connect to database".mysqli_connect_error());
    }
?>