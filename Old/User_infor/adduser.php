<?php include("db_process.php"); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>ADD USER TYPE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="js/jquery-2.0.3.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- External C S S -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"><b>
                    <center>Information Security Management System (ISMS)
                </b></center>
            </div>
            <form action="db_process.php" method="post">
                <br>
                <div><img src="images/Silchar1.png" width="100" alt="Silchar" /></div>

                <br>
                <div class="form-group">
                    <label style="background-color: #f0f0f0">User ID</label>
                    <input type="text" name="adduser_id" class="form-control" name="adduser_id"
                        placeholder="Enter Your User ID" required />
                </div>

                <div class="form-group">
				    <label for="select_option">User Type</label>
                    <select class="form-control"  id="select_option" name="adduser_type">
                        <option value="">----select--</option>
                        <option value="regular">Regular User</option>
                        <option value="outsource user">Outsource User</option>
                        <option value="Students">Students</< /option>
                        <option value="Apprentice">Apprentice</option>
                    </select>

                    <br>
                    <table width="100%">
                        <tr>
                            <td align="center" bgcolor="gray">
                                <font face="Calibri " size="6" color="blue">@Center Development Of Advanced Computing
                                    Center In North EAST(CINE)
                            </td>
                    </table>
                    <br>

                    <center><button type="submit" class="btn btn-info">Save</button></center>


                </div>
            </form>
        </div>
    </div>
</body>

</html>