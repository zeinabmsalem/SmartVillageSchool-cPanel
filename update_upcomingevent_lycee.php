<?php

require_once 'dbconn.php';
session_start();


if (isset($_POST['edit'])) {

    $event_title = $_POST['event_title'];
    $event_starttime = $_POST['Start_time'];
    $event_endtime = $_POST['end_time'];
    $event_day = $_POST['event_day'];
    $event_location = $_POST['location'];
    
    $event_id = $_POST['event_id'];
   
    $sql = "update upcoming_events_lycee
            set title = '$event_title', 
            start_time = '$event_starttime',
            end_time = '$event_endtime',
            event_day = '$event_day',
            location = '$event_location'
            where id = " . $event_id;
    
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
            header("Location:upcoming_events_lycee.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

   