<?php

$con = mysqli_connect('localhost','root','','air');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>