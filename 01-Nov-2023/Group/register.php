<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "Reg";
    
	 $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    
   // Connect to the database (replace with your database credentials)
   // $conn = mysqli_connect("localhost", "username", "password", "database_name");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve form data
    $user_type = $_POST["user_type"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $group_head = $_POST["group_head"];

    // Insert data into the database
    $sql = "INSERT INTO regusers (user_type, first_name, last_name, email, password, group_head) VALUES ('$user_type', '$first_name', '$last_name', '$email', '$password', '$group_head')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
