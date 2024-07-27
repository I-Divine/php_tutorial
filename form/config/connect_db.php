<?php
// connecting to database
$conn = mysqli_connect("Localhost","Divine","test1234#","users");

//checking for error
 if(!$conn){
    echo mysqli_connect_error();
 }
