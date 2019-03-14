<?php

include("dbconn.php"); 

//session_start();


if (isset($_POST['add'])) {

        $website_image = isset($_FILES['website_image']['name']) ? $_FILES['website_image']['name']: '';
        
        if($website_image!=''){
           $target_dir = "upload/"; 
           $target_file = $target_dir . basename($_FILES['website_image']['name']);
        }
    
        $sql = "insert into images (img_url) values ('$target_file')";
        
        echo $sql;
        
	if (mysqli_query($conn, $sql)) {
               header("Location:images.php");
        } else {
                echo "Error: Incorrect data please try again";
               }

}
?>


   