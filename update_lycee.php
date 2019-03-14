<?php

require_once 'dbconn.php';
session_start();


if (isset($_POST['edit'])) {
    
        //column names
    $editimage = $_POST['editimage'];
    $editmission = $_POST['editmission'];
    $editvision = $_POST['editvision'];
    $edithomologation = $_POST['edithomologation'];

    
    $column_image = $_POST['column_image'];
    $column_mission = $_POST['column_mission'];
    $column_vision = $_POST['column_vision'];
    $column_homologation = $_POST['column_homologation'];

    $mission = $_POST['mission'];
    
    $vision = $_POST['vision'];
    
    $homologation = $_POST['homologation'];
    
    $lycee_id = $_POST['lycee_id'];
    
    $website_image = isset($_FILES['image']['name']) ? $_FILES['image']['name']: '';
        
        if($website_image!=''){
           $target_dir = "upload/"; 
           $target_file = $target_dir . basename($_FILES['image']['name']);
        }
        
    
    $sqlcolumn =  "ALTER TABLE lycee 
                    CHANGE $column_image $editimage varchar(512), 
                    CHANGE $column_mission $editmission text,
                    CHANGE $column_vision $editvision text,
                    CHANGE $column_homologation $edithomologation text";
    
       
    $sql = "update lycee
            set $editimage = '$target_file',
            $editmission = '$mission',
            $editvision = '$vision',
            $edithomologation = '$homologation'
            where id = " . $lycee_id;
    
    
        $result1 = mysqli_query($conn, $sqlcolumn);
        $result2 = mysqli_query($conn, $sql);
        

    if ($result1 && $result2) {
            header("Location:lycee.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

   