<?php include("db_group.php"); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>ADD GRUOP TYPE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script src="js/jquery-2.0.3.min.js" type="text/javascript" ></script>
<script src="js/bootstrap.min.js" type="text/javascript" ></script>
     <!-- External C S S -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >
</head>
<body>
<div class="container">
<div class="panel panel-primary">
<div class="panel-heading"><b><center>Information Security Management System (ISMS)</b></center></div>
<form action="db_group.php" method="post">
<br>
      <div><center><img src="images/group.png" width="100" alt="Silchar"/></center></div>
 
<br>
          <div class="form-group">
            <label  style="background-color: #f0f0f0">Group Name</label>
            <input type="text" class="form-control" name="group_name" placeholder="Enter Your Group Name" required/>
			
		<br>        
          <table width="100%">
         <tr>
           <td align="center" bgcolor="gray" ><font face="Calibri "  size="6" color="blue"><b><i>@Center Development Of Advanced Computing Center In North EAST(CINE)</b></i></td>
        </table>
        <br>
      
           <center><button type="submit" class="btn btn-info">Save</button></center>
          </div>
       </div>	
    </form>
</div>
</div>
 </body>
</html>
