<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "asset_management";

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

 if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

  // Add other fields here
       $group_id = $_POST['group_id'];
       $group_type = $_POST['group_type'];
     
// Insert user data into the database

    $sql = "INSERT INTO addgrup_type(group_id,group_type)VALUES('$group_id','$group_type')";
  
   // $sql = "INSERT INTO adduser_type(adduser_type)VALUES($adduser_type')";
    // Add other fields to the query

    if ($conn->query($sql) === TRUE) {
        echo "Asset added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>