<?php

$con = mysqli_connect("localhost","root","root","hospital");

if (!$con){
    die('Connection Failed' .mysqli_connect_error());
}

?>