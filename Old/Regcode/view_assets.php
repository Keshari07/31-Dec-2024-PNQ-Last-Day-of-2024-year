<!DOCTYPE html>
<html>
<head>
    <title>View Assets</title>
</head>
<body>
    <h1>Asset List</h1>

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
    $sql = "SELECT * FROM assets";

    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='6'>
            <tr>
                <th>User ID </th>
                <th>Serial Number</th>
                <th>Asset Type</th>
                <th>Asset Name</th>
                 <th>Asset Identifier</th>
                 <th>Custodian</th>
                 <th>User Type</th>
                <th>Asset Description</th>
                <th>Location</th>
                <th>Security Classification</th>
               <th>Backup Location</th>

                <!-- Add other table headers for fields -->
            </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['user_id'] . "</td>
                <td>" . $row['serial_number'] . "</td>
                <td>" . $row['asset_type'] . "</td>
                <td>" . $row['asset_name'] . "</td>
                <td>" . $row['asset_identifier'] . "</td>
                 <td>" . $row['custodian'] . "</td>
                <td>" . $row['user_type'] . "</td>
                 <td>" . $row['asset_description'] . "</td>
                <td>" . $row['location'] . "</td>
                 <td>" . $row['security_classification'] . "</td>
                <td>" . $row['backup_location'] . "</td>
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
