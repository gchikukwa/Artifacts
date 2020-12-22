<!--
Into this file, we write a code for display user information.
-->

<?php
include_once('link.php');
include_once ('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$sql = "SELECT id, Deviceid, Firstname, Lastname, Address, City, State, Zipcode, Email FROM tbluser";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $deviceid = $row["Deviceid"];
        $fname = $row["Firstname"];
        $lname = $row["Lastname"];
        $address = $row["Address"];
        $city = $row["City"];
        $state = $row["State"];
        $zipcode = $row["Zipcode"];
        $email = $row["Email"];


    }

}

?>

<main>

    <meta charset="UTF-8">
    <title>User Web Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="../main.css">
</main>
<div id="account">
    <div class="col-lg-6 col-sm-6">
        <div class="card hovercard">
            <div class="card-background">
                <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
                <!-- http://lorempixel.com/850/280/people/9/ -->
            </div>
            <div class="useravatar">
                <img alt="" src="img/user.svg">
            </div>
            <div class="card-info">
                <span class="card-title"><?php echo $fname." ".$lname; ?></span>
            </div>

        </div>
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <div class="hidden-xs">Profile</div>
                </button>
            </div>

        </div>

        <div class="well">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                    <table class="table">

                        <tr>
                            <td>Device ID</td>
                            <td><?php echo $deviceid; ?></td>
                        </tr>


                        <tr>
                            <td>First Name</td>
                            <td><?php echo $fname; ?></td>
                        </tr>

                        <tr>
                            <td>Last Name</td>
                            <td><?php echo $lname; ?></td>
                        </tr>

                        <tr>
                            <td>Address</td>
                            <td><?php echo $address; ?></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><?php echo $city; ?></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td><?php echo $state; ?></td>
                        </tr>
                        <tr>
                            <td>Zip Code</td>
                            <td><?php echo $zipcode; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $email; ?></td>

                        </tr>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>
