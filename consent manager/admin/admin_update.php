<?php
include('../model/config.php');

if (isset($_POST['updatedata'])) {

    $date = date("m-d-Y");

    $request_status = $_POST['request_status'];

    $query = "UPDATE INTO requests (date, status ) 
            VALUES ('$date','$request_status')";

    $query_run = mysqli_query($link, $query);

    if ($query_run) {
        echo '<script> alert ("Data Saved"); </script>';
        header('Location: admin_datsubjectrequests.pho');
    } else {
        echo '<script> alert("Data Not Saved")</script>';
    }

}


