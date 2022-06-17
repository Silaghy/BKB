<?php
$conn = mysqli_connect("localhost", "root","", "bkb");

if (!$conn)
    {
    die ("Connection error:" . mysqli_connect_error());
    }
?>
