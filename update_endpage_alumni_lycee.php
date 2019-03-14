<?php

require_once 'dbconn.php';
session_start();


if (isset($_POST['edit'])) {
    
    $name = $_POST['name'];
    
    $title = $_POST['title'];
    
    $lycee_id = $_POST['lycee_id'];
    
    $website_image = isset($_FILES['image']['name']) ? $_FILES['image']['name']: '';
        
        if($website_image!=''){
           $target_dir = "upload/"; 
           $target_file = $target_dir . basename($_FILES['image']['name']);
        }
   
    $sql = "update endpage_alumni_lycee
            set name = '$name',
            title = '$title',
            image = '$target_file'
            where id = " . $lycee_id;

    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
            header("Location:endpage_alumni_lycee.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

   