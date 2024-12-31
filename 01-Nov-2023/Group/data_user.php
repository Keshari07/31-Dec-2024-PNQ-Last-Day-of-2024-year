<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "reg";

// Establish a database connection
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);

    $sql = "INSERT INTO users (user_type) VALUES ('$user_type')";

    if (mysqli_query($conn, $sql)) {
        echo "User created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
