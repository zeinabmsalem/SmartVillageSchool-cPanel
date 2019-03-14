<?php

include("dbconn.php"); 

if (isset($_POST['edit'])) {
    //column names
    $editmission = $_POST['editmission'];
    $editvision = $_POST['editvision'];
    $editaccreditation = $_POST['editaccreditation'];
    $editimage = $_POST['editimage'];
    
    $column_mission = $_POST['column_mission'];
    $column_vision = $_POST['column_vision'];
    $column_accreditation = $_POST['column_accreditation'];
    $column_image = $_POST['column_image'];
    
    
    $mission = $_POST['mission'];
    $vision = $_POST['vision'];
    $accreditation = $_POST['accreditation'];
    
    $kipling_id = $_POST['kipling_id'];

        $kipling_image = isset($_FILES['image']['name']) ? $_FILES['image']['name']: '';
        
        if($kipling_image!=''){
           $target_dir = "upload/"; 
           $target_file = $target_dir . basename($_FILES['image']['name']);
        }
 
        
        $sqlcolumn =  "ALTER TABLE kipling_school_homepage 
                        CHANGE $column_image $editimage varchar(512), 
                        CHANGE $column_mission $editmission longtext, 
                        CHANGE $column_vision $editvision longtext,
                        CHANGE $column_accreditation $editaccreditation longtext";
        
        
        //alter table tablename change oldColumn newColumn varchar(10) ;
        
        $sql = "update kipling_school_homepage
                    set $editmission = '$mission', 
                    $editvision = '$vision',
                    $editaccreditation = '$accreditation',
                    $editimage = '$target_file'
                    where id = $kipling_id";

        
        $result1 = mysqli_query($conn, $sqlcolumn);
        $result2 = mysqli_query($conn, $sql);
        
        
        
	if ($result1 && $result2) {
               header("Location:kipling.php");
        } else {
                echo "Error: Incorrect data please try again";
               }

}
?>
   