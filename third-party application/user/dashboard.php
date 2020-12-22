<?php
include ("../view/menu_header.php");
require_once('../model/config.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Third-Party Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="../main.css">
</head>
<body>
    <ul>
        <li><a class="active" href=" ">Dashboard</a></li>
     

    </ul>
    <div style = "margin-left:20% ">
        <h3> Retrieved loT User Personal information</h3>
         <br>
        <table width="100%" class=" listing_table">
           <thead>
           <tr>
               <th>Device ID</th>
               <th>First name</th>
               <th>Last name </th>
               <th>Address</th>
               <th>City</th>
               <th>State</th>
               <th>Zip Code</th>
               <th>Phone number</th>
               <th>Email</th>
           </tr>

           </thead>

            <tbody>
            <?php







            ?>



            </tbody>


        </table>





    </div>

</body>

</html>

<?php include ("../view/footer.php");?>