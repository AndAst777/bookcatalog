<?php
$con = mysqli_connect("localhost", "root", "root", "bookshop");

if (!$con) {
    echo "Connection failed" . mysqli_connect_error();
}
