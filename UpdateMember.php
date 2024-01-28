<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update User</title>
    <link rel="stylesheet" href="path/to/your/custom/style.css"> <!-- Link to your custom CSS file -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="updateuser.js"></script> <!-- Include your JavaScript file here -->
</head>
<style>
        .blue-form {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .blue-form label {
            width: 30%; /* Adjust the width as needed */
            margin-bottom: 10px;
        }

        .blue-form input {
            width: 65%; /* Adjust the width as needed */
            margin-bottom: 10px;
        }
        .update-button {
            width: 20%; /* Adjust the width as needed */
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 650px
        }
</style>
<body>

<?php include 'navbar.php'; ?>

<div class="container">
    <h2 class="blue-heading">Update User Information</h2>
    <form id="updateForm" class="blue-form">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="userRole">User Role:</label>
        <input type="text" id="userRole" name="userRole" required>

        <label for="userStatus">User Status:</label>
        <input type="text" id="userStatus" name="userStatus" required>

        <label for="userJoinDate">User Join Date:</label>
        <input type="date" id="userJoinDate" name="userJoinDate" required>
        
        <input type="hidden" id="userId" name="userId" value="<?php echo $_GET['id']; ?>">
        <button type="button" onclick="updateUser()" class="btn btn-primary update-button">Update User</button>
    </form>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
