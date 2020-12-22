<!--
Into this file, we create a layout for login page.
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
    <form class="form-horizontal" method="POST" action="login_code.php">
        <br><br><br><br><br><br>
        <h1>User Login</h1>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
</div>

