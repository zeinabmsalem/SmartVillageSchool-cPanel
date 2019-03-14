<?php

require_once 'dbconn.php';
session_start();


if (isset($_POST['edit'])) {
    
    //column names
    $editletter = $_POST['editletter'];
    $editmission = $_POST['editmission'];
    $editvision = $_POST['editvision'];

    
    $column_letter = $_POST['column_letter'];
    $column_mission = $_POST['column_mission'];
    $column_vision = $_POST['column_vision'];
    
    $mission = $_POST['mission'];
    
    $vision = $_POST['vision'];
    
    $letter_id = $_POST['letter_id'];
    
    $website_image = isset($_FILES['image']['name']) ? $_FILES['image']['name']: '';
        
        if($website_image!=''){
           $target_dir = "upload/"; 
           $target_file = $target_dir . basename($_FILES['image']['name']);
        }
        
   
        $sqlcolumn =  "ALTER TABLE letter_from_chairman_about 
                CHANGE $column_letter $editletter varchar(512), 
                CHANGE $column_mission $editmission text,
                CHANGE $column_vision $editvision text";


        $sql = "update letter_from_chairman_about
                set $editletter = '$target_file',
                $editmission = '$mission',
                $editvision = '$vision'
                where id = " . $letter_id;
    
    
        $result1 = mysqli_query($conn, $sqlcolumn);
        
        $result2 = mysqli_query($conn, $sql);
        

   
        if ($result1 && $result2) {
            header("Location:letter_about.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

   