<?php
require 'db.php';

$new_name = $_POST['name'];
mysqli_query($db_connect, "INSERT INTO `guestbook` (`name`) VALUES ('$new_name')");
header('Location: http://localhost:8080/');