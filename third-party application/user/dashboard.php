<?php
include ("../view/menu_header.php");
require_once ("../DAL/dbconnection.php");
require_once ("../DAL/userDAL.php");

$userDAL = new UserDAL();

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
        <h3> Retrieved loT User Personal Information</h3>
         <br>
        <table width="100%" class=" listing_table">
           <thead>
           <tr>

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
            <?php

            $get_all_users = $usersDAL -> getUsers();
            foreach (get_all_users as $results)
            {
                ?>


            <tbody>
                <tr>
                    <td><?php echo $results['Firstname']; ?></td>
                    <td><?php echo $results['Lastname']; ?></td>
                    <td><?php echo $results['Address']; ?></td>
                    <td><?php echo $results['City']; ?></td>
                    <td><?php echo $results['State']; ?></td>
                    <td><?php echo $results['Zipcode']; ?></td>
                    <td><?php echo $results['Phonenumber']; ?></td>
                    <td><?php echo $results['Email']; ?></td>
                </tr>
                </tbody>
             <?php 
            }
          ?>
            
         </table>

    </div>

</body>

</html>

<?php include ("../view/footer.php");?>