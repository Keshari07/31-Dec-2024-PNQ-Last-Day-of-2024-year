<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "reg";

// Establish a database connection
  $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $group_type = mysqli_real_escape_string($conn, $_POST['group_type']);

    $sql = "INSERT INTO groups (group_type) VALUES ('$group_type')";

    if (mysqli_query($conn, $sql)) {
        echo "Group created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
