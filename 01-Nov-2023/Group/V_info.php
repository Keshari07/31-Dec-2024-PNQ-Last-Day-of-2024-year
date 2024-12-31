<!DOCTYPE html>
<html>
<head>
    <title>View User Information</title>
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
   
  <!--    <h1 style="color: skyblue; background-color: black;" ><center><marquee behavior="scroll" direction="left" scrollamount="5">View User Information</marquee></center></h1> -->
	
   <h1><center><marquee behavior="scroll" direction="left" scrollamount="5">View User Information</marquee></center></h1>
	
    <?php
    // Database connection details
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "Reg";

    // Create a database connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to fetch data from the "assets" table
    $sql = "SELECT * FROM regusers";

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
                <td>" . $row['email'] . "</td>
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
