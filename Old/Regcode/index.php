<?php include("add_asset.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Asset Management</h1>
        <form action="add_asset.php" method="POST">

          <div class="form-group">
                <label for="serial_number">User ID</label>
                <input type="text" class="form-control" id="serial_number" name="user_id" required>
            </div>

            <div class="form-group">
                <label for="serial_number">Serial Number</label>
                <input type="text" class="form-control" id="serial_number" name="serial_number" required>
            </div>
            
            <div class="form-group">
                <label for="asset_type">Asset Type</label>
                <input type="text" class="form-control" id="serial_number" name="asset_type" required>
            </div>
            
             <div class="form-group">
                <label for="serial_number">Asset Name</label>
                <input type="text" class="form-control" id="serial_number" name="asset_name" required>
            </div>

            <div class="form-group">
                <label for="serial_number">Asset Identifier</label>
                <input type="text" class="form-control" id="serial_number" name="asset_identifier" required>
            </div>

            <div class="form-group">
                <label for="serial_number">Custodian</label>
                <input type="text" class="form-control" id="serial_number" name="custodian" required>
            </div>

             <div class="form-group">
                <label for="serial_number">User Type</label>
                <input type="text" class="form-control" id="serial_number" name="user_type" required>
            </div>

             <div class="form-group">
                <label for="serial_number">Asset Description</label>
                <input type="text" class="form-control" id="serial_number" name="asset_description" required>
            </div>    

            <div class="form-group">
                <label for="asset_type">Location</label>
                <input type="text" class="form-control" id="asset_type" name="location" required>
            </div>
            <div class="form-group">
                <label for="asset_name">Security Classification</label>
                <input type="text" class="form-control" id="asset_name" name="security_classification" required>
            </div>

            <div class="form-group">
                <label for="serial_number">Backup Location</label>
                <input type="text" class="form-control" id="serial_number" name="backup_location" required>
            </div>

            <!-- Add other fields here -->
            <button type="submit" class="btn btn-primary">Add Asset</button>
        </form>
    </div>
</body>
</html>

 
 