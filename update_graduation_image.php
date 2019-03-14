<?php

include("dbconn.php"); 

$image_id = $_GET['id'];


if (isset($_POST['add'])) {

        $website_image = isset($_FILES['image']['name']) ? $_FILES['image']['name']: '';
        
        if($website_image!=''){
           $target_dir = "upload/"; 
           $target_file = $target_dir . basename($_FILES['image']['name']);
        }
 
        
        $sql = "update activites
            set img_url = '$target_file'
            where id = " . $image_id;
        
        echo $sql;
        
	if (mysqli_query($conn, $sql)) {
               header("Location:graduation_image.php");
        } else {
                echo "Error: Incorrect data please try again";
               }

}
?>


   