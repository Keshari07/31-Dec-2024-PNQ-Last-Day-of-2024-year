<!DOCTYPE html>
<html>
<head>
    <title>View User Information</title>
</head>
<body>
    <h1>View User Information</h1>

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
    $sql = "SELECT * FROM user_info";

    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='5'>
            <tr>
                <th>Uer ID </th>
                <th>User TYPE </th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email ID</th>
                 <th>Password</th>
                  <th>Confirm Password</th>
                  <th>Group HEAD</th>
        <!-- Add other table headers for fields -->
            </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                
                 <td>" . $row['id'] . "</td>
                <td>" . $row['user_type'] . "</td>
                <td>" . $row['first_name'] . "</td>
                <td>" . $row['last_name'] . "</td>
                <td>" . $row['email_id'] . "</td>
                <td>" . $row['password'] . "</td>
                <td>" . $row['confirm_password'] . "</td>
                <td>" . $row['group_head'] . "</td>

            
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
