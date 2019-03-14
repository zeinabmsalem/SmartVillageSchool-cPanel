<?php

require_once 'dbconn.php';
session_start();


if (isset($_POST['edit'])) {

    $event_summary = $_POST['event_summary'];
    
    $event_id = $_POST['event_id'];
    
    $website_image = isset($_FILES['image']['name']) ? $_FILES['image']['name']: '';
        
        if($website_image!=''){
           $target_dir = "upload/"; 
           $target_file = $target_dir . basename($_FILES['image']['name']);
        }
        
   
    $sql = "update current_events_kipling
            set summary = '$event_summary',
            image = '$target_file'
            where id = " . $event_id;

    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
            header("Location:current_events_kipling.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

   