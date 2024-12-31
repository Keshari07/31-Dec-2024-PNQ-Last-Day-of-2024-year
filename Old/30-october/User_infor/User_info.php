<?php include("db_userinfo.php"); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>USER INFOMATION</title>
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
<div class="panel-heading"><b><center>USER INFORMATION </b></center></div>
<form action="db_userinfo.php" method="post">
<br>
      <div><center><img src="images/info.png" width="100" alt="Silchar"/></center></div>
 
<br>
       <!--    <div class="form-group">
             <label  style="background-color: #f0f0f0">User ID</label>
                 <input type="text" class="form-control" name="id" placeholder="Enter Your UER ID" required/>
                 </div>     
-->
      
           <div class="form-group">
             <label  style="background-color: #f0f0f0">User Type</label>
                 <input type="text" class="form-control" name="user_type" placeholder="Enter Your User Type" required/>
                 </div>

        <div class="form-group">
          <label  style="background-color: #f0f0f0">First Name</label>
           <input type="text"  class="form-control" name="first_name" placeholder="Enter First Name" required/>
          </div>


        <div class="form-group">
          <label  style="background-color: #f0f0f0">Last_name</label>
          <input type="text" class="form-control" name="last_name" placeholder="Enter Your last Name" required/>
         </div>

     
        <div class="form-group">
          <label  style="background-color: #f0f0f0">Email ID </label>
           <input type="text" name="email_id" class="form-control" placeholder="Enter Your Email ID" required/>
           </div>

       <div class="form-group">
        <label  for="password" style="background-color: #f0f0f0">Password</label>
         <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required/>
           </div>

         <div class="form-group">
           <label for="password" style="background-color: #f0f0f0">Confirm Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter Your Confirm Password" required/>
              </div>

              <div class="form-group">
			                  <label for="select_option">Group HEAD</label>
                              <select class="form-control" name="group_head"name="select_option" id="select_option">
							   <option value="">----select--</option>
                                <option value="regular">Yes</option>
                                <option value="outsource user">NO</option>
			   </select>     
                       <br>              
           <center><button type="submit" class="btn btn-info">Save</button></center>
           </div>	
         </form>
         </div>
        </div>
      </body>
    </html>
