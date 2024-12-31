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
    $user_id = $_POST['user_id'];
    $serial_number = $_POST['serial_number'];
    $asset_type           = $_POST['asset_type'];
    $asset_name           = $_POST['asset_name'];
    $asset_identifier     = $_POST['asset_identifier'];
    $custodian            = $_POST['custodian'];
    $user_type            = $_POST['user_type'];
    $asset_description    = $_POST['asset_description'];
    $location              = $_POST['location'];
    $security_classification = $_POST['security_classification'];
    $backup_location  = $_POST['backup_location'];

    // Add other fields here

    $sql = "INSERT INTO assets (user_id,serial_number, asset_type, asset_name,asset_identifier,custodian,user_type,asset_description,location,security_classification,backup_location)VALUES ('$user_id','$serial_number', '$asset_type', '$asset_name','$asset_identifier','$custodian','$user_type','$asset_description','$location','$security_classification','$backup_location')";
    // Add other fields to the query

    if ($conn->query($sql) === TRUE) {
        echo "Asset added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

