<!DOCTYPE html>
<html>
<head>
    <title>View ADD User_Type</title>
</head>
<body>
    <h1>ADD USER TYPE</h1>

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
    $sql = "SELECT * FROM adduser_type";

        //view_adduser_type    
 
    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='3'>
            <tr>
			<th>ADD USER ID </th>
               <th>ADD USER TYPE</th>

                <!-- Add other table headers for fields -->
            </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['adduser_id'] . "</td>
                <td>" . $row['adduser_typer'] . "</td>
                <!-- Add other table data for fields -->
            </tr>";
        }

        echo "</table>";
    } else {
        echo "No ADD User  found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
