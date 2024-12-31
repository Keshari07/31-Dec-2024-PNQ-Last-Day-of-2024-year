<!DOCTYPE html>
<html>
<head>
    <title>View Group Information</title>
	<style>
        body {
            background-color: black;
        }

        p, h1, h2, h3, h4, h5, h6, table, tr,th {
            color: skyblue;
        }
		  table {
      width:1400px; /* Set the width of the table */
      height:100px; /* Set the height of the table */
      border: 5px; /* Optional border for visibility */
    }
    th, td {
      padding: 5px; /* Optional padding for table cells */
    }
    </style>
</head>
<body >
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

$sql = "SELECT * FROM groups";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='5'>";
    echo "<tr><th>Group ID</th><th>Group Type</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['group_id'] . "</td><td>" . $row['group_type'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}

mysqli_close($conn);
?>
</body>
</html>

