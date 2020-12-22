
<!--
Into this file, we create a layout for registration page.
-->
<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('header.php');
include_once('link.php');
?>
<main>

    <meta charset="UTF-8">
    <title>User Web Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="../main.css">
</main>
<div id="frmRegistration">
    <form class="form-horizontal" action="registration_code.php" method="POST">
        <h1>User Registration</h1>
        <div class="form-group">
            <label class="control-label col-sm-2" for="firstname">First Name:</label>
            <div class="col-sm-6">
                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="lastname">Last Name:</label>
            <div class="col-sm-6">
                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="address">Address:</label>
            <div class="col-sm-6">
                <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="city">City:</label>
            <div class="col-sm-6">
                <input type="text" name="city" class="form-control" id="city" placeholder="Enter City">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="state">State:</label>
            <div class="col-sm-6">
                <input type="text" name="state" class="form-control" id="state" placeholder="Enter State">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="address">Zip Code:</label>
            <div class="col-sm-6">
                <input type="text" name="zip" class="form-control" id="zip" placeholder="Enter Zipcode">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="phone"> Phone Number:</label>
            <div class="col-sm-6">
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-2" for="deviceid">Device ID:</label>
            <div class="col-sm-6">
                <input type="text" name="deviceid" class="form-control" id="deviceid" placeholder="Enter Device ID">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email"> Email :</label>
            <div class="col-sm-6">
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-6">
                <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="create" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>