<?php 
require 'db.php';
session_start();

$id = $_GET['id'];

$delete = "DELETE FROM users WHERE id=$id";

mysqli_query($db_connection,$delete);

$_SESSION['deleteMsg'] = 'User Deleted Successfully';
header('location:show_users.php');

















?>
