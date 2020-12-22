<?php

include("../model/config.php");

if (isset($_POST['insertdata'])) {
    $date = date("m-d-Y");
    $request_type = $_POST['request_type'];
    $cemail = $_POST['cemail'];
    $rfrequest = $_POST['rfrequest'];
    $status_pending = $_POST['status_pending'];


    $query= "INSERT INTO requests (request_type, cemail, rfrequest, date, status ) 
            VALUES ('$request_type','$cemail','$rfrequest', '$date', '$status_pending')";

    $query_run = mysqli_query($link, $query);

    if ($query_run ) {
        echo '<script> alert ("Data Saved"); </script>';
        header('Location: datasubjectrequest.php');
    } else {
       echo '<script> alert("Data Not Saved")</script>';
    }
}
