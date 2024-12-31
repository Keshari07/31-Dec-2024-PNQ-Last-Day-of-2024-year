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
       $adduser_id = $_POST['adduser_id'];
      $adduser_type = $_POST['adduser_type'];
     
// Insert user data into the database

    $sql = "INSERT INTO adduser_type(adduser_id,adduser_type)VALUES('$adduser_id','$adduser_type')";
  
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