<?php

require_once 'dbconn.php';
session_start();


if (isset($_POST['edit'])) {

    $summary = $_POST['summary'];
    
    $activity_id = $_POST['activity_id'];
    
    $website_image = isset($_FILES['image']['name']) ? $_FILES['image']['name']: '';
        
        if($website_image!=''){
           $target_dir = "upload/"; 
           $target_file = $target_dir . basename($_FILES['image']['name']);
        }
        
   
    $sql = "update endpage_activites
            set summary = '$summary',
            image = '$target_file'
            where id = " . $activity_id;

    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
            header("Location:end_activites.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

   