<?php


$config = mysqli_connect('localhost', 'root', '' ,'prima');

if (!$config) {
    die(mysqli_connect_error());
}