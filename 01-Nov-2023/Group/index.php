<?php include("register.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form method="post" action="register.php">
            <div class="form-group">
                 <label for="select_option">User Type:</label>
                <select class="form-control" name="user_type"id="select_option" name="select_option">
				<option value="">----select----</option>
                    <option value="Regular User">Regular User</option>
                    <option value="Out Source User">Out Source User</option>
					<option value="Students">Students</option>
					<option value="Apprentice">Apprentice</option>
					<option value="Intern">Intern</option>
                </select>
            </div>	   
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email ID:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" class="form-control" name="confirm_password" required>
            </div>
            <div class="form-group">
                <label for="select_option">Group HEAD</label>
                 <select class="form-control" name="group_head"name="select_option" id="select_option">
                    <option value="">----select----</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>
