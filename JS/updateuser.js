function updateUser() {
    var userId = document.getElementById('userId').value;
    var username = document.getElementById('username').value;
    var userRole = document.getElementById('userRole').value;
    var userStatus = document.getElementById('userStatus').value;
    var userJoinDate = document.getElementById('userJoinDate').value;

    $.ajax({
        type: 'POST',
        url: 'Update_User_Process.php',
        data: {
            userId: userId,
            username: username,
            userRole: userRole,
            userStatus: userStatus,
            userJoinDate: userJoinDate
            // Include other form fields in the data object
        },
        success: function(response) {
            if (response === 'success') {
                alert('User information updated successfully');
                window.location.href = 'ManagementDashboard.php';
            } else {
                alert('Error updating user information');
            }
        },
        error: function(error) {
            alert('Error updating user information');
        }
    });
}
