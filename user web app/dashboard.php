<!--Into this file, we create a layout for the dashboard page.-->
<?php
include_once('header1.php');
include_once ('link.php');
require_once('connection.php');

$sql = "SELECT id, Deviceid, kWh, Frequencyhourly, Datetime FROM tbldevicedata ";
$results = mysqli_query($conn, $sql);

?>

<head>

        <meta charset="UTF-8">
        <title>User Web Application</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="../main.css">
    <style>


        body {
            width: 1365px;
            margin: 0 auto;
            font-family: Georgia, "Times New Roman", Times, serif;
            font-size: 81.25%;
        }
        h3,h4 {
            color: rgba(47,86,135,1);
        }
        aside {
            padding: 3em;
            width: 260px;
            float: left;
        }
        section {
            width: 600px;
            margin-left: 260px;
        }
        .bs-modal{
            font-size: 150%;
        }
    </style>

    <script>
        $(document).ready(function(){
            $("#modalScrollableCenter").modal('show');
        });
    </script>
</head>

<body>


<aside >
    <h4><a href="dashboard.php">Dashboard</a></h4>
    <h4><a href="account.php">User Profile</a></h4>
</aside>

<section>
    <h3>Dashboard</h3>
    <br>
    <h4> Device Data</h4>
    <table class="table table-striped">

        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Device ID</th>
            <th scope="col">kWh</th>
            <th scope="col">Frequency</th>
            <th scope="col">Date and Time</th>
        </tr>
        </thead>

        <?php
        //use to return data
        while ($tbldevicedata = mysqli_fetch_assoc($results)) {
            ?>
            <tbody>
            <tbody>
            <tr>
                <td><?php echo $tbldevicedata['id']; ?></td>
                <td><?php echo $tbldevicedata['Deviceid']; ?></td>
                <td><?php echo $tbldevicedata['kWh']; ?></td>
                <td><?php echo $tbldevicedata['Frequencyhourly']; ?></td>
                <td><?php echo $tbldevicedata['Datetime']; ?></td>
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
</section>

<div class="bs-modal">
    <div id="modalScrollableCenter" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <form action = "api/collectconsent.php" method = "post">
                    <div class="modal-header">
                        <h4 lass="modal-title">Consent Form
                    </div>
                    <div class="modal-body">
                        <p style ="color:darkblue"><strong>By checking the boxes you agree or disagree to the below statements.</strong></p>
                        <br>

                       <div>
                           <input type="checkbox" name="checkbox1" value="Yes"> Yes</input>
                           <input type="checkbox" name="checkbox1" value="No"> No </input>

                           &nbsp;  After reading the <strong>Privacy Policy</strong>, I agree to have my personal data collected and   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; processed by Company XYZ.
                       </div>
                        <br>
                       <div>
                           <input type="checkbox" name="checkbox2" value="Yes"> Yes</input>
                           <input type="checkbox" name="checkbox2" value="No"> No </input>
                           &nbsp; After reading the <strong>Privacy Policy</strong>, I agree to have my data processed by Company XYZ to &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; record and analyze my preferences (profiling).
                       </div>
                        <br>
                        <div>
                            <input type="checkbox" name="checkbox3" value="Yes"> Yes</input>
                            <input type="checkbox" name="checkbox3" value="No"> No </input>
                            &nbsp; After reading the <strong>Privacy Policy</strong>, I agree to have Company XYZ to share my data with &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;third-parties.
                        </div>
                        <br>
                         Email <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                        <br>
                        <br>
                        <p>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                                Privacy Policy
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample1">
                            <div class="card card-body">
                                <b>When Does this Privacy Policy Apply?</b>
                                <br><br>
                                This Privacy Policy applies whenever we collect personal information from or about you when you access or use our applications, products, and technology.
                                 <br><br>
                                 <b> Data Retention </b>
                                  <br><br>
                                 We retain your personal data in accordance with our record retention policy. The record retention policy operates on the principle that we keep personal data for no longer than is necessary for the purpose for which we collected it, and in accordance with any requirements that are imposed on us by law. This means that the retention period for your personal data will vary depending on the type of personal data.
                                
                                <br><br>
                                <b> Important Information about Consent</b>
                                <br><br>

                                When we process your personal data on the basis of your consent, you are free to withdraw that consent at any time. You can withdraw your consent through the <a href="#">Consent Manager</a>. Please note that if you withdraw your consent we may not be able to continue to provide the related service to you.
                                <br><br>

                                <b>Your Rights Under Data Protection Law</b>
                                <br><br>

                                You have various rights under data protection law in connection with our processing of your personal data. For example, you have the right to request a copy of your personal data that we hold and to request that we correct any errors in the personal data that we hold. These rights are subject to certain exceptions and exemptions. You have the following rights under data protection law:
                                <br><br>

                                <b>Right to Access Your Personal Data</b> - You have the right to request a copy of the personal data that we hold about you, together with other information about our processing of that personal data.
                                <br><br>

                                <b>Right to Rectification</b> – You have the right to request that any inaccurate data that is held about you is corrected, or if we have incomplete information you may request that we update the information so that it is complete.
                                <br><br>

                                <b>Right to Erasure</b> – You have the right to request us to delete personal data that we hold about you. This is sometimes referred to as the right to be forgotten.
                                <br><br>

                                <b> Right to Restriction of Processing or to Object to Processing</b> – You have the right to request that we no longer process your personal data for particular purposes, or to object to our processing of your personal data for particular purposes.
                                <br><br>
                                <b> Right to Data Portability </b> – You have the right to request us to provide you, or a third party, with a copy of your personal data in a structured, commonly used machine-readable format.

                                <br><br>

                                <b>How Can I Access or Update My Information or make a request?</b>
                                <br><br>

                                We want to be sure your personal information is kept accurate and complete, and for this reason we ask that you inform us in the event of any changes to your information. Put your request through the <a href="#">Consent Manager</a> and it will be processed in a timely manner.

                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" name = "insertdata" class="btn btn-primary">Submit</button>
                        </div>

                </form>
            </div>

        </div>

    </div>
</div>

</body>
