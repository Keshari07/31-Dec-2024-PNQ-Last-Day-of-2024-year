<!DOCTYPE html>
<html>
<head>
    <title>View Group  Information</title>
</head>
<body>
    <h1>View Group Information</h1>

    <?php
    // Database connection details
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "asset_management";

    // Create a database connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to fetch data from the "assets" table
    $sql = "SELECT * FROM addgrup_type";

    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='5'>
            <tr>

                <th>Group ID</th>
                <th>Group TYPE</th>
        <!-- Add other table headers for fields -->
            </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                
    
                <td>" . $row['group_id'] . "</td>
                <td>" . $row['group_type'] . "</td>
                <t
            
                <!-- Add other table data for fields -->
            </tr>";
        }

        echo "</table>";
    } else {
        echo "No assets found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
