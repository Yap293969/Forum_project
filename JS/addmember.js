// script.js
function validateForm() {
    var username = document.getElementById('userName').value;

    if (username.trim() === '') {
        alert('Username cannot be empty');
        return false; // Prevent form submission
    }

    return true; // Allow form submission
}
