<?php

$connect = mysqli_connect('localhost', 'root', '', 'bookshop');

if(!$connect){
    die("error connect");
}