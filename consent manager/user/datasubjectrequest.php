<?php
include ("../view/menu_header.php");
require_once ('../model/config.php');
$sql = "SELECT id, request_type, cemail, rfrequest, date, status FROM requests ";
$results = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consent Manager</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
    <ul>
        <li><a class="active" href="dashboard.php">Dashboard</a></li>
        <li><a href="datasubjectrequest.php">Data Subject Requests</a></li>
    </ul>

    <div style = "margin-left:20% ">
        <br/>
        <h2> Data Subject Requests</h2>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#makerequestModal">
            Make a Request
        </button>

    <!-- Modal -->
    <div class="modal fade" id="makerequestModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Make a Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action = "insertcode.php" method = "POST" >

                        <label >Request Type</label> <br>
                        <select name="request_type"  >
                            <option>---Select Request Type--</option>
                            <option value="Access"> Right of Access (Retrieve Consumer Data)</option>
                            <option value="Delete"> Right to be Forgotten(Delete Consumer Data)</option>
                        </select>
                        <br>
                        <div class=" form-group">
                            <br>
                            <label> Consumer Email </label><br>
                            <input type = "text" class="textbox" size="50%"  name = "cemail" class="form-control" placeholder = "Enter Email" >
                        </div>

                        <div class=" form-group">
                            <label> Reason for Request </label>
                            <br>
                            <input type = "text" class="textbox" size="50%"  name = "rfrequest" class="form-control" placeholder = "Enter Reason for Request">
                        </div>

                        <label> Status </label>
                        <br>
                        <select name="status_pending"  >
                            <option value=" Pending">Pending</option>
                        </select>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name = "insertdata" class="btn btn-primary">Submit Request</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

       <br><br>
        <h4> Your Requests</h4>
        <table class="table table-striped">

            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Request Type</th>
                <th scope="col">Email</th>
                <th scope="col">Reason for Request</th>
                <th scope="col">Submitted Date </th>
                <th scope="col">Status</th>
                <th scope="col"> </th>

            </tr>
            </thead>


            <?php
            //use to return data
            while ($requests = mysqli_fetch_assoc($results)) {
                ?>
                <tbody>
                <tbody>
                <tr>
                    <td><?php echo $requests['id']; ?></td>
                    <td><?php echo $requests['request_type']; ?></td>
                    <td><?php echo $requests['cemail']; ?></td>
                    <td><?php echo $requests['rfrequest']; ?></td>
                    <td><?php echo $requests['date']; ?></td>
                    <td><?php echo $requests['status']; ?></td>


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
        <br><br>
        <h4> Completed Requests</h4>
        <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Request Type</th>
            <th scope="col">Email</th>
            <th scope="col">Reason for Request</th>
            <th scope="col">Submitted Date </th>
            <th scope="col">Status</th>
            <th scope="col">Completed Date</th>
            <th scope="col"> </th>

        </tr>
        </thead>

        </table>
        </section>
    </div>

</html>

<?php include ("../view/footer.php");?>