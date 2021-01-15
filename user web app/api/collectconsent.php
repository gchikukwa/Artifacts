
<?php

include("db_config.php");

if (isset($_POST['insertdata'])) {

    $checkbox1 = $_POST['checkbox1'];
    $checkbox2 = $_POST['checkbox2'];
    $checkbox3 = $_POST['checkbox3'];
    $date = date("m-d-Y");

    $description1 = "After reading the Privacy Policy, I agree to have my personal data collected and processed by Company XYZ.";
    $description2 = "After reading the Privacy Policy, I agree to have my data processed by Company XYZ to record and analyze my preferences (profiling).";
    $description3 = "After reading the Privacy Policy, I agree to have Company XYZ to share my data with third-parties. ";

    $query= "INSERT INTO consent (consent, decription, email, consentyn_date ) 
            VALUES ('$checkbox1', ' $description1','$email', '$date');
                   ('$checkbox2','$description2 ','$email', '$date');
                   ('$checkbox3', '$description3', '$email', '$date' )";

    $query_run = mysqli_query($conn, $query);

    if ($query_run ) {
        echo '<script> alert ("Data Saved"); </script>';
        header('Location: dashboard.php');
    } else {
        echo '<script> alert("Data Not Saved")</script>';
    }
}
