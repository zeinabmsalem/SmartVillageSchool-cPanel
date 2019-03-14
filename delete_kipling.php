<?php

require_once 'dbconn.php';

$userType_id;
session_start();
if (empty($_SESSION['userType_id'])) {
    header("Location:loginpage.php");
} else {
    $userType_id = $_SESSION['userType_id'];
}

    $image_id = $_GET['id'];
    
    $sql= "delete from kipling_school_homepage WHERE id=" . $image_id;
    
    if (mysqli_query($conn, $sql)) {
        header("Location:kipling.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
