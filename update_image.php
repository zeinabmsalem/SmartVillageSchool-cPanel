<?php

include("dbconn.php"); 

$image_id = $_GET['id'];


if (isset($_POST['add'])) {

        $website_image = isset($_FILES['website_image']['name']) ? $_FILES['website_image']['name']: '';
        
        if($website_image!=''){
           $target_dir = "upload/"; 
           $target_file = $target_dir . basename($_FILES['website_image']['name']);
        }
 
        
        $sql = "update images
            set img_url = '$target_file'
            where id = " . $image_id;
        
        echo $sql;
        
	if (mysqli_query($conn, $sql)) {
               header("Location:images.php");
        } else {
                echo "Error: Incorrect data please try again";
               }

}
?>


   