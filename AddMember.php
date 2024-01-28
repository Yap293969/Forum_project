<!DOCTYPE html>
<html lang="en">
<head>
<script src="addmember.js" defer></script>
</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_forum_website";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['add_user'])){
    // Validate form data here (optional)

    $query = "INSERT INTO communities_management_dashboard (username, user_join_date, user_role, user_status) 
              VALUES (?, ?, ?, ?)";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $_POST['username'], $_POST['user_join_date'], $_POST['user_role'], $_POST['user_status']);

    if ($stmt->execute()) {
        echo "New user added successfully"; 

        // Redirect to managementdashboard.php
        header("Location: ManagementDashboard.php");
        exit(); // Ensure that no other code is executed after the redirection
    } else {
        // Display a user-friendly message or log the error
        echo "Error: Unable to add a new user.";
    }

    // Close the statement
    $stmt->close();
}
?>

<div class="container mt-4">
    <h2>Add New User</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="userName">Username:</label>
            <input type="text" class="form-control" id="userName" placeholder="Enter new username" name="username" required >
        </div>
        <div class="form-group">
            <label for="joinedDate">Date:</label>
            <input type="date" class="form-control" id="joinedDate" placeholder="Select joining date" name="user_join_date">
        </div>
        <div class="form-group">
            <label for="userRole">Role:</label>
            <input type="text" class="form-control" id="userRole" placeholder="Enter user role" name="user_role" required >
        </div>
        <div class="form-group">
            <label for="userStatus">Status:</label>
            <input type="text" class="form-control" id="userStatus" placeholder="Enter user status" name="user_status">
        </div>
        <button type="submit" class="btn btn-primary" name="add_user">Add User</button>
    </form>
</div>

<?php
include 'footer.php';
?>
</body>
</html>
