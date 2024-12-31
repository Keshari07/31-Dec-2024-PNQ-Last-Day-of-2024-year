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

    $id = $_POST['id'];
    $user_type = $_POST['user_type'];
    $first_name = $_POST['first_name'];
    $last_name           = $_POST['last_name'];
    $email_id           = $_POST['email_id'];
    $password            = $_POST['password'];
    $cpassword            = $_POST['cpassword'];
    $group_head           = $_POST['group_head'];
   
// Add other fields here

    $sql = "INSERT INTO user_info(id,user_type,first_name,last_name,email_id,password,cpassword,group_head)VALUES ('$id','$user_type','$first_name','$email_id', '$password','$cpassword','$group_head')";
    // Add other fields to the query

    if ($conn->query($sql) === TRUE) {
        echo "Asset added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

