<?php

$con = mysqli_connect('localhost','root','','tourism');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>