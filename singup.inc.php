<?php
require('config.php');


$username = $_POST['username'];
$password = $_POST['password'];
$email =    $_POST['email'];
$nume =     $_POST['nume'];
$age =      $_POST['age'];
$prenume =  $_POST['prenume'];


$sql = "INSERT INTO users (username, password, email, nume, age, prenume) VALUES ('$username', '$password', '$email', '$nume',  '$age', '$prenume')";
$result = mysqli_query($config, $sql);

header ("Location: index.php");