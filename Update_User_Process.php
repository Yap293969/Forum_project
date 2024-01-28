<!-- update_member.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>User Management</title>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">
    <!-- Your existing HTML code here -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        function updateUser(userId, newRole, newStatus) {
            // Make an AJAX request to update_user_process.php
            $.ajax({
                type: 'POST',
                url: 'update_user_process.php',
                data: {
                    userId: userId,
                    newRole: newRole,
                    newStatus: newStatus
                    // Add more data as needed
                },
                success: function(response) {
                    // Handle the response from the server
                    console.log('Update successful:', response);
                    // Optionally, you can update the UI or display a success message
                },
                error: function(error) {
                    console.error('Error updating user:', error);
                    // Handle errors or display an error message
                }
            });
        }
    </script>

    <?php include 'footer.php'; ?>
</body>
</html>
