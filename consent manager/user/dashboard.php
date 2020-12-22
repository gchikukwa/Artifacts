<?php
include ("../view/menu_header.php");
require_once ('../model/config.php');

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$sql = "SELECT id, consent, decription, email, consentyn_date FROM consent ";
$results = mysqli_query($link, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consent Manager</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="../main.css">
</head>
<body>
    <ul>
        <li><a class="active" href="dashboard.php">Dashboard</a></li>
        <li><a href="datasubjectrequest.php">Data Subject Requests</a></li>

    </ul>
    <div style = "margin-left:20% ">

        <h1> User Dashboard</h1>
        <h3> Consent </h3>
        <table class="table table-striped">

            <thead>
            <tr>
                <th scope="col">Consent</th>
                <th scope="col">Description</th>
                <th scope="col">Email</th>
                <th scope="col">Consent Date</th>
                <th scope="col"> </th>

            </tr>
            </thead>

            <?php
            //use to return data
            while ($consent = mysqli_fetch_assoc($results)) {
                ?>
                <tbody>
                <tbody>
                <tr>
                    <td><?php echo $consent['consent']; ?></td>
                    <td><?php echo $consent['decription']; ?></td>
                    <td><?php echo $consent['email']; ?></td>
                    <td><?php echo $consent['consentyn_date']; ?></td>

                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#reviewrequestModal">
                            Revoke Consent
                        </button>

                    </td>


                </tr>


                </tbody>



                </tbody>


                <?php
            }
            ?>
            <?php
            ///free results from memory
            mysqli_free_result($results);
            ?>
        </table>
        <br><br><br>
        <h3>Did not Consent</h3>
        <table class="table table-striped">
        <tr>
            <th scope="col">Consent</th>
            <th scope="col">Description</th>
            <th scope="col">Email</th>
            <th scope="col">Consent Date</th>
            <th scope="col"> </th>

        </tr>
        </table>
         <br><br><br>
        <h3>Revoked Consent</h3>
        <table class="table table-striped">
            <tr>
                <th scope="col">Consent</th>
                <th scope="col">Description</th>
                <th scope="col">Email</th>
                <th scope="col">Consent Date</th>
                <th scope="col">Revoked Date</th>

                <th scope="col"> </th>

            </tr>
        </table>



    </div>

</body>

</html>
<?php include ("../view/footer.php");?>